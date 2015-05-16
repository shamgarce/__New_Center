<?php

namespace app\modules\super\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = false;
    public function actionIndex()
    {
        echo '123';
        return $this->render('index');
    }

}
