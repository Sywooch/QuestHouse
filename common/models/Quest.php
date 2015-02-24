<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "quests".
 *
 * @property integer $id
 * @property string $quest_en_name
 * @property string $quest_name
 * @property string $quest_description
 * @property integer $quest_price
 * @property integer $quest_max_players
 * @property integer $quest_logo
 * @property integer $created_at
 * @property integer $updated_at
 */
class Quest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quest_en_name', 'quest_name', 'quest_description', 'quest_price', 'quest_max_players', 'quest_logo'/*, 'created_at', 'updated_at'*/], 'required'],
            [['quest_description'], 'string'],
            [['quest_logo'], 'file', 'maxFiles' => 5], // <--- here!
            [['quest_price', 'quest_max_players', 'created_at', 'updated_at'], 'integer'],
            [['quest_en_name', 'quest_name'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quest_en_name' => 'Quest En Name',
            'quest_name' => 'Quest Name',
            'quest_description' => 'Quest Description',
            'quest_price' => 'Quest Price',
            'quest_max_players' => 'Quest Max Players',
            'quest_logo' => 'Quest Logo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function test()
    {
        return "quest model";
    }
}
