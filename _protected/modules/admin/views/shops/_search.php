<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shops-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'tumans_shahars_id') ?>

    <?= $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'short') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'views') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'telegram') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'youtube_link') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'update date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
