<?php

use yii\db\Schema;
use yii\db\Migration;

class m150216_150511_quests_times extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%quests_times}}', [
            'id' => Schema::TYPE_PK,
            'time_value' => Schema::TYPE_FLOAT . ' NOT NULL',
            'quest_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        //$times = ["16:35","16:33","16:34"];

        /*for ($i=0;$i<count($times);$i++){
            $this->insert('{{%quests_times}}',
                [
                    'time_value' => $times[$i],
                    'created_at' => time(),
                    'updated_at' => time()
                ]
            );
        }*/
    }

    public function down()
    {
        echo "m150216_150511_quests_times cannot be reverted.\n";
        $this->dropTable('quests_times');
        return false;
    }

}
