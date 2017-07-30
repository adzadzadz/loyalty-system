<?php 

namespace common\models;

use Yii;

/**
* User control specific model
*/
class UserOperations extends \common\models\User
{
    public function signup()
    {
        if ($this->validate()) {
            $user = new User;

            do {
                $no = rand(100000,999999);
                $generated = "$this->branch$no";
            } while (User::findOne(['username' => $generated]));

            $user->username = $generated;
            $user->firstname = $this->firstname;
            $user->middlename = $this->middlename;
            $user->lastname = $this->lastname;
            $user->direct_upline = $this->direct_upline;
            $user->setPassword(Yii::$app->security->generateRandomString(8));
            $user->generateAuthKey();

            if ($user->save()) {
                return $user;
            }
        }
        return false;
    }
}