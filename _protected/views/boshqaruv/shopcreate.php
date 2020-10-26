<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopItems */

$this->title = 'Create Shop Items';
$this->params['breadcrumbs'][] = ['label' => 'Shop Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container shop-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_shopform', [
        'model' => $model,
    ]) ?>

</div>
