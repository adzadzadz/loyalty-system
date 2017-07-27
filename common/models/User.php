<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $user_id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property integer $birthdate
 * @property string $gender
 * @property string $civilstatus
 * @property string $citizenship
 * @property string $homeaddress
 * @property string $telephonenumber
 * @property string $faxnumber
 * @property string $mobilenumber
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    public $branch;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'required'],
            [['birthdate', 'status', 'created_at', 'updated_at'], 'integer'],
            [['branch', 'username', 'password_hash', 'password_reset_token', 'email', 'firstname', 'middlename', 'lastname', 'gender', 'civilstatus', 'citizenship', 'homeaddress', 'telephonenumber', 'faxnumber', 'mobilenumber'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

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

            if ($user->save()) {
                return $user;
            }
        }
        return false;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'birthdate' => 'Birthdate',
            'gender' => 'Gender',
            'civilstatus' => 'Civilstatus',
            'citizenship' => 'Citizenship',
            'homeaddress' => 'Homeaddress',
            'telephonenumber' => 'Telephonenumber',
            'faxnumber' => 'Faxnumber',
            'mobilenumber' => 'Mobilenumber',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
