<?php

namespace backend\controllers;

use Yii;
use backend\models\Quests;
use backend\models\QuestsImages;
use backend\models\SearchQuests;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * QuestsController implements the CRUD actions for Quests model.
 */
class QuestsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Quests models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchQuests();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Quests model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Quests model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Quests();
        $questsImagesModel = new QuestsImages();
        if ($model->load(Yii::$app->request->post()) && $questsImagesModel->load(Yii::$app->request->post())) {

            $questLogoImage = UploadedFile::getInstances($model, 'quest_picture');
            $questsImageArray = UploadedFile::getInstances($questsImagesModel, 'quests_image_path');

            $model->created_at = time();
            $model->updated_at = time();

            $questsImagesModel->created_at = time();
            $questsImagesModel->updated_at = time();

            $questImagesDir = Yii::$app->basePath."/../frontend/web/img/quest-images/".$model->quest_en_name."/";

            $model->quest_picture = $questLogoImage[0]->baseName . '.' . $questLogoImage[0]->extension;

            if(!is_dir($questImagesDir)) {
                mkdir($questImagesDir);
            }

            $model->save();

            foreach ($questLogoImage as $file) {
                $file->saveAs($questImagesDir . $file->baseName . '.' . $file->extension);
            }
            foreach ($questsImageArray as $file) {
                $file->saveAs($questImagesDir . $file->baseName . '.' . $file->extension);
                $questsImagesModel->id = null;
                $questsImagesModel->quests_image_path = $file->baseName . '.' . $file->extension;
                $questsImagesModel->quests_image_quest_id = $model->id;
                $questsImagesModel->isNewRecord = true;
                $questsImagesModel->save();
            }

            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'questsImagesModel' => $questsImagesModel,
            ]);
        }
    }

    /**
     * Updates an existing Quests model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Quests model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Quests model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Quests the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Quests::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
