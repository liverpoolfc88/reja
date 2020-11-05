<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopItems */

$this->title = 'Maxsulot qo`shish bo`limi';
$this->params['breadcrumbs'][] = ['label' => 'Shop Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="padding-top: 50px" class="container shop-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
