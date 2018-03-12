<?php

use yii\db\Migration;

/**
 * Handles the creation of table `orders`.
 * Has foreign keys to the tables:
 *
 * - `price_list`
 */
class m180312_073754_create_orders_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('orders', [
            
			'id' => $this->primaryKey(),
            'price_name' => $this->integer(),
            'name' => $this->string(30),
            'phone_digital' => $this->string(10),
        ]);

        // creates index for column `price_name`
        $this->createIndex(
            'idx-orders-price_name',
            'orders',
            'price_name'
        );

        // add foreign key for table `price_list`
        $this->addForeignKey(
            'fk-orders-price_name',
            'orders',
            'price_name',
            'price_list',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `price_list`
        $this->dropForeignKey(
            'fk-orders-price_name',
            'orders'
        );

        // drops index for column `price_name`
        $this->dropIndex(
            'idx-orders-price_name',
            'orders'
        );

        $this->dropTable('orders');
    }
}
