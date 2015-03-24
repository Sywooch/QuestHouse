<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Quests */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Quests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quests-view">

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'quest_name',
            'quest_en_name',
            'quest_creator',
            'quest_owner_link',
            'quest_description:ntext',
            'quest_min_people',
            'quest_max_people',
            'quest_picture',
            'quest_min_price',
            'quest_min_price',
            'quest_time:datetime',
            'quest_difficulty',
            'quest_rating',
            'quest_city_id',
            'quest_status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
