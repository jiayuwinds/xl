<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%member}}".
 *
 * @property string $member_id
 * @property string $member_sn
 * @property string $username
 * @property string $password
 * @property string $access_token
 * @property string $nick
 * @property string $realname
 * @property string $avatar
 * @property string $sign
 * @property integer $sex
 * @property string $birthday
 * @property string $mobile
 * @property string $email
 * @property string $province
 * @property string $city
 * @property string $area
 * @property string $address
 * @property string $idcard
 * @property string $score
 * @property integer $grade
 * @property integer $status
 * @property string $lastlogintime
 * @property string $lastloginip
 * @property string $dateline
 *
 * @property Cart[] $carts
 * @property Feedback[] $feedbacks
 * @property File[] $files
 * @property Order[] $orders
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%member}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_sn', 'sex', 'birthday', 'mobile', 'province', 'city', 'area', 'score', 'grade', 'status', 'lastlogintime', 'dateline'], 'integer'],
            [['username', 'nick', 'realname', 'lastloginip'], 'string', 'max' => 40],
            [['password', 'avatar', 'sign', 'address'], 'string', 'max' => 255],
            [['access_token', 'email'], 'string', 'max' => 100],
            [['idcard'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'member_id' => '会员ID',
            'member_sn' => '会员编号',
            'username' => '用户名',
            'password' => '密码',
            'access_token' => '访问令牌',
            'nick' => '昵称',
            'realname' => '真实姓名',
            'avatar' => '头像',
            'sign' => '签名',
            'sex' => '0保密1男2女',
            'birthday' => '生日19901010',
            'mobile' => '手机',
            'email' => '邮箱',
            'province' => '省',
            'city' => '市',
            'area' => '区',
            'address' => '地址',
            'idcard' => '身份证',
            'score' => '积分',
            'grade' => '会员等级0普通1铜牌2银牌3金牌4钻石',
            'status' => '0禁用1正常',
            'lastlogintime' => '最后登录时间',
            'lastloginip' => '最后登录IP',
            'dateline' => '注册时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['member_id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::className(), ['member_id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiles()
    {
        return $this->hasMany(File::className(), ['member_id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['member_id' => 'member_id']);
    }
}
