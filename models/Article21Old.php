<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_article_21_old".
 *
 * @property integer $ID
 * @property string $Type
 * @property string $Information
 * @property string $Title
 * @property string $Source
 * @property string $Tag
 * @property integer $Hot
 * @property string $PostDTime
 * @property string $SiteName
 * @property string $ImageUrl
 * @property integer $levels
 * @property integer $Comid
 * @property integer $IsCheck
 */
class Article21Old extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_article_21_old';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'Hot', 'levels', 'Comid', 'IsCheck'], 'integer'],
            [['Information'], 'string'],
            [['PostDTime'], 'safe'],
            [['Type', 'ImageUrl'], 'string', 'max' => 50],
            [['Title', 'Source', 'Tag'], 'string', 'max' => 250],
            [['SiteName'], 'string', 'max' => 20],
            [['ID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Type' => 'Type',
            'Information' => 'Information',
            'Title' => 'Title',
            'Source' => 'Source',
            'Tag' => 'Tag',
            'Hot' => 'Hot',
            'PostDTime' => 'Post Dtime',
            'SiteName' => 'Site Name',
            'ImageUrl' => 'Image Url',
            'levels' => 'Levels',
            'Comid' => 'Comid',
            'IsCheck' => 'Is Check',
        ];
    }
}
