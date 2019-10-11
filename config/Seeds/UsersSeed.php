<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'email' => 'davidlavigueur@live.ca',
                'password' => 'Diablo13',
                'created' => '2019-09-05',
                'modified' => '2019-09-05',
                'uuid' => '',
                'actif' => '1',
            ],
            [
                'id' => '3',
                'email' => 'philHetu@live.ca',
                'password' => '$2y$10$WrER8Vs809eeY3CdQlO4ve7FDfxdHsKEjAELbbAiuFMxAKRdjIU.e',
                'created' => '2019-09-05',
                'modified' => '2019-09-05',
                'uuid' => '',
                'actif' => '1',
            ],
            [
                'id' => '4',
                'email' => 'joel@live.ca',
                'password' => '$2y$10$qqp9qX3G.F3NA5hnR5masuvBcubzFs91ExnYmIiR8oF7MEcfL.5AC',
                'created' => '2019-09-05',
                'modified' => '2019-09-05',
                'uuid' => '',
                'actif' => '1',
            ],
            [
                'id' => '5',
                'email' => 'valiquette@live.ca',
                'password' => '$2y$10$gcLvqtA0CHgtkkdXJF8W8ODgwODfz8k9lJ8MMSVSlJnnjFidTppyq',
                'created' => '2019-09-13',
                'modified' => '2019-09-13',
                'uuid' => '',
                'actif' => '1',
            ],
            [
                'id' => '6',
                'email' => 'admin@hotmail.com',
                'password' => '$2y$10$FQD8DmTXGxOVWrmGJF1DxOTZso9emc.1u3EcdXLNGKryBCtaxSoW2',
                'created' => '2019-09-16',
                'modified' => '2019-09-16',
                'uuid' => '',
                'actif' => '1',
            ],
            [
                'id' => '9',
                'email' => 'pascal@hotmail.com',
                'password' => '$2y$10$0YM9432GqSbuBvozQ/RAX.K0EYjAxkcZJ//5xYEt.B8AUWTtKhcyW',
                'created' => '2019-09-23',
                'modified' => '2019-09-23',
                'uuid' => '',
                'actif' => '1',
            ],
            [
                'id' => '13',
                'email' => 'rookyleek@gmail.com',
                'password' => '$2y$10$SvCzTK0cbmkAbHxD6iYz2u5pnmmTnpKSNktsDjYeGCzwiExR/jLAW',
                'created' => '2019-10-07',
                'modified' => '2019-10-07',
                'uuid' => '',
                'actif' => '1',
            ],
            [
                'id' => '27',
                'email' => '1737805@cmontmorency.qc.ca',
                'password' => '$2y$10$lATCGIAbjohoVPqZQO.7iOCrjxH/1ySB6H3Lq6ex74g5AVcLbN5Hu',
                'created' => '2019-10-07',
                'modified' => '2019-10-07',
                'uuid' => '174d0779-b884-4aff-9b1c-939d56dd6f1b',
                'actif' => '1',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
