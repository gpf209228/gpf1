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
	 *	导航列表
	 */
	public function actionList()
	{
		$sql = "select nav_id,nav_name,nav_link from nav";
		$navList = Yii::$app->db->createCommand($sql)->queryAll();
		return $this->render('list',['navList'=>$navList]);
	}

	/*
		导航修改
	 */
	public function actionSave()
	{
		if($navId = Yii::$app->request->get('id')){
			$sql = "select nav_id,nav_name,nav_link from nav where nav_id = $navId";
			$navList = Yii::$app->db->createCommand($sql)->queryOne();
			return $this->render('save',['navList' => $navList]);
		}else{
			return $this->render('save');
		}
	}
	/**
	 * 导航修改方法
	 */
	public function actionSave_do()
	{
		if($data = Yii::$app->request->post()){
			$nav_id = $data['nav_id'];
			$nav_name = $data['nav_name'];
			$nav_link = $data['nav_link'];
			$sql = "update nav set `nav_name`='$nav_name',`nav_link`='$nav_link' where `nav_id`='$nav_id'";
			$navList = Yii::$app->db->createCommand($sql)->execute();
			if($navList){
				echo "<script>alert('修改成功');location.href='?r=nav/list'</script>";
			}else{
				echo "<script>alert('修改失败');location.href='?r=nav/list'</script>";
			}
		}else{
			return $this->render('save');
		}
	}
	/*
		导航删除
	 */
	public function actionDel()
	{
		$navId = Yii::$app->request->get('id');
		$sql = "delete from nav where nav_id = $navId";
		$navDel = Yii::$app->db->createCommand($sql)->execute();
		if($navDel){
			echo "<script>alert('删除成功');location.href='?r=nav/list'</script>";
		}else{
			echo "<script>alert('删除失败');location.href='?r=nav/list'</script>";
		}
	}

}