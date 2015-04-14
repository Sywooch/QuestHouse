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
use yii\helpers\FileHelper;
use common\models\QuestsTimes;

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
        $questTimesModel = new QuestsTimes();

        if ($model->load(Yii::$app->request->post())
            && $questsImagesModel->load(Yii::$app->request->post())
            && $questTimesModel->load(Yii::$app->request->post())) {

            $timeArray = explode(';',$questTimesModel['time_value']);
            $pricesArray = explode(';',$questTimesModel['price']);

            $questLogoImage = UploadedFile::getInstances($model, 'quest_picture');
            $questsImageArray = UploadedFile::getInstances($questsImagesModel, 'quests_image_path');

            $model->created_at = time();
            $model->updated_at = time();

            $questsImagesModel->created_at = time();
            $questsImagesModel->updated_at = time();

            $model->quest_picture = $questLogoImage[0]->baseName . '.' . $questLogoImage[0]->extension;

            $model->save();

            $questImagesDir = Yii::$app->basePath."/../frontend/web/img/quest-images/".$model->id."/";

            if(!is_dir($questImagesDir)) {
                mkdir($questImagesDir);
            }

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

            for ($i=0;$i<count($pricesArray);$i++){
                $questTimesModel->id = null;
                $questTimesModel->quest_id = $model->id;
                $questTimesModel->time_value = $timeArray[$i];
                $questTimesModel->price = $pricesArray[$i];
                $questTimesModel->isNewRecord = true;
                $questTimesModel->created_at = time();
                $questTimesModel->updated_at = time();
                $questTimesModel->save();
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'questsImagesModel' => $questsImagesModel,
                'questTimesModel' => $questTimesModel
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
        $qp = $model->quest_picture;
        if ($model->load(Yii::$app->request->post())) {
            $model->quest_picture = $qp;
            if ($model->save()){
                print_r(Yii::$app->request->post());
                return $this->redirect(['view', 'id' => $model->id]);

            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'questsImagesModel' => QuestsImages::findOne(['quests_image_quest_id'=>[$id]]),
                'questsImgArray' => QuestsImages::findAll(['quests_image_quest_id'=>[$id]]),
                'questsTimesArray' => QuestsTimes::findAll(['quest_id'=>[$id]]),
                'questTimesModel' => QuestsTimes::findOne(['quest_id'=>[$id]])
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
        $questImagesDir = Yii::$app->basePath."/../frontend/web/img/quest-images/".$id."/";

        $questImage = new QuestsImages();
        $questImage->deleteAll("quests_image_quest_id = ".$id);
        $questTime = new QuestsTimes();
        $questTime->deleteAll("quest_id = ".$id);

        if(is_dir($questImagesDir)) {
            $fileManager = new FileHelper();
            $fileManager->removeDirectory($questImagesDir);
        }
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
