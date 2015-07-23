<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%file}}".
 *
 * @property string $file_id
 * @property string $file_name
 * @property string $file_dir
 * @property string $file_size
 * @property string $file_ext
 * @property string $file_sort
 * @property string $goods_id
 * @property string $member_id
 * @property string $evaluate_id
 * @property string $dateline
 *
 * @property Goods $goods
 * @property Member $member
 * @property Evaluate $evaluate
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%file}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_size', 'file_sort', 'goods_id', 'member_id', 'evaluate_id', 'dateline'], 'integer'],
            [['file_name'], 'string', 'max' => 40],
            [['file_dir'], 'string', 'max' => 255],
            [['file_ext'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'file_id' => '文件ID',
            'file_name' => '文件名',
            'file_dir' => '文件地址',
            'file_size' => '文件大小-单位字节',
            'file_ext' => '后缀名',
            'file_sort' => '排序',
            'goods_id' => '商品ID',
            'member_id' => '会员ID',
            'evaluate_id' => '评价ID',
            'dateline' => '上传时间',
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
    public function getMember()
    {
        return $this->hasOne(Member::className(), ['member_id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluate()
    {
        return $this->hasOne(Evaluate::className(), ['evaluate_id' => 'evaluate_id']);
    }
}
