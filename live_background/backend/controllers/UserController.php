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
		$userList = Yii::$app->db->createCommand("select * from user")->queryAll();
		return $this->render('plain',['userList' => $userList]);
	}
	/*
		主播待审核列表
	 */
	public function actionWait()
	{
		$userList = Yii::$app->db->createCommand("select * from user where anchor = 1")->queryAll();
		return $this->render('wait',['userList' => $userList]);
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