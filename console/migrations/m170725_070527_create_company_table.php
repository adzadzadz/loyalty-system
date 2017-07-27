<?php

use yii\db\Migration;

/**
 * Handles the creation of table `company`.
 */
class m170725_070527_create_company_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%company}}', [
            'company_id' => $this->primaryKey(),
            'name' => $this->string(),
            'status' => $this->smallInteger()
        ]);

        $this->createTable('{{%branch}}', [
            'branch_id' => $this->primaryKey(),
            'company_id' => $this->integer(),
            'branch_code' => $this->string(),
            'name' => $this->string(),
            'status' => $this->smallInteger()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%company}}');
        $this->dropTable('{{%branch}}');
    }
}
