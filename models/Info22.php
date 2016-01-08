<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_info_22".
 *
 * @property string $itemid
 * @property string $catid
 * @property integer $level
 * @property string $title
 * @property string $style
 * @property double $fee
 * @property string $keyword
 * @property string $pptword
 * @property string $hits
 * @property string $thumb
 * @property string $thumb1
 * @property string $thumb2
 * @property string $thumb3
 * @property string $username
 * @property integer $groupid
 * @property string $addtime
 * @property string $adddate
 * @property string $totime
 * @property string $areaid
 * @property string $company
 * @property integer $vip
 * @property integer $validated
 * @property string $truename
 * @property string $telephone
 * @property string $fax
 * @property string $mobile
 * @property string $address
 * @property string $email
 * @property string $qq
 * @property string $ali
 * @property string $skype
 * @property string $msn
 * @property string $introduce
 * @property string $n1
 * @property string $n2
 * @property string $n3
 * @property string $v1
 * @property string $v2
 * @property string $v3
 * @property string $editor
 * @property string $edittime
 * @property string $editdate
 * @property string $ip
 * @property string $template
 * @property integer $status
 * @property integer $listorder
 * @property integer $islink
 * @property string $linkurl
 * @property string $filepath
 * @property string $note
 * @property string $approvalno
 * @property integer $ishc
 * @property integer $zs_uid
 * @property integer $zs_vip
 * @property string $zs_bid
 * @property string $zs_bidarea
 * @property string $zs_area
 * @property string $zs_imgurl
 * @property string $zs_imgurl2
 * @property string $zs_imgurl3
 * @property string $zs_imgurl4
 * @property string $zs_medicare
 * @property string $zs_tags
 * @property string $zs_class_lv1
 * @property string $zs_class_lv2
 * @property string $zs_class_lv3
 * @property string $zs_customclass
 * @property string $zs_advantage
 * @property string $zs_dtime
 * @property string $zs_postdtime
 * @property integer $zs_hitcount
 * @property integer $zs_state
 * @property string $zs_sitename
 * @property integer $zs_replycount
 * @property string $zs_html
 * @property string $zs_letter
 * @property integer $zs_isimg
 * @property string $zs_isregular
 * @property integer $zs_orderno
 * @property string $zs_upkey
 * @property integer $zs_uporderno
 * @property string $zs_license
 * @property string $zs_norms
 * @property string $zs_exhibition
 * @property string $mycatid
 * @property string $iszl
 * @property string $isjk
 * @property string $isjy
 * @property integer $hcid
 * @property integer $bzid
 * @property integer $gnid
 * @property integer $jyid
 * @property string $label
 * @property string $point
 * @property string $patent
 * @property integer $kinds
 * @property string $zszc
 * @property string $dlsyq
 * @property string $source
 * @property string $memo
 * @property string $dosageform
 * @property string $effect
 * @property string $explain
 * @property string $standard
 * @property string $direction
 * @property string $dosage
 * @property string $type
 * @property integer $refreshnum
 * @property integer $refreshtime
 */
