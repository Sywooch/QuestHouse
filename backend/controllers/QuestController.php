<?php

namespace backend\controllers;

use common\models\QuestsTimes;
use Yii;
use common\models\Quest;
use yii\filters\AccessControl;
use common\models\User;
use common\models\SearchQuest;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * QuestController implements the CRUD actions for Quest model.
 */
class QuestController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        //'actions' => ['*'],
                        'allow' => true,
                        //'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            if (!User::isUserAdmin(Yii::$app->user->identity->username)) {
                                return $this->redirect(Yii::$app->homeUrl.'../error');
                            } else return User::isUserAdmin(Yii::$app->user->identity->username);
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Quest models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchQuest();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Quest model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $questTimes = new QuestsTimes();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'quest_time'  => $questTimes->getTimeLineForQuest($id),
            'quest_images'  => $questImages =$this->findImages($id)
        ]);
    }

    /**
     * Creates a new Quest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Quest();

        //if ($model->load(Yii::$app->request->post()) && $model->save()) {
        if ($model->load(Yii::$app->request->post()) /*&& $model->save()*/) {
            /*$model->created_at = time();
            $model->updated_at = time();

            $filesArray = UploadedFile::getInstances($model, 'quest_logo');

                foreach (UploadedFile::getInstances($model, 'quest_logo') as $file) {
                    $file->saveAs('images/quest-images/' . $file->baseName . '.' . $file->extension);
                }

            $model->quest_logo = $filesArray[0]->baseName . '.' . $filesArray[0]->extension;


            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);*/

            //print_r($model);
            $filesArray = UploadedFile::getInstances($model, 'quest_logo');

            $questImagesDir = "images/quest-images/".$model->quest_en_name."/";
            mkdir($questImagesDir);
            foreach (UploadedFile::getInstances($model, 'quest_logo') as $file) {
                $file->saveAs($questImagesDir . $file->baseName . '.' . $file->extension);
            }

            $model->quest_logo = $filesArray[0]->baseName . '.' . $filesArray[0]->extension;
            $model->created_at = time();
            $model->updated_at = time();
            $model->quest_logo = "testName";
            $quest_times = new QuestsTimes();
            $quest_times->load(Yii::$app->request->post());
            $model->save();
            $timesArray = explode(' ',$quest_times->time_value);
            for ($i=0;$i<count($timesArray);$i++){
                $quest_times->id = null;
                $quest_times->time_value =  $timesArray[$i];
                $quest_times->quest_id = $model->id;
                $quest_times->created_at = time();
                $quest_times->updated_at = time();
                $quest_times->isNewRecord = true;
                $quest_times->save();
            }

            return $this->redirect(['view', 'id' => $model->id]);
            //print_r($_POST);

            //print_r($quest_times->time_value);
            //print_r(explode(' ',$quest_times->time_value));
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Quest model.
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
     * Deletes an existing Quest model.
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
     * Finds the Quest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Quest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Quest::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findImages($questId)
    {
        $model = new Quest();
        if (Quest::find()->where('id = '.$questId)->one())
        {
            return $model->getAllQuestImages($questId);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
