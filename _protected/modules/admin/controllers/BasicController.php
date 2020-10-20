<?php

namespace app\modules\admin\controllers;
use Yii;
class BasicController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if (!(Yii::$app->user->isGuest)){

        return $this->render('index');
        }
        return $this->goHome();
    }

}
