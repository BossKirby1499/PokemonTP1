<?php
use Migrations\AbstractSeed;

/**
 * PokemonFiles seed.
 */
class PokemonFilesSeed extends AbstractSeed
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
                'pokemon_id' => '1',
                'file_id' => '1',
            ],
            [
                'id' => '2',
                'pokemon_id' => '4',
                'file_id' => '2',
            ],
            [
                'id' => '3',
                'pokemon_id' => '12',
                'file_id' => '3',
            ],
            [
                'id' => '4',
                'pokemon_id' => '13',
                'file_id' => '4',
            ],
        ];

        $table = $this->table('pokemon_files');
        $table->insert($data)->save();
    }
}
