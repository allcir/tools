<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_buy_6_old".
 *
 * @property integer $ID
 * @property integer $DrugID
 * @property string $FromUserName
 * @property string $ToUserName
 * @property string $Class_LV1
 * @property string $Class_LV2
 * @property string $Class_LV3
 * @property string $Status
 * @property string $Company
 * @property string $IntentDrug
 * @property string $DurgHistory
 * @property string $Province
 * @property string $City
 * @property string $ADDR
 * @property string $PostCode
 * @property string $LinkMan
 * @property string $Tel
 * @property string $Pho
 * @property string $Fax
 * @property string $QQ
 * @property string $EMail
 * @property string $WebSite
 * @property string $Intro
 * @property string $DTime
 * @property string $PostDTime
 * @property string $Checked
 * @property integer $JiaM
 * @property string $JiaMTime
 * @property integer $State
 * @property integer $RefreshNum
 * @property string $SiteName
 * @property string $Letter
 * @property integer $Vip
 * @property string $Channel
 */
class Buy6Old extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_buy_6_old';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'DrugID', 'JiaM', 'State', 'RefreshNum', 'Vip'], 'integer'],
            [['Company', 'Intro'], 'string'],
            [['DTime', 'PostDTime', 'JiaMTime'], 'safe'],
            [['FromUserName', 'ToUserName', 'Class_LV1', 'Class_LV2', 'Class_LV3', 'Status', 'Province', 'City', 'LinkMan', 'Tel', 'Pho', 'Fax', 'QQ', 'SiteName', 'Letter', 'Channel'], 'string', 'max' => 50],
            [['IntentDrug', 'EMail'], 'string', 'max' => 100],
            [['DurgHistory', 'ADDR', 'WebSite'], 'string', 'max' => 250],
            [['PostCode'], 'string', 'max' => 6],
            [['Checked'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'DrugID' => 'Drug ID',
            'FromUserName' => 'From User Name',
            'ToUserName' => 'To User Name',
            'Class_LV1' => 'Class  Lv1',
            'Class_LV2' => 'Class  Lv2',
            'Class_LV3' => 'Class  Lv3',
            'Status' => 'Status',
            'Company' => 'Company',
            'IntentDrug' => 'Intent Drug',
            'DurgHistory' => 'Durg History',
            'Province' => 'Province',
            'City' => 'City',
            'ADDR' => 'Addr',
            'PostCode' => 'Post Code',
            'LinkMan' => 'Link Man',
            'Tel' => 'Tel',
            'Pho' => 'Pho',
            'Fax' => 'Fax',
            'QQ' => 'Qq',
            'EMail' => 'Email',
            'WebSite' => 'Web Site',
            'Intro' => 'Intro',
            'DTime' => 'Dtime',
            'PostDTime' => 'Post Dtime',
            'Checked' => 'Checked',
            'JiaM' => 'Jia M',
            'JiaMTime' => 'Jia Mtime',
            'State' => 'State',
            'RefreshNum' => 'Refresh Num',
            'SiteName' => 'Site Name',
            'Letter' => 'Letter',
            'Vip' => 'Vip',
            'Channel' => 'Channel',
        ];
    }
}
