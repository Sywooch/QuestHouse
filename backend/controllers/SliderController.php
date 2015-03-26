<?php

namespace backend\controllers;
use Yii;
use backend\models\QuestsImages;
use yii\web\UploadedFile;

class SliderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dir = "../frontend/web/img/index-images";
        $files = [];
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            if($filename !== '.' && $filename !== '..') {
                $files[] = $filename;
            }
        }
        $imagesModel=new QuestsImages();
        return $this->render('index',[
            'index_slider_images' => $files,
            'model'=>$imagesModel
        ]);
    }

    public function actionAdd()
    {
        $model = new QuestsImages();
        if ($model->load(Yii::$app->request->post())) {

            $questLogoImage = UploadedFile::getInstances($model, 'quests_image_path');
            $questImagesDir = Yii::$app->basePath."/../frontend/web/img/index-images/";
            foreach ($questLogoImage as $file) {
                $file->saveAs($questImagesDir . $file->baseName . '.' . $file->extension);
            }
            return $this->redirect(['/slider']);
        }

    }

    public function actionDelete($id)
    {
        echo $id;
        unlink("../frontend/web/img/index-images/".$id);
        $dir = "../frontend/web/img/index-images";
        $files = [];
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            if($filename !== '.' && $filename !== '..') {
                $files[] = $filename;
            }
        }
        return $this->redirect(['/slider']);

    }

}
