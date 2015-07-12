<?php

namespace app\common\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\helpers\ArrayHelper;
use yii\filters\auth\QueryParamAuth;
use yii\filters\RateLimiter;

class AppController extends ActiveController
{
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(),[
            'contentNegotiator' => [
                'formats' => ['text/html' => Response::FORMAT_JSON],
            ],
            'authenticator' => [
                'class' => QueryParamAuth::className(),
            ],
            'rateLimiter' => [
                'class' => RateLimiter::className(),
                'enableRateLimitHeaders' => false,
            ],
        ]);
    }
    
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}
