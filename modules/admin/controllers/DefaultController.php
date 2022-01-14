<?php

namespace app\modules\admin\controllers;
use yii;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    // public $layout = "news";
    
    public function actionIndex()
    {
        return $this->render('index');
    }


public function actionAddmenu(){
    $model = new \app\modules\admin\models\Menu();
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
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
            $model->save();
            // form inputs are valid, do something here
            return;
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
            // form inputs are valid, do something here
            return;
        }
    }
    return $this->render('addnews', [
        'model' => $model,
    ]);
}



}
