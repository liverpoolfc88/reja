<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Viloyats */

$this->title = 'Create Viloyats';
$this->params['breadcrumbs'][] = ['label' => 'Viloyats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viloyats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
