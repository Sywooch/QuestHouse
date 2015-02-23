<?php

use yii\db\Schema;
use yii\db\Migration;

class m150216_172355_quests extends Migration
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
            'quest_en_name' => Schema::TYPE_STRING . '(32) NOT NULL',
            'quest_name' => Schema::TYPE_STRING . '(32) NOT NULL',
            'quest_description' => Schema::TYPE_TEXT . ' NOT NULL',
            'quest_price' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quest_max_players' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quest_logo' => Schema::TYPE_STRING . ' NOT NULL',

            /*'username' => Schema::TYPE_STRING . ' NOT NULL',
            'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL',
            'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
            'password_reset_token' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING . ' NOT NULL',

            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',*/
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

    }

    public function down()
    {
        echo "m150216_172355_quests cannot be reverted.\n";
        $this->dropTable('quests');
        return false;
    }
}
