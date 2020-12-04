<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shop Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shop Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'tuman_shahar_id',
            'shop_id',
            'user_id',
            //'title',
            //'photo',
            //'short',
            //'views',
            //'slug',
            //'status',
            'price',
            //'sale',
            //'created_date',
            //'updated_date',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
