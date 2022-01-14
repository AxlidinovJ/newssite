<?php

namespace app\modules\admin\controllers;
use yii;
use yii\web\Controller;
use app\modules\admin\models\News;

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
            $model->save();
            return $this->redirect('../');
        }
    }
    return $this->render('addnews', [
        'model' => $model,
    ]);
}



}