class Info22 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_info_22';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catid', 'level', 'hits', 'groupid', 'addtime', 'totime', 'areaid', 'vip', 'validated', 'edittime', 'status', 'listorder', 'islink', 'ishc', 'zs_uid', 'zs_vip', 'zs_hitcount', 'zs_state', 'zs_replycount', 'zs_isimg', 'zs_orderno', 'zs_uporderno', 'mycatid', 'hcid', 'bzid', 'gnid', 'jyid', 'kinds', 'refreshnum', 'refreshtime'], 'integer'],
            [['fee'], 'number'],
            [['adddate', 'editdate','is_zs'], 'safe'],
            [['introduce', 'zszc', 'dlsyq', 'memo', 'effect', 'explain'], 'string'],
        	/*
            [['zszc', 'dlsyq', 'memo', 'dosageform', 'effect', 'explain', 'standard', 'direction', 'dosage', 'type', 'refreshnum', 'refreshtime'], 'required'],
            */
            [['title', 'company', 'n1', 'n2', 'n3', 'v1', 'v2', 'v3'], 'string', 'max' => 100],
            [['style', 'telephone', 'fax', 'mobile', 'email', 'msn', 'ip', 'zs_area', 'zs_medicare', 'zs_tags', 'zs_advantage', 'zs_dtime', 'zs_postdtime', 'zs_html', 'zs_upkey', 'zs_license', 'zs_norms', 'zs_exhibition', 'source'], 'string', 'max' => 50],
            [['keyword', 'pptword', 'thumb', 'thumb1', 'thumb2', 'thumb3', 'address', 'linkurl', 'filepath', 'note', 'zs_class_lv1', 'zs_class_lv2', 'zs_class_lv3', 'zs_customclass', 'label', 'point', 'patent', 'dosageform', 'standard', 'direction', 'dosage', 'type'], 'string', 'max' => 255],
            [['username', 'truename', 'ali', 'skype', 'editor', 'template', 'approvalno'], 'string', 'max' => 30],
            [['qq', 'zs_bidarea'], 'string', 'max' => 20],
            [['zs_bid', 'zs_letter', 'zs_isregular'], 'string', 'max' => 5],
            [['zs_sitename'], 'string', 'max' => 10],
            [['iszl', 'isjk', 'isjy'], 'string', 'max' => 1],
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
            'level' => 'Level',
            'title' => 'Title',
            'style' => 'Style',
            'fee' => 'Fee',
            'keyword' => 'Keyword',
            'pptword' => 'Pptword',
            'hits' => 'Hits',
            'thumb' => 'Thumb',
            'thumb1' => 'Thumb1',
            'thumb2' => 'Thumb2',
            'thumb3' => 'Thumb3',
            'username' => 'Username',
            'groupid' => 'Groupid',
            'addtime' => 'Addtime',
            'adddate' => 'Adddate',
            'totime' => 'Totime',
            'areaid' => 'Areaid',
            'company' => 'Company',
            'vip' => 'Vip',
            'validated' => 'Validated',
            'truename' => 'Truename',
            'telephone' => 'Telephone',
            'fax' => 'Fax',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'email' => 'Email',
            'qq' => 'Qq',
            'ali' => 'Ali',
            'skype' => 'Skype',
            'msn' => 'Msn',
            'introduce' => 'Introduce',
            'n1' => 'N1',
            'n2' => 'N2',
            'n3' => 'N3',
            'v1' => 'V1',
            'v2' => 'V2',
            'v3' => 'V3',
            'editor' => 'Editor',
            'edittime' => 'Edittime',
            'editdate' => 'Editdate',
            'ip' => 'Ip',
            'template' => 'Template',
            'status' => 'Status',
            'listorder' => 'Listorder',
            'islink' => 'Islink',
            'linkurl' => 'Linkurl',
            'filepath' => 'Filepath',
            'note' => 'Note',
            'approvalno' => 'Approvalno',
            'ishc' => 'Ishc',
            'zs_uid' => 'Zs Uid',
            'zs_vip' => 'Zs Vip',
            'zs_bid' => 'Zs Bid',
            'zs_bidarea' => 'Zs Bidarea',
            'zs_area' => 'Zs Area',
            'zs_imgurl' => 'Zs Imgurl',
            'zs_imgurl2' => 'Zs Imgurl2',
            'zs_imgurl3' => 'Zs Imgurl3',
            'zs_imgurl4' => 'Zs Imgurl4',
            'zs_medicare' => 'Zs Medicare',
            'zs_tags' => 'Zs Tags',
            'zs_class_lv1' => 'Zs Class Lv1',
            'zs_class_lv2' => 'Zs Class Lv2',
            'zs_class_lv3' => 'Zs Class Lv3',
            'zs_customclass' => 'Zs Customclass',
            'zs_advantage' => 'Zs Advantage',
            'zs_dtime' => 'Zs Dtime',
            'zs_postdtime' => 'Zs Postdtime',
            'zs_hitcount' => 'Zs Hitcount',
            'zs_state' => 'Zs State',
            'zs_sitename' => 'Zs Sitename',
            'zs_replycount' => 'Zs Replycount',
            'zs_html' => 'Zs Html',
            'zs_letter' => 'Zs Letter',
            'zs_isimg' => 'Zs Isimg',
            'zs_isregular' => 'Zs Isregular',
            'zs_orderno' => 'Zs Orderno',
            'zs_upkey' => 'Zs Upkey',
            'zs_uporderno' => 'Zs Uporderno',
            'zs_license' => 'Zs License',
            'zs_norms' => 'Zs Norms',
            'zs_exhibition' => 'Zs Exhibition',
            'mycatid' => 'Mycatid',
            'iszl' => 'Iszl',
            'isjk' => 'Isjk',
            'isjy' => 'Isjy',
            'hcid' => 'Hcid',
            'bzid' => 'Bzid',
            'gnid' => 'Gnid',
            'jyid' => 'Jyid',
            'label' => 'Label',
            'point' => 'Point',
            'patent' => 'Patent',
            'kinds' => 'Kinds',
            'zszc' => 'Zszc',
            'dlsyq' => 'Dlsyq',
            'source' => 'Source',
            'memo' => 'Memo',
            'dosageform' => 'Dosageform',
            'effect' => 'Effect',
            'explain' => 'Explain',
            'standard' => 'Standard',
            'direction' => 'Direction',
            'dosage' => 'Dosage',
            'type' => 'Type',
            'refreshnum' => 'Refreshnum',
            'refreshtime' => 'Refreshtime',
        	'is_zs' => 'is_zs',
        ];
    }

	public function getData() {
		return $this->hasOne(InfoData22::className(), ['itemid' => 'itemid']);
	}
}
