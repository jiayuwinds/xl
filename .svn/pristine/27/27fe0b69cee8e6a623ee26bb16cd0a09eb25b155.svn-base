<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%attribute_value}}".
 *
 * @property string $attrval_id
 * @property string $attrval_name
 * @property string $attrval_pic
 * @property string $attr_id
 *
 * @property Attribute $attr
 * @property GoodsAttrval[] $goodsAttrvals
 */
class AttributeValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute_value}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attr_id'], 'integer'],
            [['attrval_name'], 'string', 'max' => 40],
            [['attrval_pic'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attrval_id' => '属性值ID',
            'attrval_name' => '属性值',
            'attrval_pic' => '属性值图片',
            'attr_id' => '属性ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttr()
    {
        return $this->hasOne(Attribute::className(), ['attr_id' => 'attr_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodsAttrvals()
    {
        return $this->hasMany(GoodsAttrval::className(), ['attrval_id' => 'attrval_id']);
    }
}
