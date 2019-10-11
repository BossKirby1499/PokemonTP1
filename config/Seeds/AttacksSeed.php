<?php
use Migrations\AbstractSeed;

/**
 * Attacks seed.
 */
class AttacksSeed extends AbstractSeed
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
                'title' => 'Quick attack',
                'description' => 'Fast attack that allows the pitcher to hit his opponent. 100% chance of success',
                'pokemon_id' => '1',
                'created' => '2019-09-13',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '2',
                'title' => 'Flamethrower',
                'description' => 'powerfull attack of fire',
                'pokemon_id' => '1',
                'created' => '2019-09-13',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '3',
                'title' => 'waterfalls',
                'description' => 'Attack that allows the user to repel the opponent. Also allows to go up cascades',
                'pokemon_id' => '7',
                'created' => '2019-09-13',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '4',
                'title' => 'Hydro Pump',
                'description' => 'Extremely powerful attack that launches a jet of water capable of destroying everything in its way',
                'pokemon_id' => '4',
                'created' => '2019-09-16',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '5',
                'title' => 'Sleep Powder',
                'description' => 'The thrower creates a powder that he throws at his opponent. This powder makes it possible to lull the person who ingests it.',
                'pokemon_id' => '10',
                'created' => '2019-09-16',
                'modified' => '2019-10-04',
            ],
        ];

        $table = $this->table('attacks');
        $table->insert($data)->save();
    }
}
