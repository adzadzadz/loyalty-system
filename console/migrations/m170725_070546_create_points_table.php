<?php

use yii\db\Migration;

/**
 * Handles the creation of table `points`.
 */
class m170725_070546_create_points_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%points}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'points' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%points}}');
    }
}
