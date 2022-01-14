<?php
use yii\bootstrap4\Html;
use yii\helpers\url;

?>

<h1><?=html::a("Menu qo'shish",url::to(['default/addmenu']));?></h1>
<h1><?=html::a("Bo'lim qo'shish",url::to(['default/addbolim']));?></h1>
<h1><?=html::a("Yangilik qo'shish",url::to(['default/addnews']));?></h1>