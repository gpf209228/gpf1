<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class GiftController extends Controller
{
    public $enableCsrfValidation = false;
    /*
        导航添加
     */
    public function actionAdd()
    {
        if($data = Yii::$app->request->post()){
            if(isset($_POST['gift_money']) and isset($_POST['gift_name'])){
                $db=yii::$app->db;
                $sql="select gift_id from gift where gift_name='$_POST[gift_name]'";
                $sql=$db->createCommand($sql)->queryOne();
                if(!$sql){
                    $sqls="insert into gift (gift_name,gift_money) values ('$_POST[gift_name]','$_POST[gift_money]')";
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
        导航列表
     */
    public function actionList()
    {
        if($data = Yii::$app->request->post()){

        }else{
            $db=yii::$app->db;
            $sql="select * from gift";
            $sql=$db->createCommand($sql)->queryAll();
            return $this->render('list',array('gift'=>$sql));
        }
    }

    /*
        导航修改
     */
    public function actionSave()
    {
        if($data = Yii::$app->request->post()){
//        print_r($_POST);
            if(isset($_POST['gift_id'])){
                $db=yii::$app->db;
                if(empty($_POST['gift_name']) or empty($_POST['gift_money'])){

                }else{
                    $sql="update gift set gift_name='$_POST[gift_name]',gift_money='$_POST[gift_money]' where gift_id='$_POST[gift_id]'";
                    $db->createCommand($sql)->execute();
                }
            }

            $this->redirect("?r=gift/save&gift=$_POST[gift_id]");
        }else{

            $db=yii::$app->db;
            $sql="select * from gift where gift_id='$_GET[gift]'";
            $sql=$db->createCommand($sql)->queryOne();
            return $this->render('save',array('gift'=>$sql));
        }
    }

    /*
        导航删除
     */
    public function actionDel()
    {
        $db=yii::$app->db;
        $sql="delete from gift where gift_id='$_GET[gift]'";
        $sql=$db->createCommand($sql)->execute();
        $this->redirect('?r=gift/list');
    }

}