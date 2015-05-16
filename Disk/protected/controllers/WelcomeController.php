<?php

namespace app\controllers;

class WelcomeController extends \yii\web\Controller
{
    //public $layout = 'welcome.php';
    public $layout = false;

    public function actionIndex()
    {
        //echo 'welcome\index ';
        return $this->render('index');
    }


//    public function actions()
//    {
//        return [
//            // 用类来申明"error" 操作
//            'error' => 'yii\web\ErrorAction',
//            // 用配置数组申明 "view" 操作
//            'view' => [
//                'class' => 'yii\web\ViewAction',
//                'viewPrefix' => '',
//            ],
//        ];
//    }

//====================================================================

//    //创建时执行
//    public function init()
//    {
//    }
//
//    //在具体的动作执行之前会先执行beforeAction，如果返回false,则动作将不会被执行，
//    //后面的afterAction也不会执行（但父模块跌afterAction会执行）
//    public function beforeAction($action)
//    {
//    }

//    //当前动作执行之后，执行afterAction
//    public function afterAction($action, $result)
//    {
//    }





}
