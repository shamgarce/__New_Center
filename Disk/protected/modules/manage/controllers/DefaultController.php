<?php

namespace app\modules\manage\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

/*
 * 超级管理员的管理功能 规划为：
 * 用户管理
 * 某些系统设置
 *
 *
 *
 * */
class DefaultController extends Controller
{
    //public $layout = 'manage.php';
    public $layout = false;

    public function actionLogin()
    {
        echo 123;
//        if (!Yii::$app->User->isGuest) {
//           return $this->goHome();
//        }



//
//        return $this->render('login');
    }

    public function actionIndex()
    {
        echo 5678;
//        if (Yii::$app->User->isGuest) {
//            return Yii::$app->getResponse()->redirect('/manage/default/login');
//        }
       // return $this->render('index');
    }


    public function actionLogout()
    {
        Yii::$app->User->logout();
        return $this->goHome();
    }

    public function actionTest()
    {
        echo 'test : route is good';
    }
    public function init()
    {
        Yii::$app->setHomeUrl('/manage');
        //登陆监测
//        if (!Yii::$app->User->isGuest) {
//            return $this->goHome();
//        }
    }

}
