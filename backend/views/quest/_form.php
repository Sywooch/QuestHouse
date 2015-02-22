<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Quest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quest_en_name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'quest_name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'quest_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'quest_price')->textInput() ?>

    <?= $form->field($model, 'quest_max_players')->textInput() ?>

    <!-- <?= $form->field($model, 'quest_logo')->textInput() ?> -->
    <?=  $form->field($model, 'quest_logo')->fileInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
