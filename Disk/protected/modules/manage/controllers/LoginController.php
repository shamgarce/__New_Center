<?php

namespace app\modules\manage\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

/*
 * 超级管理员的管理功能 规划为：
 * 登陆模块
 * */
class LoginController extends Controller
{
    //public $layout = 'manage.php';
    public $layout = false;

    public function actionLogin()
    {
        echo 2;
//        if (!Yii::$app->User->isGuest) {
//           return $this->goHome();
//        }
//
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        } else {
//            echo 34;
//            return $this->render('login', [
//                'model' => $model,
//            ]);
//        }
//
//
//        return $this->render('login');
    }

    /*
     * 登陆界面
     * url ： /manage/login
     * */
    public function actionIndex()
    {
        if (!Yii::$app->User->isGuest) {
            return Yii::$app->getResponse()->redirect('/manage/');
        }


       //$model = new yii\Models\LoginForm();
        var_dump($model);
        echo 123123123;
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            echo 341;
////            return $this->goBack();
//        } else {
//            echo 34;
////            return $this->render('index', [
////                'model' => $model,
////            ]);
//        }




        //return $this->render('index');
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
