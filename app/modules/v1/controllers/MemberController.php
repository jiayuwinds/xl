<?php

namespace app\modules\v1\controllers;

use Yii;
use app\common\controllers\AppController;

class MemberController extends AppController
{
    public $modelClass = 'app\modules\v1\models\Member';
    
    
//     public function actions()
//     {
//         $actions = parent::actions();
//         unset($actions['index'], $actions['update'], $actions['create'], $actions['delete'], $actions['view']);
//         return $actions;
//     }
    
//     public function actionIndex()
//     {
//         $model = new Member();
//     }
    
//     public function actionCreate()
//     {
//         p(2);
//         $model = new $this->modelClass();
//         $model->attributes = Yii::$app->request->post();
//         if (! $model->save()) {
//             return array_values($model->getFirstErrors())[0];
//         }
//         return $model;
//     }

    public function checkAccess($action, $model = null, $params = [])
    {
        
    }
}
