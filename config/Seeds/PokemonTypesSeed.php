<?php
use Migrations\AbstractSeed;

/**
 * PokemonTypes seed.
 */
class PokemonTypesSeed extends AbstractSeed
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
                'pokemon_id' => '1',
                'type_id' => '1',
            ],
            [
                'pokemon_id' => '12',
                'type_id' => '1',
            ],
            [
                'pokemon_id' => '10',
                'type_id' => '2',
            ],
            [
                'pokemon_id' => '4',
                'type_id' => '3',
            ],
            [
                'pokemon_id' => '7',
                'type_id' => '3',
            ],
            [
                'pokemon_id' => '13',
                'type_id' => '5',
            ],
            [
                'pokemon_id' => '13',
                'type_id' => '9',
            ],
        ];

        $table = $this->table('pokemon_types');
        $table->insert($data)->save();
    }
}
