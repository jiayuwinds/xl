<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order}}".
 *
 * @property string $order_id
 * @property string $member_id
 * @property string $order_sn
 * @property double $order_amount
 * @property integer $order_status
 * @property string $order_delivery_time
 * @property string $dateline
 *
 * @property Evaluate[] $evaluates
 * @property Member $member
 * @property OrderGoods[] $orderGoods
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'order_status', 'order_delivery_time', 'dateline'], 'integer'],
            [['order_amount'], 'number'],
            [['order_sn'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => '订单ID',
            'member_id' => '会员ID',
            'order_sn' => '订单编号',
            'order_amount' => '总金额',
            'order_status' => '0待付款1待发货2待签收3待评价4完成5退货6换货7已取消',
            'order_delivery_time' => '发货时间',
            'dateline' => '下单时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluates()
    {
        return $this->hasMany(Evaluate::className(), ['order_id' => 'order_id']);
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
    public function getOrderGoods()
    {
        return $this->hasMany(OrderGoods::className(), ['order_id' => 'order_id']);
    }
}
