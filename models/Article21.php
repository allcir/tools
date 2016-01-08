<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_article_21".
 *
 * @property string $itemid
 * @property string $catid
 * @property string $areaid
 * @property integer $level
 * @property string $title
 * @property string $style
 * @property double $fee
 * @property string $subtitle
 * @property string $introduce
 * @property string $tag
 * @property string $keyword
 * @property string $pptword
 * @property string $author
 * @property string $copyfrom
 * @property string $fromurl
 * @property string $voteid
 * @property string $hits
 * @property string $thumb
 * @property string $username
 * @property string $addtime
 * @property string $editor
 * @property string $edittime
 * @property string $ip
 * @property string $template
 * @property integer $status
 * @property integer $islink
 * @property string $linkurl
 * @property string $filepath
 * @property string $note
 * @property string $zs_source
 * @property string $zs_hot
 * @property string $zs_sitename
 * @property string $zs_imageurl
 * @property string $zs_levels
 * @property string $zs_comid
 * @property string $zs_ischeck
 */
class Article21 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_article_21';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catid', 'areaid', 'level', 'hits', 'addtime', 'edittime', 'status', 'islink'], 'integer'],
            [['fee'], 'number'],
            [['subtitle'], 'string'],
            [['title', 'tag', 'voteid'], 'string', 'max' => 100],
            [['style', 'author', 'ip', 'zs_source', 'zs_hot', 'zs_imageurl'], 'string', 'max' => 50],
            [['introduce', 'keyword', 'pptword', 'fromurl', 'thumb', 'linkurl', 'filepath', 'note'], 'string', 'max' => 255],
            [['copyfrom', 'username', 'editor', 'template'], 'string', 'max' => 30],
            [['zs_sitename', 'zs_levels', 'zs_comid', 'zs_ischeck'], 'string', 'max' => 20],
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
            'areaid' => 'Areaid',
            'level' => 'Level',
            'title' => 'Title',
            'style' => 'Style',
            'fee' => 'Fee',
            'subtitle' => 'Subtitle',
            'introduce' => 'Introduce',
            'tag' => 'Tag',
            'keyword' => 'Keyword',
            'pptword' => 'Pptword',
            'author' => 'Author',
            'copyfrom' => 'Copyfrom',
            'fromurl' => 'Fromurl',
            'voteid' => 'Voteid',
            'hits' => 'Hits',
            'thumb' => 'Thumb',
            'username' => 'Username',
            'addtime' => 'Addtime',
            'editor' => 'Editor',
            'edittime' => 'Edittime',
            'ip' => 'Ip',
            'template' => 'Template',
            'status' => 'Status',
            'islink' => 'Islink',
            'linkurl' => 'Linkurl',
            'filepath' => 'Filepath',
            'note' => 'Note',
            'zs_source' => 'Zs Source',
            'zs_hot' => 'Zs Hot',
            'zs_sitename' => 'Zs Sitename',
            'zs_imageurl' => 'Zs Imageurl',
            'zs_levels' => 'Zs Levels',
            'zs_comid' => 'Zs Comid',
            'zs_ischeck' => 'Zs Ischeck',
        ];
    }
}
