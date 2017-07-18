<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class GiftController extends Controller
{

	/*
		导航添加
	 */
	public function actionAdd()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('add');
		}
	}

	/*
		导航列表
	 */
	public function actionList()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('list');
		}
	}

	/*
		导航修改
	 */
	public function actionSave()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('save');
		}
	}

	/*
		导航删除
	 */
	public function actionDel()
	{

	}

}