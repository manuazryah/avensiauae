<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "boat_package".
 *
 * @property integer $id
 * @property string $title
 * @property string $sub_title
 * @property string $description
 * @property string $note
 * @property string $contact_details
 * @property string $image
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class BoatPackage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'boat_package';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description','contact_details','title', 'sub_title','note'], 'required'],
            [['description', 'contact_details'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['title', 'sub_title', 'image'], 'string', 'max' => 100],
            [['note'], 'string', 'max' => 500],
            [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'description' => 'Description',
            'note' => 'Note',
            'contact_details' => 'Contact Details',
            'image' => 'Image',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
