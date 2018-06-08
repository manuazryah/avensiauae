<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tour_packages".
 *
 * @property integer $id
 * @property integer $package_type
 * @property string $image
 * @property string $vehicle_name
 * @property string $no_of_days
 * @property string $rate
 * @property integer $passengers
 * @property integer $allowed_km
 * @property string $additional_km_price
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class TourPackages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tour_packages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['package_type', 'allowed_km', 'status', 'CB', 'UB'], 'integer'],
            [['rate', 'additional_km_price'], 'number'],
            [['DOC', 'DOU', 'passengers'], 'safe'],
            [['passengers', 'allowed_km','additional_km_price', 'vehicle_name', 'no_of_days','rate'], 'required'],
            [['image', 'vehicle_name', 'no_of_days'], 'string', 'max' => 100],
            [['image'], 'required', 'on' => 'create'],
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
            'package_type' => 'Package Type',
            'image' => 'Image',
            'vehicle_name' => 'Vehicle Name',
            'no_of_days' => 'No Of Days',
            'rate' => 'Rate',
            'passengers' => 'Passengers',
            'allowed_km' => 'Allowed Km',
            'additional_km_price' => 'Additional Km Price',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
