<?php

namespace app\modules\smanage\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        // 设置自己的信息
        return $this->render('index');
    }
}
