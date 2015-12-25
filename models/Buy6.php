<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_buy_6".
 *
 * @property string $itemid
 * @property string $catid
 * @property integer $typeid
 * @property string $areaid
 * @property integer $level
 * @property string $title
 * @property string $style
 * @property double $fee
 * @property string $introduce
 * @property string $n1
 * @property string $n2
 * @property string $n3
 * @property string $v1
 * @property string $v2
 * @property string $v3
 * @property string $amount
 * @property string $price
 * @property string $pack
 * @property integer $days
 * @property string $tag
 * @property string $keyword
 * @property string $pptword
 * @property string $hits
 * @property string $thumb
 * @property string $thumb1
 * @property string $thumb2
 * @property string $username
 * @property integer $groupid
 * @property string $company
 * @property integer $vip
 * @property integer $validated
 * @property string $truename
 * @property string $telephone
 * @property string $mobile
 * @property string $address
 * @property string $email
 * @property string $msn
 * @property string $qq
 * @property string $ali
 * @property string $skype
 * @property string $totime
 * @property string $editor
 * @property string $edittime
 * @property string $editdate
 * @property string $addtime
 * @property string $adddate
 * @property string $ip
 * @property string $template
 * @property integer $status
 * @property string $linkurl
 * @property string $filepath
 * @property string $note
 * @property string $zs_tousername
 * @property integer $drugid
 * @property string $zs_class_lv1
 * @property string $zs_class_lv2
 * @property string $zs_class_lV3
 * @property string $zs_company
 * @property string $zs_status
 * @property string $zs_province
 * @property string $zs_city
 * @property string $zs_postcode
 * @property string $zs_linkman
 * @property string $zs_tel
 * @property string $zs_pho
 * @property string $zs_fax
 * @property string $zs_qq
 * @property string $zs_email
 * @property string $zs_website
 * @property string $zs_address
 * @property string $zs_intentdrug
 * @property string $zs_durghistory
 * @property string $zs_dtime
 * @property string $zs_postdtime
 * @property string $zs_checked
 * @property integer $zs_jiam
 * @property string $zs_jiamtime
 * @property integer $zs_state
 * @property integer $zs_refreshnum
 * @property string $zs_sitename
 * @property string $zs_letter
 * @property integer $zs_vip
 * @property string $zs_channel
 * @property integer $_city_id
 * @property integer $_pro_id
 * @property string $ditch
 * @property string $history
 * @property integer $intenttime
 * @property integer $is_zs
 */
