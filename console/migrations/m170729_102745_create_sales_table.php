<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sales`.
 */
class m170729_102745_create_sales_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%sales}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'amount' => $this->float(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
        $this->createIndex( 'uid_sls_ix', '{{%sales}}', 'user_id', $unique = true );
        // $this->addPrimaryKey( 'uid_pk', '{{%sales}}', 'user_id' );
        $this->addForeignKey ( 'uid_sls_fk', '{{%sales}}', 'user_id', '{{%user}}', 'user_id', $delete = 'CASCADE', $update = null );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%sales}}');
    }
}
