<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portfolio`.
 */
class m180312_072230_create_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('portfolio', [
            'id' => $this->primaryKey(),
            'name_company' => $this->string(30),
            'image_result' => $this->string(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('portfolio');
    }
}
