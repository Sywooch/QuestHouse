<?php

use yii\db\Schema;
use yii\db\Migration;

class m150315_184911_cities extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cities}}', [
            'id' => Schema::TYPE_PK,
            'city_name' => Schema::TYPE_STRING . '(255) NOT NULL',

            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $cities = array('Киев','Одесса');

        for ($i=0;$i<count($cities);$i++){

            $this->insert('{{%cities}}',
                [
                    'city_name' => $cities[$i],
                    'created_at' => time(),
                    'updated_at' => time()
                ]
            );

        }
    }

    public function down()
    {
        $this->dropTable('{{%cities}}');
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
