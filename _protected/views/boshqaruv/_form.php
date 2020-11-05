<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$controlleraction = Yii::$app->controller->action->id;
/* @var $this yii\web\View */
/* @var $model app\models\ShopItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="padding-top: 50px" class="shop-items-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'required'=>true ])->label('Maxsulot nomi') ?>

            <?
            $items=[
                1=>'Tizimda ko`rinsin',
                0=>'Tizimda ko`rinmasin',
            ];?>

            <?= $form->field($model, 'status')->dropDownList($items)->label('Status') ?>

<!--            --><?//= $form->field($model, 'tuman_shahar_id')->textInput() ?>

<!--            --><?//= $form->field($model, 'shop_id')->textInput() ?>

<!--            --><?//= $form->field($model, 'user_id')->textInput() ?>

<!--            --><?//= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Инн') ?>

            <?= $form->field($model, 'price')->textInput(['type'=>'number','required'=>true])->label('Narxi') ?>



        </div>
        <div class="col-md-6">



            <?= $form->field($model, 'sale')->textInput(['type'=>'number'])->label('Chegirma') ?>

<!--            --><?//= $form->field($model, 'created_date')->textInput() ?>
<!---->
<!--            --><?//= $form->field($model, 'updated_date')->textInput() ?>

            <?= $form->field($model, 'short')->textInput(['maxlength' => true])->label('Maxsulot haqida') ?>

            <!--            --><?//= $form->field($model, 'views')->textInput() ?>

            <!--            --><?//=($controlleraction != 'update')?$form->field($model, 'slug')->textInput(['maxlength' => true]):'' ?>
<!---->
            <?= $form->field($model, 'photo')->fileInput(['style'=>'padding-top:34px']) ?>

<!--            <input style="padding-top: 34px" name="photo" required type="file" id="photo">-->

        </div>
    </div>





    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
