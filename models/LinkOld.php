<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_link_old".
 *
 * @property integer $ID
 * @property string $Mess
 * @property string $Url
 * @property string $DTime
 * @property integer $Nofollow
 * @property string $Type
 * @property string $SiteName
 * @property integer $IsCheck
 * @property string $UserName
 */
class LinkOld extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_link_old';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Nofollow', 'IsCheck'], 'integer'],
            [['DTime'], 'safe'],
            [['Mess', 'Type', 'SiteName', 'UserName'], 'string', 'max' => 50],
            [['Url'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Mess' => 'Mess',
            'Url' => 'Url',
            'DTime' => 'Dtime',
            'Nofollow' => 'Nofollow',
            'Type' => 'Type',
            'SiteName' => 'Site Name',
            'IsCheck' => 'Is Check',
            'UserName' => 'User Name',
        ];
    }
}
