<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class GiftController extends SumController
{
    public $enableCsrfValidation = false;
    /*
        礼物添加
     */
    public function actionAdd()
    {
        if($data = Yii::$app->request->post()){

            if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 200000))
            {
                if ($_FILES["file"]["error"] ==0)
                {
                    if (file_exists("upload/" . $_FILES["file"]["name"]))
                    {
                        $_POST['gift_path']="upload/" . $_FILES["file"]["name"];
                        $_POST['gift_img']=$_FILES['file']['name'];
                    }
                    else
                    {
                        $uploadfile = "upload/".$_FILES['file']['name']; //图片存放的路径
                        $_POST['gift_path']=$uploadfile;
                        $_POST['gift_img']=$_FILES['file']['name'];
                        if(is_uploaded_file($_FILES['file']['tmp_name'])){
                            move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile);
                        }
                    }
                }
            }
//            die;
            if(isset($_POST['gift_money']) and isset($_POST['gift_name'])){
                $db=yii::$app->db;
                $sql="select gift_id from gift where gift_name='$_POST[gift_name]'";
                $sql=$db->createCommand($sql)->queryOne();
                if(!$sql){
                    $sqls="insert into gift (gift_name,gift_money,gift_img,gift_path) values ('$_POST[gift_name]','$_POST[gift_money]','$_POST[gift_img]','$_POST[gift_path]')";
                    $sqls=$db->createCommand($sqls)->execute();
                    if($sqls){
                        $this->redirect('?r=gift/list');
                    }
                }
            }
            return $this->render('add');
        }else{
            return $this->render('add');
        }
    }


    /*
        礼物列表
     */
    public function actionList()
    {
        if($data = Yii::$app->request->post()){

        }else{
            $db=yii::$app->db;
            $sql="select * from gift order by gift_money desc";
            $sql=$db->createCommand($sql)->queryAll();
            return $this->render('list',array('gift'=>$sql));
        }
    }

    /*
        礼物修改
     */
    public function actionSave()
    {
        if($data = Yii::$app->request->post()){
//        print_r($_FILES);die;
            if(isset($_POST['gift_id'])){
                $db=yii::$app->db;
                {
                    $sql="update gift set gift_name='$_POST[gift_name]',gift_money='$_POST[gift_money]' where gift_id='$_POST[gift_id]'";
                    $db->createCommand($sql)->execute();
                    ///判断是否有新的文件上传 从而替换
                    if(!$_FILES['file']['name']==""){
                        if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 200000))
                        {
                            if ($_FILES["file"]["error"] ==0)
                            {
                                if (file_exists("upload/" . $_FILES["file"]["name"]))
                                {
                                    $_POST['gift_path']="upload/" . $_FILES["file"]["name"];
                                    $_POST['gift_img']=$_FILES['file']['name'];
                                }
                                else
                                {
                                    $uploadfile = "upload/".$_FILES['file']['name']; //图片存放的路径
                                    $_POST['gift_path']=$uploadfile;
                                    $_POST['gift_img']=$_FILES['file']['name'];
                                    if(is_uploaded_file($_FILES['file']['tmp_name'])){
                                        move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile);
                                    }
                                }
                                $sqls="update gift set gift_img='$_POST[gift_img]',gift_path='$_POST[gift_path]' where gift_id='$_POST[gift_id]'";
                                $db->createCommand($sqls)->execute();
                            }
                        }
                    }
                }
            }

            $this->redirect("?r=gift/list&gift=$_POST[gift_id]");
        }else{

            $db=yii::$app->db;
            $sql="select * from gift where gift_id='$_GET[gift]'";
            $sql=$db->createCommand($sql)->queryOne();
            return $this->render('save',array('gift'=>$sql));
        }
    }

    /*
        礼物删除
     */
    public function actionDel()
    {
        $db=yii::$app->db;
        $sql="delete from gift where gift_id='$_GET[gift]'";
        $sql=$db->createCommand($sql)->execute();
        $this->redirect('?r=gift/list');
    }

}