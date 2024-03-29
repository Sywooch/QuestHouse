<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Quests */

$this->title = 'Update Quests: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Quests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quests-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'questsImagesModel' => $questsImagesModel,
        'questsImgArray' => $questsImgArray,
        'questsTimesArray' => $questsTimesArray,
        'questTimesModel' => $questTimesModel
    ]) ?>

</div>
