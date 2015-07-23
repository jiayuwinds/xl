<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%lumn}}".
 *
 * @property string $lumn_id
 * @property string $lumn_name
 * @property string $lumn_content
 * @property string $lumn_sort
 * @property integer $lumn_status
 * @property string $parent_id
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_description
 * @property string $dateline
 *
 * @property Article[] $articles
 */
class Lumn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lumn}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lumn_content'], 'required'],
            [['lumn_content'], 'string'],
            [['lumn_sort', 'lumn_status', 'parent_id', 'dateline'], 'integer'],
            [['lumn_name'], 'string', 'max' => 40],
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
            'lumn_id' => '栏目ID',
            'lumn_name' => '栏目名称',
            'lumn_content' => '简介',
            'lumn_sort' => '排序',
            'lumn_status' => '0隐藏1显示',
            'parent_id' => '父类ID',
            'seo_title' => 'title',
            'seo_keyword' => 'keyword',
            'seo_description' => '描述',
            'dateline' => '添加时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['lumn_id' => 'lumn_id']);
    }
}
