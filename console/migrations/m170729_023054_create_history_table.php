<?php

use yii\db\Migration;

/**
 * Handles the creation of table `poinst_history`.
 */
class m170729_023054_create_history_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%history}}', [
            'id' => $this->primaryKey(),
            'provider_user_id' => $this->integer(),
            'user_id' => $this->integer(),
            'type' => $this->string(),
            'value' => $this->float(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
        $this->createIndex( 'uid_hty_ix', '{{%history}}', 'user_id', $unique = false );
        $this->addForeignKey ( 'uid_hty_fk', '{{%history}}', 'user_id', '{{%user}}', 'user_id', $delete = null, $update = null );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%sales}}');
    }
}
