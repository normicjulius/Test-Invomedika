<?php

namespace app\controllers;

use app\models\TbRiwayat;
use app\models\RiwayatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RiwayatController implements the CRUD actions for TbRiwayat model.
 */
class RiwayatController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TbRiwayat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RiwayatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbRiwayat model.
     * @param int $id_riwayat Id Riwayat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_riwayat)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_riwayat),
        ]);
    }

    /**
     * Creates a new TbRiwayat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbRiwayat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_riwayat' => $model->id_riwayat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbRiwayat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_riwayat Id Riwayat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_riwayat)
    {
        $model = $this->findModel($id_riwayat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_riwayat' => $model->id_riwayat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbRiwayat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_riwayat Id Riwayat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_riwayat)
    {
        $this->findModel($id_riwayat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbRiwayat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_riwayat Id Riwayat
     * @return TbRiwayat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_riwayat)
    {
        if (($model = TbRiwayat::findOne(['id_riwayat' => $id_riwayat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
