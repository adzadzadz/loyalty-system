<?php

namespace backend\controllers;

use Yii;
use backend\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\UserOperations as User;
use common\models\Branch;
use common\models\Company;
use yii\filters\AccessControl;
use common\models\UserOperations;

/**
 * UsercController implements the CRUD actions for User model.
 */
class UsercController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'tree', 'update-password'],
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

    public function actionTree($id)
    {
        $users = UserOperations::getDownlines($id);
        $sales = \common\models\Sales::findOne(['user_id' => $id]);
        // return print_r($users[$id]['dls'][0]['dls']);
        // return print_r($users[0][0]->username);
        return $this->render('tree', [
            'users' => $users,
            'sales' => $sales
        ]);
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($upline_id = null)
    {
        $model = new User;

        if ($model->load(Yii::$app->request->post()) && $user = $model->signup()) {
            return $this->redirect(['view', 'id' => $user->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'upline_id' => $upline_id
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdatePassword()
    {
        if (isset(Yii::$app->request->post()['user_id'])) {
            $user = $this->findModel(Yii::$app->request->post()['user_id']);
            $user->password = Yii::$app->request->post()['password'];
            $user->confirmpassword = Yii::$app->request->post()['confirmpassword'];
            // return var_dump($user->validate());
            if ($user->validate()) {
                $user->setPassword($user->password);
            }            
            if ($user->save()) {
                Yii::$app->session->setFlash('success', 'Password has been updated succesfully.');
            } else {
                Yii::$app->session->setFlash('error', $user->getErrors('password')[0]);
            }
            return $this->redirect(['update', 'id' => $user->id]);
        }
        return $this->redirect(['index']);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
