<?php
namespace backend\controllers;


use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class CatController extends SumController
{

	/*
		首页
	 */
	public function actionIndex()
	{

//        $session=yii::$app->session;
//        $session->open();
//        $session->remove('admin_name');
//        $session->remove('admin_id');
//        if($session->get('admin_name')){
//            echo "0";
//        }else{
//            echo "1";
//        }
//        print_r($session->get('admin_name'));
//
//        die;

//        $session=yii::$app->session;
//        $session->open();
		return $this->render('index');	
	}

}