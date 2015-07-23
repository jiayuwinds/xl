<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%evaluate}}".
 *
 * @property string $evaluate_id
 * @property string $goods_id
 * @property string $order_id
 * @property string $evaluate_content
 * @property integer $evaluate_style
 * @property integer $evaluate_quality
 * @property integer $evaluate_size
 * @property string $dateline
 *
 * @property Goods $goods
 * @property Order $order
 * @property File[] $files
 */
class Evaluate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%evaluate}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'order_id', 'evaluate_style', 'evaluate_quality', 'evaluate_size', 'dateline'], 'integer'],
            [['evaluate_content'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'evaluate_id' => '评价ID',
            'goods_id' => '商品ID',
            'order_id' => '订单ID',
            'evaluate_content' => '评价内容',
            'evaluate_style' => '款式评分0不满意1满意',
            'evaluate_quality' => '质量评分0不满意1满意',
            'evaluate_size' => '尺寸评分0不满意1满意',
            'dateline' => '评价时间',
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
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiles()
    {
        return $this->hasMany(File::className(), ['evaluate_id' => 'evaluate_id']);
    }
}