class Buy6 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_buy_6';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catid', 'typeid', 'areaid', 'level', 'days', 'hits', 'groupid', 'vip', 'validated', 'totime', 'edittime', 'addtime', 'status', 'drugid', 'zs_jiam', 'zs_state', 'zs_refreshnum', 'zs_vip', '_city_id', '_pro_id', 'intenttime', 'is_zs'], 'integer'],
            [['fee'], 'number'],
            [['editdate', 'adddate','intenttime'], 'safe'],
            [['title', 'introduce', 'keyword', 'pptword', 'thumb', 'thumb1', 'thumb2', 'address', 'linkurl', 'filepath', 'note', 'zs_company', 'zs_address', 'zs_intentdrug', 'history'], 'string', 'max' => 255],
            [['style', 'telephone', 'mobile', 'email', 'msn', 'ip', 'zs_class_lv1', 'zs_class_lv2', 'zs_class_lV3', 'zs_province', 'zs_city', 'zs_postcode', 'zs_tel', 'zs_pho', 'zs_email', 'zs_website', 'zs_dtime', 'zs_postdtime', 'zs_jiamtime', 'zs_sitename', 'zs_channel', 'ditch'], 'string', 'max' => 50],
            [['n1', 'n2', 'n3', 'v1', 'v2', 'v3', 'tag', 'company', 'zs_tousername'], 'string', 'max' => 100],
            [['amount', 'price', 'zs_status', 'zs_checked', 'zs_letter'], 'string', 'max' => 10],
            [['pack', 'qq', 'zs_fax', 'zs_qq'], 'string', 'max' => 20],
            [['username', 'truename', 'ali', 'skype', 'editor', 'template'], 'string', 'max' => 30],
            [['zs_linkman'], 'string', 'max' => 40],
            [['zs_durghistory'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'itemid' => 'Itemid',
            'catid' => 'Catid',
            'typeid' => 'Typeid',
            'areaid' => 'Areaid',
            'level' => 'Level',
            'title' => 'Title',
            'style' => 'Style',
            'fee' => 'Fee',
            'introduce' => 'Introduce',
            'n1' => 'N1',
            'n2' => 'N2',
            'n3' => 'N3',
            'v1' => 'V1',
            'v2' => 'V2',
            'v3' => 'V3',
            'amount' => 'Amount',
            'price' => 'Price',
            'pack' => 'Pack',
            'days' => 'Days',
            'tag' => 'Tag',
            'keyword' => 'Keyword',
            'pptword' => 'Pptword',
            'hits' => 'Hits',
            'thumb' => 'Thumb',
            'thumb1' => 'Thumb1',
            'thumb2' => 'Thumb2',
            'username' => 'Username',
            'groupid' => 'Groupid',
            'company' => 'Company',
            'vip' => 'Vip',
            'validated' => 'Validated',
            'truename' => 'Truename',
            'telephone' => 'Telephone',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'email' => 'Email',
            'msn' => 'Msn',
            'qq' => 'Qq',
            'ali' => 'Ali',
            'skype' => 'Skype',
            'totime' => 'Totime',
            'editor' => 'Editor',
            'edittime' => 'Edittime',
            'editdate' => 'Editdate',
            'addtime' => 'Addtime',
            'adddate' => 'Adddate',
            'ip' => 'Ip',
            'template' => 'Template',
            'status' => 'Status',
            'linkurl' => 'Linkurl',
            'filepath' => 'Filepath',
            'note' => 'Note',
            'zs_tousername' => 'Zs Tousername',
            'drugid' => 'Drugid',
            'zs_class_lv1' => 'Zs Class Lv1',
            'zs_class_lv2' => 'Zs Class Lv2',
            'zs_class_lV3' => 'Zs Class L V3',
            'zs_company' => 'Zs Company',
            'zs_status' => 'Zs Status',
            'zs_province' => 'Zs Province',
            'zs_city' => 'Zs City',
            'zs_postcode' => 'Zs Postcode',
            'zs_linkman' => 'Zs Linkman',
            'zs_tel' => 'Zs Tel',
            'zs_pho' => 'Zs Pho',
            'zs_fax' => 'Zs Fax',
            'zs_qq' => 'Zs Qq',
            'zs_email' => 'Zs Email',
            'zs_website' => 'Zs Website',
            'zs_address' => 'Zs Address',
            'zs_intentdrug' => 'Zs Intentdrug',
            'zs_durghistory' => 'Zs Durghistory',
            'zs_dtime' => 'Zs Dtime',
            'zs_postdtime' => 'Zs Postdtime',
            'zs_checked' => 'Zs Checked',
            'zs_jiam' => 'Zs Jiam',
            'zs_jiamtime' => 'Zs Jiamtime',
            'zs_state' => 'Zs State',
            'zs_refreshnum' => 'Zs Refreshnum',
            'zs_sitename' => 'Zs Sitename',
            'zs_letter' => 'Zs Letter',
            'zs_vip' => 'Zs Vip',
            'zs_channel' => 'Zs Channel',
            '_city_id' => 'City ID',
            '_pro_id' => 'Pro ID',
            'ditch' => 'Ditch',
            'history' => 'History',
            'intenttime' => 'Intenttime',
            'is_zs' => 'Is Zs',
        ];
    }
}
