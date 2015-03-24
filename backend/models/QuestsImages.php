<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "quests_images".
 *
 * @property integer $id
 * @property string $quests_image_path
 * @property integer $quests_image_quest_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class QuestsImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quests_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quests_image_path', 'quests_image_quest_id', 'created_at', 'updated_at'], 'required'],
            [['quests_image_quest_id', 'created_at', 'updated_at'], 'integer'],
            [['quests_image_path'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quests_image_path' => 'Quests Image Path',
            'quests_image_quest_id' => 'Quests Image Quest ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
