<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class ArticleController extends Controller
{

	public $enableCsrfValidation = false;

	public function actionList()
	{
		$this->render('list');
	}

	public function actionAdd(){
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('add');
		}
	}

	public function actionDel() {
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('add');
		}
	}

	public function actionSave() {
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('add');
		}
	}

	public function actionSave_do() {
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('add');
		}
	}

}