<?php

namespace app\controllers;

use app\models\Figura;
use Yii;
use app\models\Workspace;
use app\search\WorkspaceSearch;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WorkspaceController implements the CRUD actions for Workspace model.
 */
class WorkspaceController extends Controller
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
     * Lists all Workspace models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WorkspaceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        //var_dump($dataProvider); die();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Workspace model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {

        $model = $this->findModel($id);
        //VarDumper::dump($model); die();

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Workspace model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Workspace();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->saveFiguras();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'figuras' => Figura::getFiguras(true),
        ]);
    }

    /**
     * Updates an existing Workspace model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->saveFiguras();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'figuras' => Figura::getFiguras(true),
        ]);
    }

    /**
     * Deletes an existing Workspace model.
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
     * Finds the Workspace model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Workspace the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Workspace::findOne($id)) !== null) {
            $model->init();
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
