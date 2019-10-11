<?php
use Migrations\AbstractSeed;

/**
 * Files seed.
 */
class FilesSeed extends AbstractSeed
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
                'name' => 'Charizard.png',
                'path' => 'Files/',
                'created' => '2019-09-16 13:57:25',
                'modified' => '2019-09-16 14:23:11',
                'status' => '1',
            ],
            [
                'id' => '2',
                'name' => 'carapuce.png',
                'path' => 'Files/',
                'created' => '2019-09-16 14:25:13',
                'modified' => '2019-09-16 14:25:13',
                'status' => '1',
            ],
            [
                'id' => '3',
                'name' => 'poussifeu.png',
                'path' => 'Files/',
                'created' => '2019-09-16 15:24:24',
                'modified' => '2019-09-16 15:24:24',
                'status' => '1',
            ],
            [
                'id' => '4',
                'name' => 'Lucario.png',
                'path' => 'Files/',
                'created' => '2019-09-16 19:18:28',
                'modified' => '2019-09-16 19:18:28',
                'status' => '1',
            ],
        ];

        $table = $this->table('files');
        $table->insert($data)->save();
    }
}
