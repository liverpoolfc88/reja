<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TumansShahars */

$this->title = 'Create Tumans Shahars';
$this->params['breadcrumbs'][] = ['label' => 'Tumans Shahars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tumans-shahars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
