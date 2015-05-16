<?php

namespace app\controllers;

use app\models\Mcuser;

class WelcomeController extends \yii\web\Controller
{
    //public $layout = 'welcome.php';
    public $layout = false;

    public function actionIndex()
    {
        //echo 'welcome\index ';
        return $this->render('index');
    }











    /*
     * 数据对象的增加删除 修改 查询
     * */
    public function actionTest()
    {
        //ceshi/Mcuser::getDb()
//        $customers = Mcuser::find()
//            ->where(['id' => 1])
//            ->orderBy('id')
//            ->all();;

        $customers = Mcuser::find()
            ->asArray()
            ->all();

//// 插入新客户的记录
//        $customer = new Customer();
//        $customer->name = 'James';
//        $customer->email = 'james@example.com';
//        $customer->save();  // 等同于 $customer->insert();
//
//// 更新现有客户记录
//        $customer = Customer::findOne($id);
//        $customer->email = 'james@example.com';
//        $customer->save();  // 等同于 $customer->update();
//
//// 删除已有客户记录
//        $customer = Customer::findOne($id);
//        $customer->delete();
//
//// 删除多个年龄大于20，性别为男（Male）的客户记录
//        Customer::deleteAll('age > :age AND gender = :gender', [':age' => 20, ':gender' => 'M']);
//
//// 所有客户的age（年龄）字段加1：
//        Customer::updateAllCounters(['age' => 1]);




        var_dump($customers);
        echo test;
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
