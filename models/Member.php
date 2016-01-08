<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_member".
 *
 * @property string $userid
 * @property string $username
 * @property string $passport
 * @property string $company
 * @property string $password
 * @property string $payword
 * @property string $email
 * @property integer $message
 * @property integer $chat
 * @property integer $sound
 * @property integer $online
 * @property integer $avatar
 * @property integer $gender
 * @property string $truename
 * @property string $mobile
 * @property string $msn
 * @property string $qq
 * @property string $ali
 * @property string $skype
 * @property string $department
 * @property string $career
 * @property integer $admin
 * @property string $role
 * @property string $aid
 * @property integer $groupid
 * @property integer $regid
 * @property string $areaid
 * @property integer $sms
 * @property integer $credit
 * @property string $money
 * @property string $locking
 * @property string $bank
 * @property string $account
 * @property string $edittime
 * @property string $regip
 * @property double $regtime
 * @property string $loginip
 * @property string $logintime
 * @property string $logintimes
 * @property string $black
 * @property integer $send
 * @property string $auth
 * @property string $authvalue
 * @property string $authtime
 * @property integer $vemail
 * @property integer $vmobile
 * @property integer $vtruename
 * @property integer $vbank
 * @property integer $vcompany
 * @property integer $vtrade
 * @property string $trade
 * @property string $support
 * @property string $inviter
 * @property string $zs_ask
 * @property string $zs_answer
 * @property string $zs_class
 * @property string $zs_type
 * @property string $zs_province
 * @property string $zs_city
 * @property string $zs_intro
 * @property integer $zs_vip
 * @property string $zs_adinfo
 * @property string $zs_postcode
 * @property string $zs_logo
 * @property string $zs_regdate
 * @property string $zs_vipstart
 * @property string $zs_vipend
 * @property string $zs_imgurl1
 * @property string $zs_imgurl2
 * @property string $zs_certificate1
 * @property string $zs_certificate2
 * @property integer $zs_isregular
 * @property integer $zs_logincount
 * @property string $zs_lastlogin
 * @property string $zs_regtime
 * @property string $zs_memo
 * @property string $zs_serviceinfo
 * @property string $zs_tplno
 * @property string $zs_notice
 * @property integer $zs_state
 * @property string $zs_sitename
 * @property string $zs_loginip
 * @property string $zs_loginarea
 * @property integer $zs_messcount
 * @property string $zs_code
 * @property string $zs_managerment
 * @property string $zs_guimo
 * @property string $zs_capital
 * @property string $zs_scope
 * @property string $zs_comtype
 * @property string $zs_buiness
 * @property string $zs_regyear
 * @property string $zs_yldemail
 * @property string $zs_yldpassword
 * @property string $zs_truepassword
 * @property string $zs_md5password
 * @property integer $is_zs
 * @property integer $is_delete
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'chat', 'sound', 'online', 'avatar', 'gender', 'admin', 'aid', 'groupid', 'regid', 'areaid', 'sms', 'credit', 'edittime', 'logintime', 'logintimes', 'send', 'authtime', 'vemail', 'vmobile', 'vtruename', 'vbank', 'vcompany', 'vtrade', 'zs_vip', 'zs_isregular', 'zs_logincount', 'zs_state', 'zs_messcount', 'is_zs', 'is_delete'], 'integer'],
            [['money', 'locking', 'regtime'], 'number'],
            [['username', 'passport', 'email', 'mobile', 'msn', 'regip', 'loginip', 'trade', 'support', 'zs_class', 'zs_province', 'zs_city', 'zs_sitename', 'zs_loginip', 'zs_loginarea', 'zs_managerment', 'zs_capital', 'zs_scope', 'zs_comtype', 'zs_buiness', 'zs_yldemail', 'zs_yldpassword', 'zs_truepassword', 'zs_md5password'], 'string', 'max' => 50],
            [['company', 'authvalue', 'zs_imgurl1', 'zs_imgurl2'], 'string', 'max' => 100],
            [['password', 'payword', 'auth'], 'string', 'max' => 32],
            [['truename', 'qq', 'zs_tplno', 'zs_notice', 'zs_code', 'zs_regyear'], 'string', 'max' => 20],
            [['ali', 'skype', 'department', 'career', 'bank', 'account', 'inviter', 'zs_postcode', 'zs_logo', 'zs_regdate', 'zs_vipstart', 'zs_vipend', 'zs_certificate1', 'zs_certificate2', 'zs_lastlogin', 'zs_regtime'], 'string', 'max' => 30],
            [['role', 'black', 'zs_ask', 'zs_answer', 'zs_intro', 'zs_adinfo', 'zs_memo', 'zs_serviceinfo', 'zs_guimo'], 'string', 'max' => 255],
            [['zs_type'], 'string', 'max' => 10],
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
            'passport' => 'Passport',
            'company' => 'Company',
            'password' => 'Password',
            'payword' => 'Payword',
            'email' => 'Email',
            'message' => 'Message',
            'chat' => 'Chat',
            'sound' => 'Sound',
            'online' => 'Online',
            'avatar' => 'Avatar',
            'gender' => 'Gender',
            'truename' => 'Truename',
            'mobile' => 'Mobile',
            'msn' => 'Msn',
            'qq' => 'Qq',
            'ali' => 'Ali',
            'skype' => 'Skype',
            'department' => 'Department',
            'career' => 'Career',
            'admin' => 'Admin',
            'role' => 'Role',
            'aid' => 'Aid',
            'groupid' => 'Groupid',
            'regid' => 'Regid',
            'areaid' => 'Areaid',
            'sms' => 'Sms',
            'credit' => 'Credit',
            'money' => 'Money',
            'locking' => 'Locking',
            'bank' => 'Bank',
            'account' => 'Account',
            'edittime' => 'Edittime',
            'regip' => 'Regip',
            'regtime' => 'Regtime',
            'loginip' => 'Loginip',
            'logintime' => 'Logintime',
            'logintimes' => 'Logintimes',
            'black' => 'Black',
            'send' => 'Send',
            'auth' => 'Auth',
            'authvalue' => 'Authvalue',
            'authtime' => 'Authtime',
            'vemail' => 'Vemail',
            'vmobile' => 'Vmobile',
            'vtruename' => 'Vtruename',
            'vbank' => 'Vbank',
            'vcompany' => 'Vcompany',
            'vtrade' => 'Vtrade',
            'trade' => 'Trade',
            'support' => 'Support',
            'inviter' => 'Inviter',
            'zs_ask' => 'Zs Ask',
            'zs_answer' => 'Zs Answer',
            'zs_class' => 'Zs Class',
            'zs_type' => 'Zs Type',
            'zs_province' => 'Zs Province',
            'zs_city' => 'Zs City',
            'zs_intro' => 'Zs Intro',
            'zs_vip' => 'Zs Vip',
            'zs_adinfo' => 'Zs Adinfo',
            'zs_postcode' => 'Zs Postcode',
            'zs_logo' => 'Zs Logo',
            'zs_regdate' => 'Zs Regdate',
            'zs_vipstart' => 'Zs Vipstart',
            'zs_vipend' => 'Zs Vipend',
            'zs_imgurl1' => 'Zs Imgurl1',
            'zs_imgurl2' => 'Zs Imgurl2',
            'zs_certificate1' => 'Zs Certificate1',
            'zs_certificate2' => 'Zs Certificate2',
            'zs_isregular' => 'Zs Isregular',
            'zs_logincount' => 'Zs Logincount',
            'zs_lastlogin' => 'Zs Lastlogin',
            'zs_regtime' => 'Zs Regtime',
            'zs_memo' => 'Zs Memo',
            'zs_serviceinfo' => 'Zs Serviceinfo',
            'zs_tplno' => 'Zs Tplno',
            'zs_notice' => 'Zs Notice',
            'zs_state' => 'Zs State',
            'zs_sitename' => 'Zs Sitename',
            'zs_loginip' => 'Zs Loginip',
            'zs_loginarea' => 'Zs Loginarea',
            'zs_messcount' => 'Zs Messcount',
            'zs_code' => 'Zs Code',
            'zs_managerment' => 'Zs Managerment',
            'zs_guimo' => 'Zs Guimo',
            'zs_capital' => 'Zs Capital',
            'zs_scope' => 'Zs Scope',
            'zs_comtype' => 'Zs Comtype',
            'zs_buiness' => 'Zs Buiness',
            'zs_regyear' => 'Zs Regyear',
            'zs_yldemail' => 'Zs Yldemail',
            'zs_yldpassword' => 'Zs Yldpassword',
            'zs_truepassword' => 'Zs Truepassword',
            'zs_md5password' => 'Zs Md5password',
            'is_zs' => 'Is Zs',
            'is_delete' => 'Is Delete',
        ];
    }
}
