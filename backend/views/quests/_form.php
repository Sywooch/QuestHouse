<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\Quests;
use backend\models\Cities;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Quests */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<div style="width: 300px; float: left; margin-left: 15px;">
    <?= $form->field($model, 'quest_picture[]')->fileInput(['multiple' => true,'id'=>"inputFile"])?>
    <div style="width:300px; height: 250px; border: 1px solid #e74c3c;">
        <img src="" id="image_upload_preview" style="max-width:100%;max-height:100%;"/>
    </div>

    <div id="small_images_list">
        <?= $form->field($questsImagesModel, 'quests_image_path[]')->fileInput(['multiple' => true,'id'=>"inputFileMultiple"])?>
    </div>
</div>

<div style="float: left;">


    <div style="width: 300px; height: 500px; display: inline-block; float: left; margin-left: 50px;">

        <?php
        $countries=Cities::find()->all();
        $listData=ArrayHelper::map($countries,'id','city_name');
        echo $form->field($model, 'quest_city_id')->dropDownList($listData, ['prompt'=>'Select...']);
        ?>

        <?= $form->field($model, 'quest_name')->textInput(['maxlength' => 32]) ?>

        <?= $form->field($model, 'quest_en_name')->textInput(['maxlength' => 32]) ?>

        <?= $form->field($model, 'quest_creator')->textInput(['maxlength' => 32]) ?>

        <?= $form->field($model, 'quest_owner_link')->textInput(['maxlength' => 255]) ?>

        <?= $form->field($model, 'quest_description')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'quest_min_people')->textInput() ?>

        <?= $form->field($model, 'quest_max_people')->textInput() ?>

        <?= $form->field($model, 'quest_min_price')->textInput() ?>
    </div>

    <div style="width: 300px; height: 500px; display: inline-block;float: left; margin-left: 50px;">
        <?= $form->field($model, 'quest_max_price')->textInput() ?>

        <?= $form->field($model, 'quest_time')->textInput() ?>

        <?= $form->field($model, 'quest_difficulty')->textInput() ?>

        <?= $form->field($model, 'quest_rating')->textInput() ?>

        <?= $form->field($model, 'quest_status')->textInput() ?>


        <h>TimeLine</h>


        <div>
            <div><div style="display: inline;">From</div><input type="text" style="display: inline;" id = 'timeFrom'/></div>
            <div><div style="display: inline;">To</div><input type="text" style="display: inline;" id = 'timeTo'/></div>
            <div><div style="display: inline;">Interval</div><input type="text" style="display: inline;" id = 'timeInterval'/></div>
            <div><div style="display: inline;">Price</div><input type="text" style="display: inline;" id = 'timePrice'/></div>
        </div>

        <input type="button" id = 'fillTimeLine' value="Begin"><br><br>

        <!--<input type="text" style="width: 500px" id = 'priceLine'>
        <input type="text" style="width: 500px" id = 'timeLine'>-->
        <?= $form->field($questTimesModel, 'price')->textInput(['maxlength' => 255,'id' => 'priceLine']) ?>
        <?= $form->field($questTimesModel, 'time_value')->textInput(['maxlength' => 255,'id' => 'timeLine']) ?>


    </div>
    <div style="float: left; display:inline-block; margin-left: 50px;">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>