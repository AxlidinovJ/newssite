<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use dosamigos\tinymce\TinyMce;

use app\modules\admin\models\Bolim;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */
/* @var $form ActiveForm */
?>
<div class="addnews">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'img') ?>
        <?php

        echo $form->field($model, 'content')->widget(TinyMce::className(), [
            'options' => ['rows' => 20],
            'language' => 'en-US',
            'clientOptions' => [
            'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
             ]  
            ]);

        $data = ArrayHelper::map(Bolim::find()->all(),'id','bnomi');
        echo $form->field($model, 'bolim_id')->dropdownlist($data,['prompt'=>"Tanlang"]);
        // echo $form->field($model, 'bolim_id')->widget(Select2::classname(), [
        //                                             'data' => $data,
        //                                             'language' => 'ru',
        //                                             'options' => ['placeholder' => 'Select a state ...'],
        //                                             'pluginOptions' => [
        //                                                 'allowClear' => true
        //                                             ],
        //                                         ]);

     ?>
        <!-- <?= $form->field($model, 'time') ?> -->
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addnews -->
