<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;



$d = \app\models\TumansShahars::find()->all();
$h=ArrayHelper::toArray($d);


//var_dump($h); die();
/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shops';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .stil{

        overflow-x:auto;
    }
</style>
<div class="shops-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shops', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [
//            'class' => ' table-responsive '
            'class' => 'stil',
            'id' => 'stil',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'user_id',
            'tumans_shahars_id',
//            'photo',
            'short',
            'text',
            'slug',
            //'views',
            'status',
            //'tel',
            //'telegram',
            //'location',
            //'youtube_link',
            'create_date',
            'update date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
<script>
    var w = window.innerWidth;
    var h = window.innerHeight-190;
    document.getElementById("stil").style.height = h+"px";
</script>