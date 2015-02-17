<?php

use yii\db\Schema;
use yii\db\Migration;

class m150217_211908_menu extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%menu}}', [
            'id' => Schema::TYPE_PK,
            'menu_title' => Schema::TYPE_STRING . ' NOT NULL',
            'menu_link' => Schema::TYPE_STRING . ' NOT NULL',

            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        /*$times = ["16:35","16:33","16:34"];

        for ($i=0;$i<count($times);$i++){
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
        echo "m150217_211908_menu cannot be reverted.\n";

        return false;
    }
}
