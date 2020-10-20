<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shops */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shops-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'user_id')->textInput() ?>

            <?= $form->field($model, 'tumans_shahars_id')->textInput() ?>

            <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'short')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>


        </div>
        <div class="col-md-6">

            <?= $form->field($model, 'views')->textInput() ?>

            <?= $form->field($model, 'status')->textInput() ?>

            <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'youtube_link')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'create_date')->textInput() ?>

            <?= $form->field($model, 'update_date')->textInput() ?>
        </div>
    </div>





    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
