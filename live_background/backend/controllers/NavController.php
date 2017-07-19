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
			$navAdd = Yii::$app->db->createCommand()->Insert('nav',$data)->execute();
			if($navAdd){
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
		$navList = Yii::$app->db->createCommand("select * from nav")->queryAll();
		return $this->render('list',['navList' => $navList]);
	}

	/*
		导航修改
	 */
	public function actionSave()
	{
		if($navId = Yii::$app->request->get('id')){
			$navList = Yii::$app->db->createCommand('select * from nav where nav_id = :id')
									->bindValue(':id', $navId)
									->queryOne();
			return $this->render('save',['navList' => $navList]);
		}else{
			return $this->render('save');
		}
	}

	/**
	 * 导航修改方法
	 */

	public function actionSave_do(){
		$navId = Yii::$app->request->post('nav_id');
		$data = Yii::$app->request->post();
		$navUpd = Yii::$app->db->createCommand()->update('nav', $data, "nav_id = $navId")->execute();
		if($navUpd){
			echo "<script>alert('修改成功');location.href='?r=nav/list'</script>";
		}else{
			echo "<script>alert('修改失败');location.href='?r=nav/list'</script>";
		}
	}

	/*
		导航删除
	 */
	public function actionDel()
	{
		$navId = Yii::$app->request->get('id');
		$navList = Yii::$app->db->createCommand()->delete('nav',"nav_id = $navId")->execute();
		if($navList){
			echo "<script>alert('删除成功');location.href='?r=nav/list'</script>";
		}else{
			echo "<script>alert('删除失败');location.href='?r=nav/list'</script>";
		}
	}

}