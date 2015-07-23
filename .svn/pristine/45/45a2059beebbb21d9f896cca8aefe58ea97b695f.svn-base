<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%adpos}}".
 *
 * @property string $adpos_id
 * @property string $adpos_name
 * @property integer $adpos_type
 *
 * @property Ad[] $ads
 */
class Adpos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%adpos}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adpos_type'], 'integer'],
            [['adpos_name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adpos_id' => '广告位ID',
            'adpos_name' => '广告位名称',
            'adpos_type' => '0web,1wap,2android,3ios',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAds()
    {
        return $this->hasMany(Ad::className(), ['adpos_id' => 'adpos_id']);
    }
}
