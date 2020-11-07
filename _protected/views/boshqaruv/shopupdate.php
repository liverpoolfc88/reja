<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopItems */

$this->title = 'O`zgartirish bo`limi: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shop Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div style="padding-top: 50px" class=" container shop-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_shopform', [
        'model' => $model,
    ]) ?>

</div>
