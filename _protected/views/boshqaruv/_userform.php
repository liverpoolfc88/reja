<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Viloyats;
use kartik\password\PasswordInput;
$controlleraction = Yii::$app->controller->action->id;
/* @var $this yii\web\View */
/* @var $model app\models\ShopItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="padding-top: 50px" class="shops-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-md-6">

            <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label('Ismingizni kiriting') ?>

<!--            --><?//= $form->field($model, 'user_id')->textInput() ?>

<!--            --><?//= $form->field($model, 'tuman_shahar_id')->textInput() ?>

            <?= $form->field($model, 'viloyat_id')->dropDownList(Viloyats::menu(),[
                'onchange' =>'
                    $.post("'.Yii::$app->urlManager->createUrl('/boshqaruv/list_tuman?id=').'"+$(this).val(),
                    function(data){
                        $("select#tumans_shahars_id").html(data); console.log(data)
                    });'
            ])->label('Viloyatni tanlang') ?>
            <!---->
            <!--            --><?//= $form->field($model, 'tumans_shahars_id')->textInput() ?>

            <?= $form->field($model, 'tumans_shahars_id')->dropDownList(\app\models\TumansShahars::menu(),[
                'id'=>'tumans_shahars_id',
//                           ['required'=>true]
            ])->label('Tuman yoki shaharni tanlang') ?>

<!--            --><?//= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'photo')->fileInput(['style'=>'padding-top:34px']) ?>

            <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>
<!---->
<!--            --><?//= $form->field($model, 'newpassword')->textInput(['maxlength' => true]) ?>

<!--            --><?//= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

<!--            --><?//= $form->field($model, 'password')->widget(PasswordInput::classname(),
//                ['options' => ['placeholder' => Yii::t('app', 'Create password')]]) ?>


        </div>
        <div class="col-md-6">

<!--            --><?//= $form->field($model, 'views')->textInput() ?>

<!--            --><?//= $form->field($model, 'status')->textInput() ?>

<!--            --><?//= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
<!---->
<!--            --><?//= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>
<!---->
<!--            --><?//= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
<!---->
<!--            --><?//= $form->field($model, 'youtube_link')->textInput(['maxlength' => true]) ?>

<!--            --><?//= $form->field($model, 'create_date')->textInput() ?>
<!---->
<!--            --><?//= $form->field($model, 'update_date')->textInput() ?>
        </div>
    </div>





    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
