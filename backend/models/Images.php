<?php
/**
 * Created by PhpStorm.
 * User: akel
 * Date: 3/26/15
 * Time: 4:41 PM
 */
namespace backend\models;
use Yii;
use yii\widgets\ActiveForm;

class Images extends ActiveForm
{
    public $image;

    public function rules()
    {
        return array(
            array('image', 'file'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'image'=>'Upload File',
        );
    }

}