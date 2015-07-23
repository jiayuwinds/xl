<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%attribute}}".
 *
 * @property string $attr_id
 * @property string $attr_name
 * @property integer $is_sale
 * @property integer $is_required
 *
 * @property AttributeValue[] $attributeValues
 */
class Attribute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_sale', 'is_required'], 'integer'],
            [['attr_name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attr_id' => '属性ID',
            'attr_name' => '属性名',
            'is_sale' => '0搜索属性1销售属性',
            'is_required' => '1必填',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributeValues()
    {
        return $this->hasMany(AttributeValue::className(), ['attr_id' => 'attr_id']);
    }
}
