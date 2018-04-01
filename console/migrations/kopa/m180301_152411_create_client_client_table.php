<?php

use yii\db\Migration;

/**
 * Handles the creation of table `client_client`.
 */
class m180301_152411_create_client_client_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('client_client', [
            'id' => $this->primaryKey(),
            'id' => $this->integer()->notNull(),
            'first_name' => $this->string(50)->notNull(),
            'last_name' => $this->string(50)->notNull(),
            'age' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('client_client');
    }
}
