<?php

namespace app\modules\manage\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;


use app\models\LoginForm;
use app\models\ContactForm;

/*
 * 超级管理员的管理功能 规划为：
 * 登陆模块
 * */
class LoginController extends Controller
{
    //public $layout = 'manage.php';
    public $layout = false;

    /*
     * 登陆界面
     * url ： /manage/login
     * */
    public function actionIndex()
    {
        if (!Yii::$app->User->isGuest) {
            return Yii::$app->getResponse()->redirect('/manage/');
        }


       $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }

    public function actionTest()
    {
        echo 'test : route is good';
    }
    public function init()
    {
        Yii::$app->setHomeUrl('/manage');
    }
}
