<?php

namespace app\modules\admin\controllers;
use yii;
use yii\web\Controller;
use yii\base\Security;
use yii\helpers\url;
use yii\filters\AccessControl;
use app\modules\admin\models\Menu;
use app\modules\admin\models\Bolim;
use app\modules\admin\models\News;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public $layout = "news";
    

public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['admin','index','addmenu','addbolim','editnews','addnews'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' =>  ['admin','index','addmenu','addbolim','editnews','addnews'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }



    public function actionIndex()
    {
        $model = News::find()->all();
        return $this->render('index',['news'=>$model]);
    }

  

public function actionAddmenu(){
    $model = new Menu();
    $menu  = Menu::find()->all();
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            $model->time = date("Y-m-d");
            $model->save();
            return $this->redirect('../');
        }
    }
    return $this->render('addmenu', [
        'model' => $model,
        'menu' =>$menu,
    ]);
}


public function actionAddbolim(){
    $model = new Bolim();
    $bolim = Bolim::find()->all();
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            $model->time = date("Y-m-d");
            $model->save();
            // form inputs are valid, do something here
            return $this->redirect('../');
            
        }
    }
    return $this->render('addbolim', [
        'model' => $model,
        'bolim'=>$bolim,
    ]);
}

public function actionAddnews(){
    $model = new News();
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            $model->time = date("Y-m-d H:i:s");
            $ex = explode('<img src="',$model->content);
            $ex1 = explode('" />',$ex[1]);
            $r = new Security(); 
            $filename =$r->generateRandomString(10).".jpg";
            file_put_contents("images/".$filename, $ex1[0]);
            $model->img = $filename;
            $model->save();
            return $this->redirect('../');
        }
    }
    return $this->render('addnews', [
        'model' => $model,
    ]);
}

public function actionEditnews($id){
    $model1 = new News();
    $model = News::findOne($id);
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            $model->time = date("Y-m-d H:i:s");
            // $ex = explode('<img src="',$model->content);
            // $ex1 = explode('" />',$ex[1]);
            // $filename = $model->img;
            // file_put_contents("images/".$filename, $ex1[0]);
            $model->save();
            return $this->redirect('../');
        }
    }
    return $this->render('editnews', [
        'model' => $model,
    ]);
}
    
public function actionDeletenews($id){
    $model1 = new News();
    $model = News::findOne($id);
            $filename = $model->img;
            // if(file_exists("images/".$filename))
            // unlink("images/".$filename);
            $model->delete();
            return $this->redirect('../');
}

   
}
