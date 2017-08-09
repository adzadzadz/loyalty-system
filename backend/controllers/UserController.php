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
use common\users\UserOperations;

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
        $userList = [];
        foreach ($users as $user) {
            $userList[$user->id] = "$user->username - $user->firstname $user->middlename $user->lastname";
        }
        return $this->render('index', [
            'branches' => $branchList,
            'users' => $users,
            'userList' => $userList
        ]);
    }

    public function actionSignup()
    {
        $user = new User;
        if ($user->load(Yii::$app->request->post()) && $result = $user->signup()) {
            Yii::$app->getSession()->setFlash('signupResult', 'Registration Success.');
        } else {
            Yii::$app->getSession()->setFlash('signupResult', 'Registration Failed.');
        }
        return $this->redirect(['user/index']);
    }

}