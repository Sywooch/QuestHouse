<?php

use yii\db\Schema;
use yii\db\Migration;

class m150313_111807_time_reserved extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%time_reserved}}', [
            'id' => Schema::TYPE_PK,
            'time_value' => Schema::TYPE_DECIMAL . '(6.2) NOT NULL',
            'date' => Schema::TYPE_DATE . ' NOT NULL',
            'quest_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        echo "m150313_111807_time_reserved.php cannot be reverted.\n";
        $this->dropTable('time_reserved');
        return false;
    }
}

/*
 * SELECT CAST((SYSDATE()+INTERVAL (H+T+U) DAY) AS date) d,time_reserved.time_value
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
left join time_reserved on date = time_reserved.date
WHERE
  (SYSDATE()+INTERVAL (H+T+U) DAY) <= (SYSDATE()+INTERVAL 1 MONTH)
order by d
 *
 * */


/*
SELECT CAST((SYSDATE()+INTERVAL (H+T+U) DAY) AS date) d,qt.time_value,tr.id,tr.date as TD,date
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
left join time_reserved as tr on tr.time_value = qt.time_value and tr.date = CAST((SYSDATE()+INTERVAL (H+T+U) DAY) AS date)
WHERE
  (SYSDATE()+INTERVAL (H+T+U) DAY) <= (SYSDATE()+INTERVAL 1 MONTH)
order by d
 * */