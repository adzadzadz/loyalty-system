<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sales_history`.
 */
class m170815_043804_create_sales_history_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sales_history', [
            'id' => $this->primaryKey(),
            'sales_id' => $this->integer(),
            'description' => $this->string()->notNull(),
            'amount' => $this->float()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);

        $this->createIndex( 'sid_sls_ix', '{{%sales_history}}', 'sales_id', $unique = false );
        // $this->addPrimaryKey( 'uid_pk', '{{%sales}}', 'user_id' );
        $this->addForeignKey ( 'sid_sls_fk', '{{%sales_history}}', 'sales_id', '{{%sales}}', 'id', $delete = 'CASCADE', $update = null );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sales_history');
    }
}
