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
<?php echo $model->isNewRecord; ?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<div style="width: 300px; float: left; margin-left: 15px;">

    <?php if ($model->isNewRecord) {
        $req = "required";
        ?>
        <?= $form->field($model, 'quest_picture')->fileInput(['id'=>"inputFile",'required' => ''])?>
    <?php } else { ?>
        <?= $form->field($model, 'quest_picture')->fileInput(['id'=>"inputFile"])?>
    <?php $req = ''; }?>

    <div style="width:300px; height: 250px; border: 1px solid #e74c3c;">
        <?php if ($model->isNewRecord) {?>
        <img src="" id="image_upload_preview" style="max-width:100%;max-height:100%;"/>
        <?php } else { ?>
            <img src='/QuestHouse/frontend/web/img/quest-images/<?=$model->quest_en_name."/".$model->quest_picture?>' id="image_upload_preview" style="max-width:100%;max-height:100%;"/>
        <?php }?>
    </div>

    <div id="small_images_list">

        <?php if ($model->isNewRecord) {?>
            <?= $form->field($questsImagesModel, 'quests_image_path[]')->fileInput(['multiple' => true,'id'=>"inputFileMultiple",'required' => ''])?>
        <?php } else { ?>
            <?= $form->field($questsImagesModel, 'quests_image_path[]')->fileInput(['multiple' => true,'id'=>"inputFileMultiple"])?>
            <?php for ($i=0;$i< count($questsImgArray);$i++){ ?>
                <div style="width:150px; height: 150px; border: 1px solid #e74c3c; float: left;">
                    <img src='/QuestHouse/frontend/web/img/quest-images/<?=$model->quest_en_name."/".$questsImgArray[$i]['quests_image_path']?>' style="max-width:100%;max-height:100%;" ></div>
            <?php } ?>
        <?php }?>

    </div>
</div>

<div style="float: left;">


    <div style="width: 300px; height: 500px; display: inline-block; float: left; margin-left: 50px;">

        <?php
        $countries=Cities::find()->all();
        $listData=ArrayHelper::map($countries,'id','city_name');
        echo $form->field($model, 'quest_city_id')->dropDownList($listData, ['prompt'=>'Select...']);
        ?>

        <?= $form->field($model, 'quest_name')->textInput(['maxlength' => 32,'required' => '']) ?>

        <?= $form->field($model, 'quest_en_name')->textInput(['maxlength' => 32,'required' => '']) ?>

        <?= $form->field($model, 'quest_creator')->textInput(['maxlength' => 32,'required' => '']) ?>

        <?= $form->field($model, 'quest_owner_link')->textInput(['maxlength' => 255,'required' => '']) ?>

        <?= $form->field($model, 'quest_description')->textarea(['rows' => 6,'required' => '']) ?>

        <?= $form->field($model, 'quest_min_people')->textInput(['required' => '']) ?>

        <?= $form->field($model, 'quest_max_people')->textInput(['required' => '']) ?>

        <?= $form->field($model, 'quest_min_price')->textInput(['required' => '']) ?>
    </div>

    <div style="width: 300px; height: 500px; display: inline-block;float: left; margin-left: 50px;">
        <?= $form->field($model, 'quest_max_price')->textInput(['required' => '']) ?>

        <?= $form->field($model, 'quest_time')->textInput(['required' => '']) ?>

        <?= $form->field($model, 'quest_difficulty')->textInput(['required' => '']) ?>

        <?= $form->field($model, 'quest_rating')->textInput(['required' => '']) ?>

        <?= $form->field($model, 'quest_status')->textInput(['required' => '']) ?>


        <h>TimeLine</h>

        <div>
            <div><div style="display: inline;">From</div><input type="text" style="display: inline;" id = 'timeFrom' <?=$req?>/></div>
            <div><div style="display: inline;">To</div><input type="text" style="display: inline;" id = 'timeTo' <?=$req?>/></div>
            <div><div style="display: inline;">Interval</div><input type="text" style="display: inline;" id = 'timeInterval' <?=$req?>/></div>
            <div><div style="display: inline;">Price</div><input type="text" style="display: inline;" id = 'timePrice' <?=$req?>/></div>
        </div>

        <input type="button" id = 'fillTimeLine' value="Begin"><br><br>

        <!--<input type="text" style="width: 500px" id = 'priceLine'>
        <input type="text" style="width: 500px" id = 'timeLine'>-->
        <?php if ($model->isNewRecord) {?>
            <?= $form->field($questTimesModel, 'price')->textInput(['maxlength' => 255,'id' => 'priceLine','required' => '']) ?>
            <?= $form->field($questTimesModel, 'time_value')->textInput(['maxlength' => 255,'id' => 'timeLine','required' => '']) ?>
        <?php } else { ?>

            <?php

                $timeLine = [];$priceLine = [];
                for ($i=0; $i<count($questsTimesArray); $i++){
                    array_push($timeLine,$questsTimesArray[$i]['time_value']);
                    array_push($priceLine,$questsTimesArray[$i]['price']);
                }

            $timeLine = implode(",",$timeLine);
            $priceLine = implode(",",$priceLine);
            ?>

            <?= $form->field($questTimesModel, 'price')->textInput(['maxlength' => 255,'id' => 'priceLine','required' => '','value'=>$timeLine]) ?>
            <?= $form->field($questTimesModel, 'time_value')->textInput(['maxlength' => 255,'id' => 'timeLine','required' => '','value'=>$priceLine]) ?>
        <?php } ?>



    </div>
    <div style="float: left; display:inline-block; margin-left: 50px;">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>