<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%goods_attrval}}".
 *
 * @property string $attrval_id
 * @property string $goods_id
 * @property string $attrval_oname
 * @property string $attrval_opic
 *
 * @property Goods $goods
 * @property AttributeValue $attrval
 */
class GoodsAttrval extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_attrval}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attrval_id', 'goods_id'], 'integer'],
            [['attrval_oname'], 'string', 'max' => 40],
            [['attrval_opic'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attrval_id' => '属性ID',
            'goods_id' => '商品ID',
            'attrval_oname' => '属性值自定义名',
            'attrval_opic' => '属性值自定义图片',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasOne(Goods::className(), ['goods_id' => 'goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttrval()
    {
        return $this->hasOne(AttributeValue::className(), ['attrval_id' => 'attrval_id']);
    }
}
