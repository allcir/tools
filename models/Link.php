<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_link".
 *
 * @property string $itemid
 * @property string $typeid
 * @property string $areaid
 * @property string $title
 * @property string $style
 * @property string $thumb
 * @property string $introduce
 * @property string $username
 * @property string $addtime
 * @property string $editor
 * @property string $edittime
 * @property integer $listorder
 * @property integer $level
 * @property integer $status
 * @property string $linkurl
 * @property string $zs_sitename
 * @property string $zs_type
 * @property integer $zs_nofollow
 * @property string $zs_dtime
 * @property string $zs_url
 * @property integer $nofollow
 */
class Link extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        	
            [['itemid','typeid', 'areaid', 'addtime', 'edittime', 'listorder', 'level', 'status', 'zs_nofollow', 'nofollow'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['style', 'zs_url'], 'string', 'max' => 50],
            [['thumb', 'introduce', 'linkurl'], 'string', 'max' => 255],
            [['username', 'editor', 'zs_dtime'], 'string', 'max' => 30],
            [['zs_sitename', 'zs_type'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'itemid' => 'Itemid',
            'typeid' => 'Typeid',
            'areaid' => 'Areaid',
            'title' => 'Title',
            'style' => 'Style',
            'thumb' => 'Thumb',
            'introduce' => 'Introduce',
            'username' => 'Username',
            'addtime' => 'Addtime',
            'editor' => 'Editor',
            'edittime' => 'Edittime',
            'listorder' => 'Listorder',
            'level' => 'Level',
            'status' => 'Status',
            'linkurl' => 'Linkurl',
            'zs_sitename' => 'Zs Sitename',
            'zs_type' => 'Zs Type',
            'zs_nofollow' => 'Zs Nofollow',
            'zs_dtime' => 'Zs Dtime',
            'zs_url' => 'Zs Url',
            'nofollow' => 'Nofollow',
        ];
    }
}
