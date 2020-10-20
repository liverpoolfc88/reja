<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TumansShahars */

$this->title = 'Update Tumans Shahars: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tumans Shahars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tumans-shahars-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
