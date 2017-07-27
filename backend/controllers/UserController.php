<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\User;
use common\models\Branch;
use common\models\Company;

/**
 * Site controller
 */
class UserController extends Controller
{
    public function actionIndex()
    {
        $branches = Branch::find()->all();
        $branchList = [];
        foreach ($branches as $each) {
            $branchList[$each->branch_code] = $each->name;
        }
        $users = User::find()->all();
        return $this->render('index', [
            'branches' => $branchList,
            'users' => $users
        ]);
    }

    public function actionSignup()
    {
        $user = new User;
        $user->load(Yii::$app->request->post());
        if ($user->load(Yii::$app->request->post()) && $result = $user->signup()) {
            Yii::$app->getSession()->setFlash('signupResult', 'Registration Success.');
        } else {
            Yii::$app->getSession()->setFlash('signupResult', 'Registration Failed.');
        }
        return $this->redirect(['user/index']);
    }
}