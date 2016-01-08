<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_info_22_old".
 *
 * @property integer $ID
 * @property string $UserName
 * @property string $Name
 * @property integer $Uid
 * @property string $Company
 * @property integer $VIP
 * @property integer $Bid
 * @property string $BidArea
 * @property string $Area
 * @property string $ApprovalNO
 * @property string $ImgUrl
 * @property string $ImgUrl2
 * @property string $ImgUrl3
 * @property string $ImgUrl4
 * @property string $Type
 * @property string $Medicare
 * @property string $Intro
 * @property string $Memo
 * @property string $Tags
 * @property string $Class_LV1
 * @property string $Class_LV2
 * @property string $Class_LV3
 * @property string $CustomClass
 * @property string $DosageForm
 * @property string $Standard
 * @property string $Direction
 * @property string $Advantage
 * @property string $DTime
 * @property string $PostDTime
 * @property integer $HitCount
 * @property integer $State
 * @property string $Require
 * @property string $Support
 * @property string $Dosage
 * @property string $Effect
 * @property string $Explain
 * @property integer $RefreshNum
 * @property string $SiteName
 * @property integer $ReplyCount
 * @property string $Html
 * @property string $Letter
 * @property integer $IsImg
 * @property integer $IsRegular
 * @property integer $OrderNO
 * @property string $UpKey
 * @property integer $UpOrderNO
 * @property string $License
 * @property string $Norms
 * @property string $Exhibition
 */
class Info22Old extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_info_22_old';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Uid', 'VIP', 'Bid', 'HitCount', 'State', 'RefreshNum', 'ReplyCount', 'IsImg', 'IsRegular', 'OrderNO', 'UpOrderNO'], 'integer'],
            [['Intro', 'Memo', 'Require', 'Support', 'Effect', 'Explain'], 'string'],
            [['DTime', 'PostDTime'], 'safe'],
            [['UserName', 'Name', 'Company', 'ApprovalNO', 'Class_LV1', 'Class_LV2', 'Class_LV3', 'CustomClass', 'DosageForm', 'Standard', 'SiteName', 'Html', 'Letter', 'UpKey', 'License'], 'string', 'max' => 50],
            [['BidArea', 'Area', 'ImgUrl', 'ImgUrl2', 'ImgUrl3', 'ImgUrl4', 'Type', 'Medicare', 'Tags', 'Direction', 'Advantage', 'Dosage'], 'string', 'max' => 250],
            [['Norms', 'Exhibition'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'UserName' => 'User Name',
            'Name' => 'Name',
            'Uid' => 'Uid',
            'Company' => 'Company',
            'VIP' => 'Vip',
            'Bid' => 'Bid',
            'BidArea' => 'Bid Area',
            'Area' => 'Area',
            'ApprovalNO' => 'Approval No',
            'ImgUrl' => 'Img Url',
            'ImgUrl2' => 'Img Url2',
            'ImgUrl3' => 'Img Url3',
            'ImgUrl4' => 'Img Url4',
            'Type' => 'Type',
            'Medicare' => 'Medicare',
            'Intro' => 'Intro',
            'Memo' => 'Memo',
            'Tags' => 'Tags',
            'Class_LV1' => 'Class  Lv1',
            'Class_LV2' => 'Class  Lv2',
            'Class_LV3' => 'Class  Lv3',
            'CustomClass' => 'Custom Class',
            'DosageForm' => 'Dosage Form',
            'Standard' => 'Standard',
            'Direction' => 'Direction',
            'Advantage' => 'Advantage',
            'DTime' => 'Dtime',
            'PostDTime' => 'Post Dtime',
            'HitCount' => 'Hit Count',
            'State' => 'State',
            'Require' => 'Require',
            'Support' => 'Support',
            'Dosage' => 'Dosage',
            'Effect' => 'Effect',
            'Explain' => 'Explain',
            'RefreshNum' => 'Refresh Num',
            'SiteName' => 'Site Name',
            'ReplyCount' => 'Reply Count',
            'Html' => 'Html',
            'Letter' => 'Letter',
            'IsImg' => 'Is Img',
            'IsRegular' => 'Is Regular',
            'OrderNO' => 'Order No',
            'UpKey' => 'Up Key',
            'UpOrderNO' => 'Up Order No',
            'License' => 'License',
            'Norms' => 'Norms',
            'Exhibition' => 'Exhibition',
        ];
    }
}
