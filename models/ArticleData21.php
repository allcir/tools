<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destoon_article_data_21".
 *
 * @property string $itemid
 * @property string $content
 */
class ArticleData21 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destoon_article_data_21';
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
