<?php

namespace frontend\controllers;

use Yii;
use common\models\UserOperations as User;
use common\models\Sales;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$user = User::findOne(Yii::$app->user->id);
        return $this->render('index', [
        	'user' => $user
        ]);
    }

    public function actionPoints()
    {
    	$user = User::findOne(Yii::$app->user->id);
        return $this->render('points', [
        	'user' => $user
        ]);
    }

	public function actionTransactions()
    {
    	$sales = Sales::findOne(['user_id' => Yii::$app->user->id]);
        return $this->render('transactions', [
        	'sales' => $sales
        ]);
    }

    public function actionTree()
    {
    	return $this->render('/site/coming');
    }

    public function actionProfile()
    {
    	return $this->render('/site/coming');
    }

}
