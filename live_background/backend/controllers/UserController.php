<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class UserController extends Controller
{

	/*
		管理员列表
	 */
	public function actionAdmin()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('admin');
		}
	}

	/*
		普通用户列表
	 */
	public function actionPlain()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('plain');
		}
	}

	/*
		主播待审核列表
	 */
	public function actionWait()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('wait');
		}
	}

	/*
		主播已审核列表
	 */
	public function actionStart()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('start');
		}
	}

}