<?php

use yii\db\Migration;

/**
 * Handles the creation of table `superuser`.
 */
class m170725_070621_create_superuser_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%superuser}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'email'=> $this->string(),
            'password'=> $this->string()->null(),
            'accesstoken' => $this->string(),
            'auth_key' => $this->string(32),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),

            'status' => $this->smallInteger()->defaultValue(10),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%superuser}}');
    }
}
