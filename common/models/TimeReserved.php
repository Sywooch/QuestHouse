<?php

namespace common\models;

use Faker\Provider\DateTime;
use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "time_reserved".
 *
 * @property integer $id
 * @property double $time_value
 * @property string $date
 * @property integer $quest_id
 * @property integer $user_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class TimeReserved extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'time_reserved';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time_value', 'date', 'quest_id', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['time_value'], 'number'],
            [['date'], 'safe'],
            [['quest_id', 'user_id', 'created_at', 'updated_at'], 'integer']
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
            'date' => 'Date',
            'quest_id' => 'Quest ID',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function isTimeReserved($questTime,$questDate,$questId)
    {
        /*var_dump($this->find()->where(['time_value'=>$questTime,'date'=>$questDate,'quest_id'=>$questId])
                            ->asArray()->exists());*/

        return $this->find()->where('time_value='.$questTime)
                            ->andWhere('date='.$questDate)
                            ->andWhere('quest_id='.$questId)
                            ->asArray()->exists();
    }

    public function bookQuest($questTime,$questDate,$questId)
    {
        $timeReserved = new TimeReserved();
        $timeReserved->time_value = $questTime;
        $timeReserved->date = $questDate;
        $timeReserved->quest_id = $questId;
        $timeReserved->user_id = '1';
        $timeReserved->created_at = '12345';
        $timeReserved->updated_at = '12345';
        return ($timeReserved->save());
        //else return "error during booking";
    }
}
