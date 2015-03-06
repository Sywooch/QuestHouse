<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Quest */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Quests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quest-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php /*echo Html::img(Yii::$app->request->baseUrl.'/images/quest-images/test_new_quest/Screenshot from 2015-02-28 22:18:54.png') */?>


    <?php
    for($i = 0; $i < count($quest_time); $i++){
        echo $quest_time[$i]['time_value']." ";
    }
    ?>


    <br><br><br><br>
    <?php
        for ($i = 0; $i<count($quest_images);$i++){
            echo Html::img(Yii::$app->request->baseUrl.'/'.$quest_images[$i],array('width'=>'150px;','style'=>'margin : 10px;'));
        }
    ?>
    <br><br><br><br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'quest_en_name',
            'quest_name',
            'quest_description:ntext',
            'quest_price',
            'quest_max_players',
            'quest_logo',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
