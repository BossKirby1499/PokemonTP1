<?php

namespace App\Controller\Api;

use App\Controller\Api\AppController;

class ItemsController extends AppController {
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['add','index','view','edit','delete']);
    }

    public $paginate = [
        'page' => 1,
        'limit' => 100,
        'maxLimit' => 150,
/*        'fields' => [
            'id', 'name', 'description'
        ],
*/        'sortWhitelist' => [
            'id', 'name', 'description'
        ]
    ];

}
