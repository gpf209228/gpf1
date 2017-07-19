<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class NavController extends Controller
{
	public $enableCsrfValidation = false;
	/*
		导航添加
	 */
	public function actionAdd()
	{
		if($data = Yii::$app->request->post()){
			$res = Yii::$app->db->createCommand()->Insert('nav',$data)->execute();
			if($res){
				echo "<script>alert('添加成功');location.href='?r=nav/list'</script>";
			}else{
				echo "<script>alert('添加失败');location.href='?r=nav/add'</script>";
			}
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
			$res = Yii::$app->db->createCommand()->select('nav')->queryAll();
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