<?php

use yii\db\Migration;

/**
 * Handles the creation of table `callback`.
 */
class m180312_073939_create_callback_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('callback', [
            'id' => $this->primaryKey(),
            'title_section' => $this->text(),
            'name' => $this->string(30),
            'phone_digital' => $this->string(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('callback');
    }
}
