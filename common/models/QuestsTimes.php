<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "quests_times".
 *
 * @property integer $id
 * @property string $time_value
 * @property integer $quest_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class QuestsTimes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quests_times';
    }

    public function getTimeLineForQuest($questId)
    {
        return $this->find()->where('quest_id = '.$questId)->asArray()->all();
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time_value','quest_id', 'created_at', 'updated_at'], 'required'],
            [['time_value'], 'safe'],
            [['created_at', 'updated_at'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time_value' => 'Time Value',
            'quest_id' => 'Quest Id',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
