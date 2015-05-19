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
 *
 * 登陆        ：/manage/login/login
 * 退出登陆    ：/manage/login/logout
 *
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
//            if(Yii::$app->user->identity->username != 'admin')
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

    public function actionLogout()
    {
        Yii::$app->User->logout();
        return $this->goHome();
    }











    //====================================================
    //====================================================
    //====================================================
    public function actionTest()
    {
        //登陆之后的
        //echo Yii::$app->user->identity->username;
        //var_dump(Yii::$app->User->isSuperadmin());

        var_dump(Yii::$app->User->identity);
        var_dump(Yii::$app->User->it());
        echo 'test : route is good';
    }
    public function init()
    {
        Yii::$app->setHomeUrl('/manage');
    }
}
