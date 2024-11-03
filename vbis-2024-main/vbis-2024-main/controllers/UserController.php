<?php
namespace app\controllers;

use app\core\BaseController;
use app\models\UserModel;

class UserController extends BaseController
{
    /*    public function userCreate()
    {
        return "User Created";
    }

    public function readUser()
    {
        $view = new View();
        return $view->render("getUser", "main");
    }
    */

    public function readUser(){
        $model = new UserModel();
        $model->email = "natalijajolovic@gmail.com";
        $model->firstName = "natalija";
        $model->lastName = "jolovic";

        $this->view->render('getUser', 'main', $model);
    }


}