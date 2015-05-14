<?php

class FormController extends Controller
{


    public function actionIndex()
	{
        echo 'test.from.index';
		$this->render('index');


exit;

    }

    public function actionSay($message = 'Hello')
    {

      echo   Yii::getVersion();
      // return $this->render('say', ['message' => $message]);
    }

}