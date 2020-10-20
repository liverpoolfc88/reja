<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopItems */

$this->title = 'Update Shop Items: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shop Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shop-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_userform', [
        'model' => $model,
    ]) ?>

</div>
