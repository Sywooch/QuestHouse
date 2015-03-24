<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "quests".
 *
 * @property integer $id
 * @property string $quest_name
 * @property string $quest_en_name
 * @property string $quest_creator
 * @property string $quest_owner_link
 * @property string $quest_description
 * @property string $quest_picture
 * @property integer $quest_min_people
 * @property integer $quest_max_people
 * @property integer $quest_min_price
 * @property integer $quest_max_price
 * @property integer $quest_time
 * @property integer $quest_difficulty
 * @property integer $quest_rating
 * @property integer $quest_city_id
 * @property integer $quest_status
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
            [['quest_name', 'quest_en_name','quest_picture' ,'quest_creator', 'quest_owner_link', 'quest_description', 'quest_min_people', 'quest_max_people', 'quest_min_price', 'quest_max_price', 'quest_time', 'quest_difficulty', 'quest_rating', 'quest_city_id', 'created_at', 'updated_at'], 'required'],
            [['quest_description'], 'string'],
            [['quest_min_people', 'quest_max_people', 'quest_min_price', 'quest_max_price', 'quest_time', 'quest_difficulty', 'quest_rating', 'quest_city_id', 'quest_status', 'created_at', 'updated_at'], 'integer'],
            [['quest_name', 'quest_en_name', 'quest_creator'], 'string', 'max' => 32],
            [['quest_owner_link'], 'string', 'max' => 255],
            [['quest_picture'], 'file','maxFiles' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quest_name' => 'Quest Name',
            'quest_en_name' => 'Quest En Name',
            'quest_creator' => 'Quest Creator',
            'quest_owner_link' => 'Quest Owner Link',
            'quest_description' => 'Quest Description',
            'quest_picture' => 'Quest Picture',
            'quest_min_people' => 'Quest Min People',
            'quest_max_people' => 'Quest Max People',
            'quest_min_price' => 'Quest Min Price',
            'quest_max_price' => 'Quest Max Price',
            'quest_time' => 'Quest Time',
            'quest_difficulty' => 'Quest Difficulty',
            'quest_rating' => 'Quest Rating',
            'quest_city_id' => 'Quest City ID',
            'quest_status' => 'Quest Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getQuestIdByName($name)
    {
        $questModel = new Quest();
        return $questModel->find()->where("quest_en_name = '".$name."'")->one()['id'];
    }

    public function getAllQuestImages($id)
    {
        $questModel = new Quest();
        $questModel->find()->where($questModel->id == $id);
        $questEnglishName = $questModel->find()->where('id = '.$id)->one()['quest_en_name'];
        $dir = 'images/quest-images/'.$questEnglishName;
        return glob($dir.'/*.{jpeg,jpg,png}', GLOB_BRACE);
    }
}
