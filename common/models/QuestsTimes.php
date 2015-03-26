<?php

namespace common\models;

use Faker\Provider\cs_CZ\DateTime;
use Yii;

/**
 * This is the model class for table "quests_times".
 *
 * @property integer $id
 * @property string $time_value
 * @property string $price
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

    public function getTimeOneLineForQuest($param,$tableDate)
    {
        date_default_timezone_set('Europe/Kiev');
        if (!$tableDate) $tableDate = date("Y-m-d", time());
        else $tableDate = date("Y-m-d", strtotime($tableDate));

        if ($param == 'all'){
            $questTimeModel = $this->findBySql("SELECT quests.quest_en_name as qn,tr.id,qt.time_value,qt.price FROM quests
            join quests_times as qt on qt.quest_id = quests.id
            left join time_reserved as tr on tr.time_value = qt.time_value and qt.quest_id = tr.quest_id
            and date(tr.date) = date('$tableDate')
            where qt.quest_id = quests.id
            order by quests.id,qt.time_value")->asArray()->all();
            $arr = array();

            foreach($questTimeModel as $key => $item)
            {
                $questTime = explode('.',$item['time_value']);
                $date1 = date('Y-m-d H:i:s');
                $date2 = date_create($tableDate);
                date_time_set($date2,$questTime[0],$questTime[1]);
                $date1 = strtotime($date1);

                if ( $date1>strtotime($date2->format('Y-m-d H:i:s'))) $item['active']='0';
                else $item['active']='1';
                $arr[$item['qn']][$key] = $item;
            }
            return $arr;
        }
    }

    public function getTimeLineForQuest($questId)
    {
        date_default_timezone_set('Europe/Kiev');
        $arr = array();
        $questTimeModel = $this->findBySql("SELECT CAST((SYSDATE()+INTERVAL (H+T+U) DAY) AS date) d,qt.price,qt.time_value,tr.id,tr.date as TD,date,qe.quest_en_name
        FROM ( SELECT 0 H
            UNION ALL SELECT 100 UNION ALL SELECT 200 UNION ALL SELECT 300
          ) H CROSS JOIN ( SELECT 0 T
            UNION ALL SELECT  10 UNION ALL SELECT  20 UNION ALL SELECT  30
            UNION ALL SELECT  40 UNION ALL SELECT  50 UNION ALL SELECT  60
            UNION ALL SELECT  70 UNION ALL SELECT  80 UNION ALL SELECT  90
          ) T CROSS JOIN ( SELECT 0 U
            UNION ALL SELECT   1 UNION ALL SELECT   2 UNION ALL SELECT   3
            UNION ALL SELECT   4 UNION ALL SELECT   5 UNION ALL SELECT   6
            UNION ALL SELECT   7 UNION ALL SELECT   8 UNION ALL SELECT   9
          ) U
        join quests_times as qt
        join quests as qe
        left join time_reserved as tr on tr.time_value = qt.time_value and tr.date = CAST((SYSDATE()+INTERVAL (H+T+U) DAY) AS date)
        WHERE
          (SYSDATE()+INTERVAL (H+T+U) DAY) <= (SYSDATE()+INTERVAL 6 DAY )
          and qe.id = '$questId' order by qt.time_value, d")->asArray()->all();

        foreach($questTimeModel as $key => $item)
        {
            $questTime = explode('.',$item['time_value']);
            $date1 = date('Y-m-d H:i:s');
            $date2 = date_create($item['d']);
            date_time_set($date2,$questTime[0],$questTime[1]);
            $date1 = strtotime($date1);

            if ( $date1>strtotime($date2->format('Y-m-d H:i:s'))) $item['active']='0';
            else $item['active']='1';
            $arr[$item['d']][$key] = $item;
        }
        return $arr;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time_value','price','quest_id', 'created_at', 'updated_at'], 'required'],
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
            'price' => 'Price',
            'quest_id' => 'Quest Id',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
