<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%admin}}".
 *
 * @property string $admin_id
 * @property string $admin_username
 * @property string $admin_password
 * @property integer $admin_status
 * @property string $admin_lastloginip
 * @property string $admin_lastlogintime
 * @property string $dateline
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_status', 'admin_lastlogintime', 'dateline'], 'integer'],
            [['admin_username', 'admin_lastloginip'], 'string', 'max' => 40],
            [['admin_password'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => '管理员ID',
            'admin_username' => '用户名',
            'admin_password' => '密码',
            'admin_status' => '0禁用1可用',
            'admin_lastloginip' => '最后登录IP',
            'admin_lastlogintime' => '最后登录时间',
            'dateline' => '生成时间',
        ];
    }
}
