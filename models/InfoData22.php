<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_info_data_22".
 *
 * @property string $itemid
 * @property string $content
 */
class InfoData22 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_info_data_22';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itemid', 'content'], 'required'],
            [['itemid'], 'integer'],
            [['content'], 'string'],
            [['itemid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'itemid' => 'Itemid',
            'content' => 'Content',
        ];
    }
}
