<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property string $article_id
 * @property string $lumn_id
 * @property string $article_name
 * @property string $article_summary
 * @property string $article_content
 * @property string $article_author
 * @property string $article_from
 * @property string $article_tag
 * @property string $article_sort
 * @property string $article_hit
 * @property integer $article_status
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_description
 * @property string $dateline
 *
 * @property Lumn $lumn
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lumn_id', 'article_sort', 'article_hit', 'article_status', 'dateline'], 'integer'],
            [['article_content'], 'required'],
            [['article_content'], 'string'],
            [['article_name', 'article_from', 'article_tag', 'seo_title', 'seo_keyword'], 'string', 'max' => 100],
            [['article_summary', 'seo_description'], 'string', 'max' => 255],
            [['article_author'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => '文章ID',
            'lumn_id' => '栏目ID',
            'article_name' => '文章标题',
            'article_summary' => '概要',
            'article_content' => '内容',
            'article_author' => '作者',
            'article_from' => '来源',
            'article_tag' => '标签',
            'article_sort' => '排序',
            'article_hit' => '文章点击数',
            'article_status' => '0未审核1显示2隐藏',
            'seo_title' => '标题',
            'seo_keyword' => '关键字',
            'seo_description' => '描述',
            'dateline' => '发布时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLumn()
    {
        return $this->hasOne(Lumn::className(), ['lumn_id' => 'lumn_id']);
    }
}
