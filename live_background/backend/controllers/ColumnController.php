<?php
namespace backend\controllers;

use Yii;
use yii\grid\Column;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class ColumnController extends Controller
{
    public $enableCsrfValidation = false;
	/*
		导航添加
	 */
	public function actionAdd()
	{
        $db=yii::$app->db;
		if($data = Yii::$app->request->post()){
//            print_r($_FILES);
//            print_r($_POST);die;

            ////
            if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 200000))
            {
                if ($_FILES["file"]["error"] ==0)
                {
                    if (file_exists("upload/" . $_FILES["file"]["name"]))
                    {
                        $_POST['']="upload/" . $_FILES["file"]["name"];
                    }
                    else
                    {
                        $uploadfile = "upload/".$_FILES['file']['name']; //图片存放的路径
                        $_POST['class_path']=$uploadfile;
                        $_POST['class_img']=$_FILES['file']['name'];
                        if(is_uploaded_file($_FILES['file']['tmp_name'])){
                            move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile);
                        }
                    }
                }
            }
           if(!empty($_POST['class_name'])){
               $sql=$db->createCommand("select * from class where class_name='$_POST[class_name]'")->execute();
                if(!$sql){
                   $sql= $db->createCommand("insert into class (`class_name`,`class_img`,`class_path`,`class_p_id`) values ('$_POST[class_name]','$_POST[class_img]','$_POST[class_path]','$_POST[class_p_id]')")->execute();
                    if(!$sql){
                        echo "添加失败";
                    }
                }
           }
            $this->redirect('?r=column/list');
		}else{

            $sql="select * from class where class_p_id='0'";
            $sql=$db->createCommand($sql)->queryAll();



			return $this->render('add',array('class'=>$sql));
		}
	}

	/*
		导航列表
	 */
	public function actionList()
	{
        if($data = Yii::$app->request->post()){

        }else{
            $db=yii::$app->db;
            $sql="select * from class";
            $sql=$db->createCommand($sql)->queryAll();
            $sql=$this->subtree($sql);
//            print_r($sql);die;
            return $this->render('list',array('class'=>$sql));
        }
	}
    function subtree($arr,$id=0,$lev=1){    /////这是所有的导航菜单的递归方法
            $subs = array(); // 子孙数组
            foreach($arr as $v) {
                if($v['class_p_id'] == $id) {
                    $v['lev'] = $lev;
                    $subs[] = $v;
                    $subs = array_merge($subs,$this->subtree($arr,$v['class_id'],$lev+1));
                }
            }
            return $subs;
        }
	/*
		导航修改
	 */
	public function actionSave()
	{
        if($data = Yii::$app->request->post()){
//            print_r($_FILES);die;

//        print_r($_POST);die;
            if(isset($_POST['class_id'])){
                $db=yii::$app->db;
                    $sql="update class set class_name='$_POST[class_name]',class_p_id='$_POST[class_p_id]' where class_id='$_POST[class_id]'";
                    $db->createCommand($sql)->execute();
                if(!$_FILES['file']['name']==""){
                    if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 200000))
                    {
                        if ($_FILES["file"]["error"] ==0)
                        {
                            if (file_exists("upload/" . $_FILES["file"]["name"]))
                            {
                                $_POST['']="upload/" . $_FILES["file"]["name"];
                            }
                            else
                            {
                                $uploadfile = "upload/".$_FILES['file']['name']; //图片存放的路径
                                $_POST['class_path']=$uploadfile;
                                $_POST['class_img']=$_FILES['file']['name'];
                                if(is_uploaded_file($_FILES['file']['tmp_name'])){
                                    move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile);
                                }
                            }
                            $sqls="update class set class_img='$_POST[class_img]',class_path='$_POST[class_path]' where class_id='$_POST[class_id]'";
                            $db->createCommand($sqls)->execute();
                        }
                    }
                }

            }
//            $this->redirect("?r=column/save&gift=$_POST[class_id]");
            $this->redirect('?r=column/list');
        }else{
            $db=yii::$app->db;
            $sqls="select * from class where class_p_id=0";
            $sqls=$db->createCommand($sqls)->queryAll();
            $sql="select * from class where class_id='$_GET[class_id]'";
            $sql=$db->createCommand($sql)->queryOne();
//            print_r($sql);die;
            return $this->render('save',array('class'=>$sqls,"class_a"=>$sql));
        }
	}

	/*
		导航删除
	 */
	public function actionDel()
	{
        $db=yii::$app->db;
        $sql="delete from class where class_id='$_GET[class_id]'";
        $sql=$db->createCommand($sql)->execute();
        $this->redirect('?r=column/list');
	}

}