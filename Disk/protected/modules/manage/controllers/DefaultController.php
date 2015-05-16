<?php

namespace app\modules\manage\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class DefaultController extends Controller
{
    public $layout = 'manage.php';
    //public $layout = false;


    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionLogout()
    {
        Yii::$app->User->logout();
        return $this->goHome();

    }

    public function init()
    {

        Yii::$app->setHomeUrl('/manage');
    }

}
