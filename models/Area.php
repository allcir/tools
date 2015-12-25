<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_area".
 *
 * @property string $areaid
 * @property string $areaname
 * @property string $parentid
 * @property string $arrparentid
 * @property integer $child
 * @property string $arrchildid
 * @property integer $listorder
 * @property integer $child_old
 * @property integer $isopen
 * @property integer $layer
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_area';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parentid', 'child', 'listorder', 'child_old', 'isopen', 'layer'], 'integer'],
            [['arrchildid'], 'string'],
            [['areaname'], 'string', 'max' => 50],
            [['arrparentid'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'areaid' => 'Areaid',
            'areaname' => 'Areaname',
            'parentid' => 'Parentid',
            'arrparentid' => 'Arrparentid',
            'child' => 'Child',
            'arrchildid' => 'Arrchildid',
            'listorder' => 'Listorder',
            'child_old' => 'Child Old',
            'isopen' => 'Isopen',
            'layer' => 'Layer',
        ];
    }
}
