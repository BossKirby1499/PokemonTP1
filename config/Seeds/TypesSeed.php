<?php
use Migrations\AbstractSeed;

/**
 * Types seed.
 */
class TypesSeed extends AbstractSeed
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
                'name' => 'Fire',
                'created' => '2019-09-06',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '2',
                'name' => 'Plant',
                'created' => '2019-09-06',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '3',
                'name' => 'Water',
                'created' => '2019-09-06',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '4',
                'name' => 'Electric',
                'created' => '2019-09-13',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '5',
                'name' => 'Psychic',
                'created' => '2019-09-16',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '7',
                'name' => 'Rock',
                'created' => '2019-09-16',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '8',
                'name' => 'Fly',
                'created' => '2019-09-16',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '9',
                'name' => 'Fight',
                'created' => '2019-09-16',
                'modified' => '2019-10-04',
            ],
            [
                'id' => '10',
                'name' => 'Iron',
                'created' => '2019-09-16',
                'modified' => '2019-10-04',
            ],
        ];

        $table = $this->table('types');
        $table->insert($data)->save();
    }
}
