<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;

/**
 * Pokemon Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TypesTable&\Cake\ORM\Association\BelongsToMany $Types
 *
 * @method \App\Model\Entity\Pokemon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pokemon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pokemon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pokemon|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pokemon saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pokemon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pokemon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pokemon findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PokemonTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('pokemon');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Types', [
            'foreignKey' => 'pokemon_id',
            'targetForeignKey' => 'type_id',
            'joinTable' => 'pokemon_types'
        ]);
        $this->hasMany('Attacks', [
            'foreignKey' => 'pokemon_id'
        ]);
        $this->belongsToMany('Files', [
            'foreignKey' => 'pokemon_id',
            'targetForeignKey' => 'file_id',
            'joinTable' => 'pokemon_files'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
      /*  $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');*/

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

      /* $validator
            ->scalar('slug')
            ->maxLength('slug', 300)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');*/

        $validator
            ->scalar('body')
            ->maxLength('body', 800)
            ->requirePresence('body', 'create')
            ->notEmptyString('body');

        $validator
            ->requirePresence('published', 'create')
            ->notEmptyString('published');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
    public function beforeSave($event, $entity, $options) {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->name);
            // trim slug to maximum length defined in schema
            $entity->slug = substr($sluggedTitle, 0, 191);
        }
    }

}
