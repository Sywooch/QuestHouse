<?php

use yii\db\Schema;
use yii\db\Migration;

class m150315_112946_quests extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%quests}}', [
            'id' => Schema::TYPE_PK,
            'quest_name' => Schema::TYPE_STRING . '(32) NOT NULL',
            'quest_en_name' => Schema::TYPE_STRING . '(32) NOT NULL',
            'quest_creator' => Schema::TYPE_STRING . '(32) NOT NULL',
            'quest_owner_link' => Schema::TYPE_STRING . '(255) NOT NULL',
            'quest_description' => Schema::TYPE_TEXT . ' NOT NULL',
            'quest_picture' => Schema::TYPE_STRING . '(255) NOT NULL',
            'quest_min_people' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quest_max_people' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quest_min_price' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quest_max_price' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quest_time' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quest_difficulty' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quest_rating' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quest_city_id' => Schema::TYPE_INTEGER . ' NOT NULL',


            'quest_status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%quests}}');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
