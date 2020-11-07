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

    <? if ($count == 8): ?>
        <div class="alert alert-info" role="alert">
            Xurmatli foydalanuvchi! Tizimda faqat 8 ta, statusi yoniq xoldagi maxsulotlaringiz ko'rinadi, boshqaruv bo`limingizda esa xammasi, agar statusni yoqishni xoxlasangiz adminga murojaat qiling!
        </div>
    <? endif; ?>

    <?= $this->render('_form', [
        'model' => $model,
        'count' => $count
    ]) ?>

</div>
