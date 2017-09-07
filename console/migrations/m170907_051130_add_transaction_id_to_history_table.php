<?php

use yii\db\Migration;

class m170907_051130_add_transaction_id_to_history_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn("{{%history}}", 'transaction_id', $this->integer()->after('id'));
    }

    public function safeDown()
    {
        echo "m170907_051130_add_transaction_id_to_history_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170907_051130_add_transaction_id_to_history_table cannot be reverted.\n";

        return false;
    }
    */
}
