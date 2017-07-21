<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class LoginController extends Controller
{
    public $enableCsrfValidation = false;
    /*
        管理员列表
     */
    function init(){
        parent::init();
        if(Yii::$app->session['admin_name'] != ""){
            echo "<script>location.href='?r=cat'</script>";
        }
    }
    public function actionIndex()
    {
        if($data = Yii::$app->request->post()){
            $name=isset($_POST['admin_name'])?$_POST['admin_name']:"";
            $pw=isset($_POST['admin_pw'])?md5($_POST['admin_pw']):"";
            $db=yii::$app->db;
            $sql="select * from admin where admin_name='$name' and admin_pw='$pw'";
            $sql=$db->createCommand($sql)->queryOne();
            if($sql){
                $time=time()+3600*8;
                $sqls="update admin set admin_login_time='$time' where admin_name='$name'";
                $db->createCommand($sqls)->execute();
                $session=yii::$app->session;
                $session->open();
                $session->set('admin_name',$sql['admin_name']);
                $session->set('admin_id',$sql['admin_id']);
//                print_r($_COOKIE);die;
                 $this->redirect('?r=cat/index');
            }else{
                echo "登录失败";
            }
        }else{

            return $this->renderPartial('login');
        }
    }

    /*
        普通用户列表
     */
    public function actionLogin_into()
    {
        if($data = Yii::$app->request->post()){
            $db=yii::$app->db;
            $name=isset($_POST['admin_name'])?$_POST['admin_name']:"";
            $pw=isset($_POST['admin_pw'])?$_POST['admin_pw']:"";
            $phone=isset($_POST['admin_phone'])?$_POST['admin_phone']:"";
            $sql="select * from admin where admin_name='$name'";
            $sql=$db->createCommand($sql)->queryOne();
            if($sql){
                echo "此号码已被注册";
                 return $this->renderPartial('login_into');
            }
//            print_r(preg_match("/^[0-9a-zA-Z]{6,20}$/",$name));die;
            if(   preg_match("/^[0-9a-zA-Z]{6,20}$/",$pw) and preg_match("/^[0-9a-zA-Z]{6,20}$/",$name) and
                preg_match ("/^1[3|4|5|7|8][0-9]\d{4,8}$/", $phone )){
                $time=time();
                $pw=md5($pw);
                $sqls="insert into admin (`admin_name`,`admin_pw`,`admin_phone`,`admin_into_time`) values ('$name','$pw','$phone','$time')";
//                echo "$sqls";die;
                $sqls=$db->createCommand($sqls)->execute();
                if($sqls){
                    $session=yii::$app->session;
                    $session->open();
                    $session->set('admin_name',$name);
                    $session->set('admin_id',$sql['admin_id']);
                    $this->redirect('?r=cat');
                }else{
                    echo "失败";
                    return $this->renderPartial('login_into');
                }
            }else{
                echo "您输入有误，请重新输入";
                return $this->renderPartial('login_into');
            }
        }else{
            return $this->renderPartial('login_into');
        }
    }

    /*
        主播待审核列表
     */
    public function actionLogin_del()
    {
//        echo "999";
        $session=yii::$app->session;
        $session->open();
        $session->remove('admin_name');
        $session->remove('admin_id');
        if($session->get('admin_name')){
            echo "<script>alert('退出失败');location.href='?r=cat'</script>";

        }else{
            echo "<script>alert('退出成功');location.href='?r=login'</script>";
        }
//        session_destroy();

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