<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property string $goods_id
 * @property string $cat_id
 * @property string $goods_sn
 * @property string $goods_name
 * @property string $goods_summary
 * @property double $goods_market_price
 * @property double $goods_price
 * @property string $goods_score
 * @property string $goods_stock
 * @property integer $goods_status
 * @property string $goods_content
 * @property string $goods_pic
 * @property string $goods_sales
 * @property string $goods_sort
 * @property string $good_evaluations
 * @property string $middle_evaluations
 * @property string $bad_evaluations
 * @property string $putaway_time
 * @property string $dateline
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_description
 *
 * @property Cart[] $carts
 * @property Evaluate[] $evaluates
 * @property File[] $files
 * @property Category $cat
 * @property GoodsAttrval[] $goodsAttrvals
 * @property OrderGoods[] $orderGoods
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'goods_score', 'goods_stock', 'goods_status', 'goods_sales', 'goods_sort', 'good_evaluations', 'middle_evaluations', 'bad_evaluations', 'putaway_time', 'dateline'], 'integer'],
            [['goods_market_price', 'goods_price'], 'number'],
            [['goods_content'], 'required'],
            [['goods_content'], 'string'],
            [['goods_sn'], 'string', 'max' => 10],
            [['goods_name', 'seo_title', 'seo_keyword'], 'string', 'max' => 100],
            [['goods_summary', 'goods_pic', 'seo_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'cat_id' => '分类ID',
            'goods_sn' => '商品编号',
            'goods_name' => '商品名',
            'goods_summary' => '概要',
            'goods_market_price' => '市场价',
            'goods_price' => '商品价',
            'goods_score' => '商品积分',
            'goods_stock' => '库存',
            'goods_status' => '0删除1正常2下架',
            'goods_content' => '内容',
            'goods_pic' => '商品首图',
            'goods_sales' => '销量',
            'goods_sort' => '排序大的排前',
            'good_evaluations' => '好评数',
            'middle_evaluations' => '中评数',
            'bad_evaluations' => '差评数',
            'putaway_time' => '上架时间',
            'dateline' => '上线时间',
            'seo_title' => '标题',
            'seo_keyword' => '关键字',
            'seo_description' => '描述',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['goods_id' => 'goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluates()
    {
        return $this->hasMany(Evaluate::className(), ['goods_id' => 'goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiles()
    {
        return $this->hasMany(File::className(), ['goods_id' => 'goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['cat_id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodsAttrvals()
    {
        return $this->hasMany(GoodsAttrval::className(), ['goods_id' => 'goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderGoods()
    {
        return $this->hasMany(OrderGoods::className(), ['goods_id' => 'goods_id']);
    }
}
