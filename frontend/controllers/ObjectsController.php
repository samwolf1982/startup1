<?php

namespace frontend\controllers;

use frontend\models\BaseType;
use frontend\models\CurrencyType;
use frontend\models\Deal;
use frontend\models\NewBildingType;
use frontend\models\ObjectType;
use frontend\models\RepairsType;
use frontend\models\RoomType;
use Yii;
use frontend\models\Objects;
use frontend\models\ObjectsSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ObjectsController implements the CRUD actions for Objects model.
 */
class ObjectsController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Objects models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ObjectsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Objects model.
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
     * Creates a new Objects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Objects();
        $model_new_bilding=new NewBildingType();
            $model->user_id=Yii::$app->user->getId();
            $model->created_at= date ("Y-m-d H:i:s" );
            $model->updated_at= date ("Y-m-d H:i:s");
            $model->status= 0;
            $model->currency_type_id= 1;

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

        $deal_list=   ArrayHelper::map(Deal::find()->all(), 'id', 'name');
        $object_type_list=   ArrayHelper::map(ObjectType::find()->all(), 'id', 'name');
        $property_type=['0' => 'Я являюсь собственником', '1' => 'Я являюсь агентом'];
        $prompt_params = ['prompt' => 'Выберите статус...'];
        $prompt_params_type_room = ['prompt' => 'Выберите тип...'];
        $currency_type_list=ArrayHelper::map(CurrencyType::find()->all(), 'id', 'name');
        $room_type_list=ArrayHelper::map(RoomType::find()->all(), 'id', 'name');
        $base_type_list=ArrayHelper::map(BaseType::find()->all(), 'id', 'name');
        $repairs_type_list=ArrayHelper::map(RepairsType::find()->all(), 'id', 'name');


        $new_bilding_date_end_list=['I квартал','II квартал','III квартал','IV квартал'];
        $prompt_new_bilding = ['prompt' => '(не указано)...'];
        $new_bilding_year_end_list=range(2013,2027);
        return $this->render('create', compact('model','model_new_bilding','deal_list','object_type_list','property_type','prompt_params','currency_type_list','room_type_list','prompt_params_type_room',
            "base_type_list",'repairs_type_list','new_bilding_date_end_list','prompt_new_bilding','new_bilding_year_end_list' ));
    }
//currency_type
    /**
     * Updates an existing Objects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Objects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Objects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Objects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Objects::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
