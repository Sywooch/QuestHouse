<?php

use yii\db\Schema;
use yii\db\Migration;

class m150217_191953_games extends Migration
{
    public function up()
    {

    }

    public function down()
    {
        echo "m150217_191953_games cannot be reverted.\n";
        $this->dropTable('games');
        return false;
    }
}
