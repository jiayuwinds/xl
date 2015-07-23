<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%ad}}".
 *
 * @property string $ad_id
 * @property string $ad_name
 * @property string $ad_pic
 * @property string $ad_content
 * @property string $adpos_id
 * @property string $ad_sort
 * @property integer $ad_status
 * @property string $ad_starttime
 * @property string $ad_endtime
 * @property integer $ad_hits
 * @property string $ad_views
 * @property string $dateline
 *
 * @property Adpos $adpos
 */
class Ad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adpos_id', 'ad_sort', 'ad_status', 'ad_starttime', 'ad_endtime', 'ad_hits', 'ad_views', 'dateline'], 'integer'],
            [['ad_name'], 'string', 'max' => 40],
            [['ad_pic'], 'string', 'max' => 255],
            [['ad_content'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ad_id' => '广告ID',
            'ad_name' => '广告名',
            'ad_pic' => '广告图片',
            'ad_content' => '广告内容',
            'adpos_id' => '广告位ID',
            'ad_sort' => '排序',
            'ad_status' => '0禁用1启用',
            'ad_starttime' => '开始时间',
            'ad_endtime' => '结束时间',
            'ad_hits' => '点击数',
            'ad_views' => '浏览量',
            'dateline' => '发布时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdpos()
    {
        return $this->hasOne(Adpos::className(), ['adpos_id' => 'adpos_id']);
    }
}
