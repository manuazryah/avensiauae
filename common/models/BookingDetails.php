<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_details".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $street
 * @property string $city
 * @property string $post_code
 * @property string $country
 * @property string $arrive_date
 * @property string $depart_date
 * @property string $comments
 * @property integer $rule
 * @property string $title
 * @property string $type
 * @property string $pilgrimage
 */
class BookingDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['arrive_date', 'depart_date','date'], 'safe'],
            [['comments'], 'string'],
            [['rule'], 'integer'],
            [['first_name', 'last_name', 'email', 'phone', 'street', 'city', 'post_code', 'country', 'title', 'type', 'pilgrimage'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'street' => 'Street',
            'city' => 'City',
            'post_code' => 'Post Code',
            'country' => 'Country',
            'arrive_date' => 'Arrive Date',
            'depart_date' => 'Depart Date',
            'comments' => 'Comments',
            'rule' => 'Rule',
            'title' => 'Title',
            'type' => 'Type',
            'pilgrimage' => 'Pilgrimage',
        ];
    }
}
