<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "social_media_links".
 *
 * @property int $id
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $linkedin_link
 * @property string $youtube_link
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class SocialMediaLinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social_media_links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['facebook_link', 'twitter_link', 'linkedin_link', 'youtube_link'], 'required'],
            [['facebook_link', 'twitter_link', 'linkedin_link', 'youtube_link'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'facebook_link' => 'Facebook Link',
            'twitter_link' => 'Twitter Link',
            'linkedin_link' => 'Linkedin Link',
            'youtube_link' => 'Youtube Link',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
