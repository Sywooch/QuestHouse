<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "quest_owners".
 *
 * @property integer $id
 * @property string $owner_name
 * @property string $owner_address
 * @property string $owner_mail
 * @property string $owner_phone
 * @property integer $created_at
 * @property integer $updated_at
 */
class QuestOwners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quest_owners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_name', 'owner_address', 'owner_mail', 'owner_phone', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['owner_name', 'owner_address', 'owner_mail', 'owner_phone'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_name' => 'Owner Name',
            'owner_address' => 'Owner Address',
            'owner_mail' => 'Owner Mail',
            'owner_phone' => 'Owner Phone',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
