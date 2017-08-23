<?php

namespace frontend\controllers;

use Yii;
use common\models\UserOperations as User;
use common\models\Sales;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class UserController extends \yii\web\Controller
{
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'points', 'transactions', 'tree', 'profile'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

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
