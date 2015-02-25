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
            'is_active' => Schema::TYPE_BOOLEAN. ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        //$menus = ["Main Page","Quests","Our Games","Contact","About Us"];
        //$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43")
        $menus = array(
            "Main Page"=>"site/index",
            "Quests"=>"site/quests",
            "Our Games"=>"site/games",
            "Contact"=>"site/contact",
            "About Us"=>"site/about"
        );

        foreach($menus as $x => $x_value) {
//            echo "Key=" . $x . ", Value=" . $x_value;
//            echo "<br>";

            $this->insert('{{%menu}}',
                [
                    'menu_title' => $x,
                    'menu_link' => "$x_value",
                    'is_active' => true,
                    'created_at' => time(),
                    'updated_at' => time()
                ]
            );
        }

        /*for ($i=0;$i<count($times);$i++){
            $this->insert('{{%quests_times}}',
                [
                    'time_value' => $times[$i],
                    'menu_link' => '',
                    'created_at' => time(),
                    'updated_at' => time()
                ]
            );
        }*/

    }

    public function down()
    {
        //echo "m150217_211908_menu cannot be reverted.\n";
        $this->dropTable('{{%menu}}');
        //return false;
    }
}
