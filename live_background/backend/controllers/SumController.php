<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class SumController extends Controller
{

    /*
        首页
     */

//    public function beforeAction($action)
//    {
//
//        $session=yii::$app->session;
//        $session->open();
//        $user_session = $session->get('admin_name');
//
////判断是否有登录session
//
//        if (!isset($user_session)) {
//
//            echo "<script>alert('请先登录');location.href='?r=login'</script>";
//            die;
//
//        }
//        if (!parent::beforeAction($action)) {
//            return false;
//        }
//    }



    function init(){
        parent::init();
        if(Yii::$app->session['admin_name'] == ""){
            echo "<script>alert('请先登录');location.href='?r=login'</script>";
        }
    }

//        $session=yii::$app->session;
//        $session->open();
////        $session->remove('admin_name');
////        $session->remove('admin_id');
//        $name=$session->get('admin_name');
////        echo $name;die;
////        print_r($session->get('admin_name'));die;
//        if(!$name){
//            echo "<script>alert('请先登录');location.href='?r=login'</script>";die;
////            return false;
//        }
//        die;
////        else{
//////            echo 1;
////
////            echo "<script>alert('llll');location.href='?r=cat/index'</script>";die;
//////            return true;
////        }
//        if (!parent::beforeAction($action)) {
////            return false;
//        }
//
//    }

}