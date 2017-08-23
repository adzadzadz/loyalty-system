<?php

namespace frontend\controllers;

use Yii;
use common\models\UserOperations as User;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$user = User::findOne(Yii::$app->user->id);
        return $this->render('index', [
        	'user' => $user
        ]);
    }

}
