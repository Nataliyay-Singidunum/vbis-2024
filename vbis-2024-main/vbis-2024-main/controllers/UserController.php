<?php
namespace app\controllers;

use app\core\BaseController;
use app\core\DbConnection;
use app\models\UserModel;
use app\models\ProductModel;


class UserController extends BaseController
{
    public function readUser(){

        $model = new UserModel();
        $result = $model->get();
        $model->mapData($result);
        echo "<pre>";
        var_dump($model);
        exit;

        $this->view->render('getUser', 'main', $model);
    }


}