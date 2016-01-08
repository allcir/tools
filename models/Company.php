<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_company".
 *
 * @property string $userid
 * @property string $username
 * @property integer $groupid
 * @property string $company
 * @property integer $level
 * @property integer $validated
 * @property string $validator
 * @property string $validtime
 * @property integer $vip
 * @property integer $vipt
 * @property integer $vipr
 * @property string $type
 * @property string $catid
 * @property string $catids
 * @property string $areaid
 * @property string $mode
 * @property double $capital
 * @property string $regunit
 * @property string $size
 * @property string $regyear
 * @property string $regcity
 * @property string $sell
 * @property string $buy
 * @property string $business
 * @property string $telephone
 * @property string $fax
 * @property string $mail
 * @property string $address
 * @property string $postcode
 * @property string $homepage
 * @property string $fromtime
 * @property string $totime
 * @property string $styletime
 * @property string $thumb
 * @property string $thumb1
 * @property string $introduce
 * @property string $hits
 * @property string $keyword
 * @property string $template
 * @property string $skin
 * @property string $domain
 * @property string $icp
 * @property string $linkurl
 * @property string $zs_province
 * @property string $zs_city
 * @property string $zs_imgurl1
 * @property string $zs_imgurl2
 * @property string $zs_certificate1
 * @property string $zs_certificate2
 * @property integer $zs_isregular
 * @property string $zs_memo
 * @property string $zs_sitename
 * @property string $zs_vipstart
 * @property string $zs_vipend
 * @property string $zs_ask
 * @property string $zs_answer
 * @property string $zs_logo
 * @property string $zs_linkman
 * @property string $zs_pho
 * @property integer $zs_logincount
 * @property integer $zs_vip
 * @property string $zs_adinfo
 * @property string $serviceinfo
 * @property string $zs_loginarea
 * @property integer $zs_state
 * @property integer $company_delete
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['groupid', 'level', 'validated', 'validtime', 'vip', 'vipt', 'vipr', 'areaid', 'fromtime', 'totime', 'styletime', 'hits', 'zs_isregular', 'zs_logincount', 'zs_vip', 'zs_state', 'company_delete'], 'integer'],
            [['capital'], 'number'],
            [['company_delete'], 'required'],
            [['username', 'regcity', 'template', 'skin', 'zs_province', 'zs_city', 'zs_vipstart', 'zs_vipend', 'zs_ask', 'zs_answer'], 'string', 'max' => 30],
            [['company', 'validator', 'type', 'catid', 'catids', 'mode', 'size', 'domain', 'icp', 'zs_imgurl1', 'zs_imgurl2', 'zs_certificate1', 'zs_certificate2'], 'string', 'max' => 100],
            [['regunit', 'zs_pho'], 'string', 'max' => 15],
            [['regyear'], 'string', 'max' => 4],
            [['sell', 'buy', 'business', 'telephone', 'address', 'homepage', 'thumb', 'thumb1', 'introduce', 'keyword', 'linkurl', 'zs_memo'], 'string', 'max' => 255],
            [['fax', 'mail', 'zs_linkman', 'zs_adinfo', 'serviceinfo', 'zs_loginarea'], 'string', 'max' => 50],
            [['postcode', 'zs_sitename'], 'string', 'max' => 20],
            [['zs_logo'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'username' => 'Username',
            'groupid' => 'Groupid',
            'company' => 'Company',
            'level' => 'Level',
            'validated' => 'Validated',
            'validator' => 'Validator',
            'validtime' => 'Validtime',
            'vip' => 'Vip',
            'vipt' => 'Vipt',
            'vipr' => 'Vipr',
            'type' => 'Type',
            'catid' => 'Catid',
            'catids' => 'Catids',
            'areaid' => 'Areaid',
            'mode' => 'Mode',
            'capital' => 'Capital',
            'regunit' => 'Regunit',
            'size' => 'Size',
            'regyear' => 'Regyear',
            'regcity' => 'Regcity',
            'sell' => 'Sell',
            'buy' => 'Buy',
            'business' => 'Business',
            'telephone' => 'Telephone',
            'fax' => 'Fax',
            'mail' => 'Mail',
            'address' => 'Address',
            'postcode' => 'Postcode',
            'homepage' => 'Homepage',
            'fromtime' => 'Fromtime',
            'totime' => 'Totime',
            'styletime' => 'Styletime',
            'thumb' => 'Thumb',
            'thumb1' => 'Thumb1',
            'introduce' => 'Introduce',
            'hits' => 'Hits',
            'keyword' => 'Keyword',
            'template' => 'Template',
            'skin' => 'Skin',
            'domain' => 'Domain',
            'icp' => 'Icp',
            'linkurl' => 'Linkurl',
            'zs_province' => 'Zs Province',
            'zs_city' => 'Zs City',
            'zs_imgurl1' => 'Zs Imgurl1',
            'zs_imgurl2' => 'Zs Imgurl2',
            'zs_certificate1' => 'Zs Certificate1',
            'zs_certificate2' => 'Zs Certificate2',
            'zs_isregular' => 'Zs Isregular',
            'zs_memo' => 'Zs Memo',
            'zs_sitename' => 'Zs Sitename',
            'zs_vipstart' => 'Zs Vipstart',
            'zs_vipend' => 'Zs Vipend',
            'zs_ask' => 'Zs Ask',
            'zs_answer' => 'Zs Answer',
            'zs_logo' => 'Zs Logo',
            'zs_linkman' => 'Zs Linkman',
            'zs_pho' => 'Zs Pho',
            'zs_logincount' => 'Zs Logincount',
            'zs_vip' => 'Zs Vip',
            'zs_adinfo' => 'Zs Adinfo',
            'serviceinfo' => 'Serviceinfo',
            'zs_loginarea' => 'Zs Loginarea',
            'zs_state' => 'Zs State',
            'company_delete' => 'Company Delete',
        ];
    }
}
