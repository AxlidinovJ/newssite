<?php
namespace app\controllers;
use yii;
use yii\web\Controller;
use app\modules\admin\models\News;
use yoo\filters\AccessControl;

class NewsController extends Controller{
	public $layout = "news";
	public function actionIndex(){
		return $this->render("index");
	}


 public function actionNews(){
    	$model = News::find()->orderBy('time DESC')->all();
     	return $this->render('news',['news'=>$model]);
  }


	 public function actionBolim($id){
    	$model = News::find()->where(["bolim_id"=>$id])->all();
        return $this->render('bolim',['news'=>$model]);
    }

    public function actionView($id){
    	$model = News::findOne($id);
        return $this->render('view',['news'=>$model]);
    }

     public function actionSearch($search){
        $model = News::find()->orderBy('time DESC')->where(['like','content',$search])->all();
        return $this->render('search',['searchs'=>$model]);
    }

}

?>