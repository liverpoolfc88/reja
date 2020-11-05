<?php
namespace app\controllers;

use app\models\Shops;
use app\models\TumansShahars;
use app\models\User;
use app\models\LoginForm;
use app\models\AccountActivation;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\SignupForm;
use app\models\ContactForm;
use yii\helpers\Html;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use Yii;
use function GuzzleHttp\Promise\all;
use yii\web\Response;
use yii\data\Pagination;
use app\models\ShopItems;
use yii\web\UploadedFile;



/**
 * Site controller.
 * It is responsible for displaying static pages, logging users in and out,
 * sign up and account activation, and password reset.
 */
class BoshqaruvController extends Controller
{
    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * @return array
     */
    public function beforeAction($action)
    {
        $id = Yii::$app->user->identity->id;
        $u = User::find()->where(['id'=>$id])->one();
        $shop = $u->shop;

        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        return parent::beforeAction($action);

    }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Declares external actions for the controller.
     *
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $id = Yii::$app->user->identity->id;
        $u = User::find()->where(['id'=>$id])->one();
        $shop = $u->shop;
        if (!empty($shop)){

            $shops = Shops::find()->where(['user_id'=>$id])->one();
            $shopitem = ShopItems::find()->where(['shop_id'=>$shops->id])->all();

//            var_dump($shopitem); die();

            return $this->render('index', [
                'shops' => $shops,
                'shopitem'=> $shopitem
            ]);
        }

        return $this->actionShopcreate();

    }



    public function actionShopcreate(){

        $model = new Shops();

        if ($model->load(Yii::$app->request->post()) ){

            $model->user_id = Yii::$app->user->identity->id;
            $model->slug = strtolower(str_replace(" ","",$model->name.time()));
            $model->status = 0;
            $model->save();
            return $this->redirect(['index']);
        }
        return $this->render('shopcreate',[
            'model' =>$model
        ]);
    }

    public function actionUserupdate($id)
    {
        $model = $this->findUsermodel($id);

        if ($model->id == Yii::$app->user->identity->id){

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }

            return $this->render('userupdate', [
                'model' => $model,
            ]);

        }
        return $this->redirect(['index']);
    }

    public function actionShopupdate($id)
    {
        $model = $this->findShopmodel($id);

        if ($model->user_id == Yii::$app->user->identity->id){

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }

            return $this->render('shopupdate', [
                'model' => $model,
            ]);

        }
        return $this->redirect(['index']);
    }


    public function actionCreate()
    {
        $model = new ShopItems();

        if ($model->load(Yii::$app->request->post()) ) {

            function rasm($model,$qiymat){
                $file = UploadedFile::getInstance($model, $qiymat);
                if (isset($file))
                {
                    $filename = uniqid() . '.' . $file->extension;
                    $path = 'uploads/item';
                    if (!file_exists($path)) {
                        mkdir($path,0777,true);
                    }
                    $path = 'uploads/item/' . $filename;
                    if ($file->saveAs($path))
                    {
                        return $path;
                    }
                }
            }
            $model->photo = rasm($model, 'photo');

            $shops = Shops::find()->where(['user_id'=>Yii::$app->user->identity->id])->one();

            $model->tuman_shahar_id = $shops->tumans_shahars_id;
            $model->slug = strtolower(str_replace(" ","-",$model->name.time()));
//            $model->slug = strtolower(count_chars($model->name,3));
            $model->shop_id = $shops->id;
            $model->user_id = Yii::$app->user->identity->id;
            $model->save();
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->user_id == Yii::$app->user->identity->id){

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }

            return $this->render('update', [
                'model' => $model,
            ]);

        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

            return $this->redirect(['index']);

    }


    public function actionAbout()
    {
        return $this->render('about');
    }

    protected function findModel($id)
    {
        if (($model = ShopItems::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findShopmodel($id)
    {
        if (($model = Shops::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findUsermodel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }




}
