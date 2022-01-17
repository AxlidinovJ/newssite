<?php
namespace app\controllers;
use yii;
use yii\web\Controller;
use app\modules\admin\models\News;
use yii\filters\AccessControl;
use yii\data\Pagination;
class NewsController extends Controller{
	public $layout = "news";
	public function actionIndex(){
		return $this->render("index");
	}


public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['news'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['news'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }


 public function actionNews(){
    	$model = News::find()->orderBy('time DESC');
        $page = new Pagination([
            'totalCount'=>$model->count(),
            'defaultPageSize'=>2,
        ]);
        $models = $model->offset($page->offset)->limit($page->limit)->all();
     	return $this->render('news',['news'=>$models,'pages'=>$page]);
  }


	 public function actionBolim($id){
    	$model = News::find()->where(["bolim_id"=>$id])->orderBy('time DESC')->all();
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