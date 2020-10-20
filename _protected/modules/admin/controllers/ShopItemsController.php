<?php

namespace app\modules\admin\controllers;

use app\models\Shops;
use Yii;
use app\models\ShopItems;
use app\models\ShopItemsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShopItemsController implements the CRUD actions for ShopItems model.
 */
class ShopItemsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ShopItems models.
     * @return mixed
     */
    public function actionIndex()
    {
        if ((Yii::$app->user->can('admin')) && (!Yii::$app->user->isGuest) ){

        $searchModel = new ShopItemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        }
//        return $this->render('site/index');
        return $this->goHome();
    }
    public function actionUserindex()
    {

       $shops = Shops::find()->where(['user_id'=>Yii::$app->user->identity->id])->one();
       $shopitem = ShopItems::find()->where(['shop_id'=>$shops->id])->all();

//       var_dump(($shopitem)); die();

        return $this->render('userindex', [
            'shops' => $shops,
            'shopitem'=> $shopitem
        ]);
    }

    /**
     * Displays a single ShopItems model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ShopItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShopItems();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUsercreate()
    {
        $model = new ShopItems();

        if ($model->load(Yii::$app->request->post()) ) {

            $shops = Shops::find()->where(['user_id'=>Yii::$app->user->identity->id])->one();

            $model->tuman_shahar_id = $shops->tumans_shahars_id;
            $model->shop_id = $shops->id;
            $model->user_id = Yii::$app->user->identity->id;

            $model->save();

            return $this->redirect(['userindex']);
        }

        return $this->render('usercreate', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ShopItems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionUserupdate($id)
    {
        $model = $this->findModel($id);

        if ($model->user_id == Yii::$app->user->identity->id){

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['userindex']);
        }

        return $this->render('userupdate', [
            'model' => $model,
        ]);

        }
        return $this->redirect(['userindex']);


    }

    /**
     * Deletes an existing ShopItems model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        if (Yii::$app->user->can('admin')){

        return $this->redirect(['index']);

        }
        return $this->redirect(['userindex']);
    }

    /**
     * Finds the ShopItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ShopItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ShopItems::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
