<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170725_070520_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%user}}', [
            'user_id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->unique(),

            'firstname' => $this->string(),
            'middlename' => $this->string(),
            'lastname' => $this->string(),

            'direct_upline' => $this->integer(),

            'birthdate' => $this->integer(),
            'gender' => $this->string(),
            'civilstatus' => $this->string(),
            'citizenship' => $this->string(),
            'homeaddress' => $this->string(),
            'telephonenumber' => $this->string(),
            'faxnumber' => $this->string(),
            'mobilenumber' => $this->string(),
            
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
