<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;


AppAsset::register($this);


$action = Yii::$app->controller->id;
$controlleraction = Yii::$app->controller->action->id;
//$role = Yii::$app->user->identity->role;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    sardor-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
<!--    <link href="themes/assets/img/favicon.png" rel="icon">-->
<!--    <link href="themes/assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
<!--    sardor-->

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!--    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>-->

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="">
    <div style="padding: 0px" class="container-fluid">
        <?=($action == 'boshqaruv')?Yii::$app->controller->renderPartial("//layouts/header"):Yii::$app->controller->renderPartial("//layouts/headerindex")?>
        <?= $content ?>
        <?=Yii::$app->controller->renderPartial("//layouts/footer")?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
