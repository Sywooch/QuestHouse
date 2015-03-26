<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action' => Url::toRoute('add')]); ?>
    <?= $form->field($model, 'quests_image_path[]')->fileInput(['multiple' => true,'id'=>"inputFile"])?>
        <div class="form-group">
            <?= Html::submitButton() ?>
        </div>
    <?php ActiveForm::end(); ?>

    <div style="width:300px; height: 250px; border: 1px solid #e74c3c;">
        <img src="" id="image_upload_preview" style="max-width:100%;max-height:100%;"/>
    </div>
    <br>
    <br>

<?php

    for ($i=0; $i < count($index_slider_images); $i++){ ?>
        <img src='../img/index-images/<?=$index_slider_images[$i]?>' style='width:30%;' />
        <?= Html::a('Delete', ['slider/delete', 'id' => $index_slider_images[$i]], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?><br><br>
<?php
    }
?>