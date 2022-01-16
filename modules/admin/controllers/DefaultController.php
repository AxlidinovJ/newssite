<?php

namespace app\modules\admin\controllers;
use yii;
use yii\web\Controller;
use app\modules\admin\models\News;
use yii\base\Security;
use yii\helpers\url;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    // public $layout = "news";
    
    public function actionIndex()
    {
        $model = News::find()->all();
        return $this->render('index',['news'=>$model]);
    }

  

public function actionAddmenu(){
    $model = new \app\modules\admin\models\Menu();
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
    ]);
}


public function actionAddbolim(){
    $model = new \app\modules\admin\models\Bolim();
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
    ]);
}

public function actionAddnews(){
    $model = new \app\modules\admin\models\News();
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
    $model1 = new \app\modules\admin\models\News();
    $model = News::findOne($id);
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            $model->time = date("Y-m-d H:i:s");
            $ex = explode('<img src="',$model->content);
            $ex1 = explode('" />',$ex[1]);
            $filename = $model->img;
            file_put_contents("images/".$filename, $ex1[0]);
            $model->save();
            return $this->redirect('../');
        }
    }
    return $this->render('editnews', [
        'model' => $model,
    ]);
}
    
public function actionDeletenews($id){
    $model1 = new \app\modules\admin\models\News();
    $model = News::findOne($id);
            $filename = $model->img;
            if(file_exists("images/".$filename))
            unlink("images/".$filename);
            $model->delete();
            return $this->redirect('../');
}

   
}
