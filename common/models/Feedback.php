<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%feedback}}".
 *
 * @property string $feedback_id
 * @property string $member_id
 * @property string $feedback_content
 * @property string $dateline
 *
 * @property Member $member
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%feedback}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'dateline'], 'integer'],
            [['feedback_content'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'feedback_id' => '反馈ID',
            'member_id' => '会员ID',
            'feedback_content' => '反馈内容',
            'dateline' => '反馈时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Member::className(), ['member_id' => 'member_id']);
    }
}
