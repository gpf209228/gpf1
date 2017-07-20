<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Article;
use yii\data\Pagination;

class ArticleController extends Controller
{

	public $enableCsrfValidation = false;

	public function actionList()
	{
		$articleList = Yii::$app->db->createCommand("select article_id,article_title,article_name,article_sort,article_time from article")->queryAll();
		return $this->render('list',['articleList' => $articleList]);
	}

	public function actionAdd(){
		if($data = Yii::$app->request->post()){
			$data['article_time'] = time();
			$articleAdd = Yii::$app->db->createCommand()->Insert('article',$data)->execute();
			if($articleAdd){
				echo "<script>alert('添加成功');location.href='?r=article/list'</script>";
			}else{
				echo "<script>alert('添加失败');location.href='?r=article/add'</script>";
			}
		}else{
			return $this->render('add');
		}
	}

	public function actionDel() {
		$articleId = Yii::$app->request->get('id');
		$articleList = Yii::$app->db->createCommand()->delete('article',"article_id = $articleId")->execute();
		if($articleList){
			echo "<script>alert('删除成功');location.href='?r=article/list'</script>";
		}else{
			echo "<script>alert('删除失败');location.href='?r=article/list'</script>";
		}
	}

	public function actionSave() {
		if($artId = Yii::$app->request->get('id')){
			$artList = Yii::$app->db->createCommand('select * from article where article_id = :id')
									->bindValue(':id', $artId)
									->queryOne();
			return $this->render('save',['artList' => $artList]);
		}
	}

	public function actionSave_do() {
		$artId = Yii::$app->request->post('article_id');
		$data = Yii::$app->request->post();
		$navUpd = Yii::$app->db->createCommand()->update('article', $data, "article_id = $artId")->execute();
		if($navUpd){
			echo "<script>alert('修改成功');location.href='?r=article/list'</script>";
		}else{
			echo "<script>alert('修改失败');location.href='?r=article/list'</script>";
		}
	}

}