<?php

use yii\db\Migration;

/**
 * Handles the creation of table `price_list`.
 */
class m180312_072422_create_price_list_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('price_list', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20),
            'value' => $this->integer(),
            'terms' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('price_list');
    }
}
