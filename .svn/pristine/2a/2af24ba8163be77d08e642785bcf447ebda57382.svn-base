<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cart}}".
 *
 * @property string $cart_id
 * @property string $member_id
 * @property string $goods_id
 * @property string $num
 * @property string $dateline
 *
 * @property Member $member
 * @property Goods $goods
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cart}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'goods_id', 'num', 'dateline'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cart_id' => '购物车ID',
            'member_id' => '会员ID',
            'goods_id' => '商品ID',
            'num' => '数量',
            'dateline' => '添加时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Member::className(), ['member_id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasOne(Goods::className(), ['goods_id' => 'goods_id']);
    }
}
