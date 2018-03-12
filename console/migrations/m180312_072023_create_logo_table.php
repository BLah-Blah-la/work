<?php

use yii\db\Migration;

/**
 * Handles the creation of table `logo`.
 */
class m180312_072023_create_logo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('logo', [
            'id' => $this->primaryKey(),
            'logo_image' => $this->string(50),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('logo');
    }
}
