<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Quest */
/* @var $form yii\widgets\ActiveForm */
?>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>

<div class="quest-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'quest_en_name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'quest_name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'quest_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'quest_price')->textInput() ?>

    <?= $form->field($model, 'quest_max_players')->textInput() ?>

    <?= $form->field($model, 'quest_logo[]')->fileInput(['multiple' => true]) ?>

<!--    <?/*= $form->field($model, 'created_at')->textInput() */?>

    --><?/*= $form->field($model, 'updated_at')->textInput() */?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
