<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "exiting_packages".
 *
 * @property integer $id
 * @property string $image
 * @property string $alt_tag
 * @property string $packages
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class ExitingPackages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exiting_packages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alt_tag', 'packages'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['image', 'alt_tag'], 'string', 'max' => 100],
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
            'image' => 'Image',
            'alt_tag' => 'Alt Tag',
            'packages' => 'Packages',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
