<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Bolim */
/* @var $form ActiveForm */
?>
<div class="addbolim">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'bnomi') ?>
        <!-- <?= $form->field($model, 'time') ?> -->
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addbolim -->
<?php
foreach ($bolim as $key) {
    echo "<li>";
        echo $key->bnomi." <=> ". $key->time;
    echo "</li>";
}
?>
