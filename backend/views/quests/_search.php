<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchQuests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quests-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'quest_en_name') ?>

    <?= $form->field($model, 'quest_name') ?>

    <?= $form->field($model, 'quest_description') ?>

    <?= $form->field($model, 'quest_price') ?>

    <?php // echo $form->field($model, 'quest_max_players') ?>

    <?php // echo $form->field($model, 'quest_logo') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
