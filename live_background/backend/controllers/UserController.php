<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class UserController extends SumController
{
    public $enableCsrfValidation = false;

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
        $name=isset($_POST['user_name'])?$_POST['user_name']:"";
		$userList = Yii::$app->db->createCommand("select * from user where user_name like '%$name%'")->queryAll();
//        print_r($userList);die;
		return $this->render('plain',['userList' => $userList,'user'=>$name]);
	}
    function actionShenpi(){

        $id=$_GET['id'];
        $anchor=$_GET['anchor'];
        $db=yii::$app->db;
        $sql=yii::$app->db->createCommand("update user set anchor='$anchor' where user_id='$id'")->execute();
        if($sql){
            echo 1;
        }else{
            echo 0;
        }
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