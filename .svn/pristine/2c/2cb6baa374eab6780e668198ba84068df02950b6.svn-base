<?php

namespace common\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\helpers\ArrayHelper;
use yii\filters\auth\QueryParamAuth;
use yii\filters\RateLimiter;

class AppController extends ActiveController
{
    
    protected $uuid;
    protected $os;
    protected $lang;
    protected $useragent;
    protected $dpi;
    protected $version;
    protected $sessionID;
    protected $token;
    protected $sign;
    protected $memberId = 0;
    
    const SESSION_EXPIRE = 86400; //session有效期为1天
    
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(),[
            'contentNegotiator' => [
                'formats' => ['text/html' => Response::FORMAT_JSON],
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
    
    public function init()
    {
        return parent::init();
        $this->checkHeader()->setSessionID();
    }
    
    /**
     * 检查头部
     */
    private function checkHeader()
    {
        $header_request = true;
        $this->uuid = isset($_SERVER['HTTP_UUID']) ? $_SERVER['HTTP_UUID'] : $header_request = false;
        $this->version = isset($_SERVER['HTTP_VERSION']) ? $_SERVER['HTTP_VERSION'] : $header_request = false;
        $this->os = isset($_SERVER['HTTP_OS']) ? $_SERVER['HTTP_OS'] : $header_request = false;
        $this->sign = isset($_SERVER['HTTP_SIGN']) ? $_SERVER['HTTP_SIGN'] : $header_request = false;
        $this->lang = isset($_SERVER['HTTP_LANG']) ? $_SERVER['HTTP_LANG'] : '';
        $this->useragent = isset($_SERVER['HTTP_USERAGENT']) ? $_SERVER['HTTP_USERAGENT'] : '';
        $this->dpi = isset($_SERVER['HTTP_DPI']) ? $_SERVER['HTTP_DPI'] : '';
        $this->token = isset($_SERVER['HTTP_TOKEN']) ? $_SERVER['HTTP_TOKEN'] : '';
        $this->sessionID = isset($_SERVER['HTTP_SESSIONID']) ? $_SERVER['HTTP_SESSIONID'] : '';
        if(!$header_request){
//             CompJson::jsonError('非法请求', array('bad_request' => 1), self::BAD_REQUEST);
            p('1');
        }
        return $this;
    }
    
    /**
     * 设置sessionid
     */
    public function setSessionID()
    {
        if(!empty($this->sessionID)){
            Yii::$app->session->destroy();
            Yii::$app->session->setId($this->sessionID);
            Yii::$app->session->open();
            //p(Yii::$app->session->getId());
        }
        Yii::$app->session->setTimeout(self::SESSION_EXPIRE);
        return $this;
    }
}
