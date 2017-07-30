<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\models\Superuser;
use common\models\Company;
use common\models\Branch;
use common\models\UserOperations;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppController extends Controller
{
    public function actionSetDefaults()
    {
        $this->stdout("Setting up defaults \n");
        $this->runAction('set-super');
        $this->runAction('set-company');
        $this->runAction('set-users');
    }

    public function actionSetCompany()
    {
        $company = new Company;
        $company->name = "Loyalty System";
        $company->status = 10;

        if ($company->save()) {

            $branch = new Branch;
            $branch->branch_code = "DC";
            $branch->name = "Dumaguete";
            $branch->company_id = $company->company_id;
            $branch->status = 10;

            if ($branch->save()) {
                $this->stdout("Company \"$company->name\" Created \n");
                $this->stdout("Branch \"$branch->name\" Created \n");
            }
        }
    }

    public function actionSetSuper()
    {
        $user = new Superuser;
        $user->username = 'admin';
        $user->email = "admin@admin.com";
        $user->setPassword('Qwerasdf!234');
        $user->generateAuthKey();

        if ($user->save()) {
            $this->stdout("Super User created \n");
        }
    }

    public function actionSetUsers()
    {
        for ($each=1; $each < 16; $each++) { 
            $user = new UserOperations();
            $user->isNewRecord = true;
            $user->username = "company_$each";
            $user->firstname = 'company';
            $user->middlename = 'company';
            $user->lastname = 'company';
            // $user->email = "company@company.com";
            $user->direct_upline = $each - 1;
            $user->signup();
            // $user->save();
            $this->stdout("Primary User $each created \n");
        }
        $this->stdout("Primary Users created \n");
    }
}
