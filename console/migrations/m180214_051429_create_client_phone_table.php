<?php

use yii\db\Migration;

/**
 * Handles the creation of table `client_phone`.
 * Has foreign keys to the tables:
 *
 * - `client_client`
 */
class m180214_051429_create_client_phone_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('client_phone', [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer()->notNull(),
            'phone_digital' => $this->string(10),
        ]);

        // creates index for column `client_id`
        $this->createIndex(
            'idx-client_phone-client_id',
            'client_phone',
            'client_id'
        );

        // add foreign key for table `client_client`
        $this->addForeignKey(
            'fk-client_phone-client_id',
            'client_phone',
            'client_id',
            'client_client',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `client_client`
        $this->dropForeignKey(
            'fk-client_phone-client_id',
            'client_phone'
        );

        // drops index for column `client_id`
        $this->dropIndex(
            'idx-client_phone-client_id',
            'client_phone'
        );

        $this->dropTable('client_phone');
    }
}
