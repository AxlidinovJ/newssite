<?php
namespace app\controllers;
use yii;
use yii\web\Controller;

class NewsController extends Controller{
	public $layout = "news";
	public function actionIndex(){
		return $this->render("index");
	}


}

?>