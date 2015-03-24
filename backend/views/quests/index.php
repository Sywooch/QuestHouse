<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchQuests */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quests-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Quests', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'quest_name',
            'quest_en_name',
            'quest_creator',
            'quest_owner_link',
            // 'quest_description:ntext',
            // 'quest_min_people',
            // 'quest_max_people',
            // 'quest_price',
            // 'quest_time:datetime',
            // 'quest_difficulty',
            // 'quest_rating',
            // 'quest_city_id',
            // 'quest_status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
