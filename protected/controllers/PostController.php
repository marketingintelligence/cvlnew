<?php
/**
 * Created by PhpStorm.
 * User: Damir
 * Date: 05.01.2018
 * Time: 13:44
 */

namespace app\controllers;
use Yii;
use app\models\TestForm;

class PostController extends AppController{

    public function actionIndex(){

        $model = new TestForm();

        return $this->render('test', compact('model'));
    }

}