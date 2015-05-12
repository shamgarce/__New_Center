<?php

class WelcomeController extends Controller
{
	public $defaultAction = 'Index';
	/**
	 * Declares class-based actions.
	 */
	public function actionIndex()
	{

		echo 'Welcome::index';
	}
	public function actionerror()
	{

		$this->render('error', $error);
	}

}
