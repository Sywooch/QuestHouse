<?php

use yii\db\Schema;
use yii\db\Migration;

class m150322_163405_quests_images extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%quests_images}}', [
            'id' => Schema::TYPE_PK,
            'quests_image_path' => Schema::TYPE_STRING . '(255) NOT NULL',
            'quests_image_quest_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%quests_images}}');
    }

}