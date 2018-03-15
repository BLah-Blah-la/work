<?php

use yii\db\Migration;

/**
 * Handles the creation of table `reviews`.
 */
class m180312_072920_create_reviews_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('reviews', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'surname' => $this->string(30),
            'status' => $this->text(),
            'text' => $this->text(),
            'avatar' => $this->string(50),
            'image_result' => $this->string(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('reviews');
    }
}
