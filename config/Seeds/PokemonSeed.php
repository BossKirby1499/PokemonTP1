<?php
use Migrations\AbstractSeed;

/**
 * Pokemon seed.
 */
class PokemonSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'user_id' => '4',
                'name' => 'Dracaufeu',
                'slug' => 'Dracaufeu',
                'body' => 'Pokemon dragon qui crache du feu! Il est dangereux.',
                'published' => '1',
                'created' => '2019-09-05',
                'modified' => '2019-09-16',
            ],
            [
                'id' => '4',
                'user_id' => '4',
                'name' => 'Carapuce',
                'slug' => 'Carapuce',
                'body' => 'Pokemon tortue qui lance de l\'eau de sa bouche',
                'published' => '1',
                'created' => '2019-09-06',
                'modified' => '2019-09-06',
            ],
            [
                'id' => '7',
                'user_id' => '4',
                'name' => 'gyrados',
                'slug' => 'gyrados',
                'body' => 'Pokemon eau qui est une sorte de léviathan',
                'published' => '1',
                'created' => '2019-09-09',
                'modified' => '2019-09-09',
            ],
            [
                'id' => '10',
                'user_id' => '5',
                'name' => 'Mystherbe',
                'slug' => 'mystherbe',
                'body' => 'Pokemon plante très spécial que l\'on retrouve souvent dans les hautes herbes.',
                'published' => '1',
                'created' => '2019-09-16',
                'modified' => '2019-09-16',
            ],
            [
                'id' => '12',
                'user_id' => '4',
                'name' => 'Poussifeu',
                'slug' => 'Poussifeu',
                'body' => 'Ceci est un pokemon',
                'published' => '1',
                'created' => '2019-09-16',
                'modified' => '2019-09-16',
            ],
            [
                'id' => '13',
                'user_id' => '5',
                'name' => 'Lucario',
                'slug' => 'Lucario',
                'body' => 'Pokémon très puissant ayant de mystérieux liens avec une pierre',
                'published' => '1',
                'created' => '2019-09-16',
                'modified' => '2019-09-16',
            ],
        ];

        $table = $this->table('pokemon');
        $table->insert($data)->save();
    }
}
