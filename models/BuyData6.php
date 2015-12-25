<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_buy_data_6".
 *
 * @property string $itemid
 * @property string $content
 */
class BuyData6 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_buy_data_6';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itemid'], 'integer'],
            [['content'], 'string'],
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
