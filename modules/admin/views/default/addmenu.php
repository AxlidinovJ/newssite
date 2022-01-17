<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Menu */
/* @var $form ActiveForm */

?>
<div class="addmenu">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'link') ?>
        <!-- <?= $form->field($model, 'time') ?>-->
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addmenu -->

<?php
foreach ($menu as $key) {
    echo "<li>";
        echo $key->name. " <=> ". $key->link. " <=> ". $key->time;
    echo "</li>";
}
?>
