<?php

use yii\db\Schema;
use yii\db\Migration;

class m150325_182913_quest_owners extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%quest_owners}}', [
            'id' => Schema::TYPE_PK,
            'owner_name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'owner_address' => Schema::TYPE_STRING . '(255) NOT NULL',
            'owner_mail' => Schema::TYPE_STRING . '(255) NOT NULL',
            'owner_phone' => Schema::TYPE_STRING . '(255) NOT NULL',

            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%quest_owners}}');
    }
}
