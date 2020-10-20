<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-items-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!--            --><?//= $form->field($model, 'tuman_shahar_id')->textInput() ?>

<!--            --><?//= $form->field($model, 'shop_id')->textInput() ?>

<!--            --><?//= $form->field($model, 'user_id')->textInput() ?>

            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'short')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'views')->textInput() ?>

            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">

            <?= $form->field($model, 'status')->textInput() ?>

            <?= $form->field($model, 'price')->textInput() ?>

            <?= $form->field($model, 'sale')->textInput() ?>

            <?= $form->field($model, 'created_date')->textInput() ?>

            <?= $form->field($model, 'updated_date')->textInput() ?>
        </div>
    </div>





    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
