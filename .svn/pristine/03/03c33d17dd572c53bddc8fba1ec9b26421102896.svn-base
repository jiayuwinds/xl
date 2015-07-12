<?php

namespace app\models;

use yii\db\ActiveRecord;

class Member extends ActiveRecord
{
    public function scenarios()
    {
        return [
            'login' => ['username', 'password'],
            'register' => ['username', 'email', 'password'],
        ];
    }
}