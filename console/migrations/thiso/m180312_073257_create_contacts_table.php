<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contacts`.
 */
class m180312_073257_create_contacts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'image_item' => $this->string(50),
            'dynamic_string' => $this->string(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contacts');
    }
}
