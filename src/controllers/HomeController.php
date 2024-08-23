<?php
namespace src\controllers;

use \core\Controller;
use \src\models\User;

class HomeController extends Controller {

    public function index() {
        $data = User::select()->execute();

        $this->render('home', [
            'users' => $data
        ]);
    }

}