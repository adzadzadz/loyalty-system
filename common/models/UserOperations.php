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

    public static function getParent($base_user_id, $levels = 3)
    {
        $baseUser = Static::findOne($base_user_id);
        $users = [];
        $users[$baseUser->user_id] = [
            'base' => $baseUser,
            'dls' => Static::findAll(['direct_upline' => $baseUser->user_id])
        ];
        
        $i = 0;
        $i2 = 0;
        $i3 = 0;
        $level = [];
        $level[0][] = $baseUser;

        // Level 1
        foreach ($users[$baseUser->user_id]['dls'] as $user1) {
            $dls = Static::findAll(['direct_upline' => $user1->user_id]);
            $level[1][] = $user1;
            // Level 2
            foreach ($dls as $user2) {
                $dls1 = Static::findAll(['direct_upline' => $user2->user_id]);
                $level[2][] = $user2;
                // Level 3
                foreach ($dls1 as $user3) {
                    $level[3][] = $user3;
                }
            }
        }
         
        return $level;
    }
}