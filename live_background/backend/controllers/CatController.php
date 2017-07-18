<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class CatController extends Controller
{

	/*
		首页
	 */
	public function actionIndex()
	{
		return $this->render('index');	
	}

}