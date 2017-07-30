s<?php

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
            'points' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        // $this->addPrimaryKey( 'uid_pk', '{{%points}}', 'user_id' );
        $this->createIndex( 'uid_pts_ix', '{{%points}}', 'user_id', $unique = true );
        $this->addForeignKey( 'uid_pts_fk', '{{%points}}', ['user_id'], '{{%user}}', ['user_id'], $delete = 'CASCADE', $update = null );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%points}}');
    }
}
