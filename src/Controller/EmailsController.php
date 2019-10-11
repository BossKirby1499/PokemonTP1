<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Mailer\Email;

class EmailsController extends AppController{
    public function index(){


        $email = new Email('default');
        $email->to('davidlavigueur@live.ca')->subject('About')->send('My message');
    }
}
?>
