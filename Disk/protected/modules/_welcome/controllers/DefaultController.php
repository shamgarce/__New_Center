<?php

namespace app\modules\welcome\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function init()
    {
        echo 123123132;
        exit;
    }

    //在具体的动作执行之前会先执行beforeAction，如果返回false,则动作将不会被执行，
    //后面的afterAction也不会执行（但父模块跌afterAction会执行）
    public function beforeAction($action)
    {
        $event = new ActionEvent($action);
        $this->trigger(self::EVENT_BEFORE_ACTION, $event);
        return $event->isValid;


        echo 123;
        exit;
    }

    //当前动作执行之后，执行afterAction
    public function afterAction($action, $result)
    {
        $event = new ActionEvent($action);
        $event->result = $result;
        $this->trigger(self::EVENT_AFTER_ACTION, $event);
        return $event->result;
    }
}