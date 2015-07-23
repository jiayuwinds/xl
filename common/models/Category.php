<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property string $cat_id
 * @property string $cat_name
 * @property string $parent_id
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_description
 *
 * @property Goods[] $goods
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['cat_name'], 'string', 'max' => 40],
            [['seo_title', 'seo_keyword'], 'string', 'max' => 100],
            [['seo_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => '分类ID',
            'cat_name' => '分类名',
            'parent_id' => '父类ID',
            'seo_title' => '标题',
            'seo_keyword' => '关键字',
            'seo_description' => '描述',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasMany(Goods::className(), ['cat_id' => 'cat_id']);
    }
}
