<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TumansShahars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tumans-shahars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'template_id')->textInput() ?>

    <?= $form->field($model, 'viloyat_id')->textInput() ?>

<!--    --><?//= $form->field($model, 'create_date')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'update_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
