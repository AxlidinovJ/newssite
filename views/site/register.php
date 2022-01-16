<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>
<div class="site-register">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password1') ?>
        <?= $form->field($model, 'password2') ?>
        <?= $form->field($model, 'yoshi'); ?>
<!--         <?= $form->field($model, 'AuthKey') ?>
        <?= $form->field($model, 'AccessToken') ?>
        <?= $form->field($model, 'time') ?>
 -->    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-register -->
