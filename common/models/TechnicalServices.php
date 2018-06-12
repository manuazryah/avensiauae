<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "technical_services".
 *
 * @property int $id
 * @property int $type
 * @property string $main_content
 * @property string $image
 * @property string $sub_title
 * @property string $sub_content
 * @property string $equipment_list
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class TechnicalServices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'technical_services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'status', 'CB', 'UB'], 'integer'],
            [['main_content', 'sub_content', 'equipment_list'], 'string'],
            [['DOC', 'DOU'], 'safe'],
            [['image'], 'string', 'max' => 50],
            [['sub_title'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'main_content' => 'Main Content',
            'image' => 'Image',
            'sub_title' => 'Sub Title',
            'sub_content' => 'Sub Content',
            'equipment_list' => 'Equipment List',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
