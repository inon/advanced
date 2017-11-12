<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customers`.
 */
class m171112_085104_create_customers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('customers', [
            'customer_id' => $this->primaryKey(),
            'customer_name' => $this->string(),
            'zip_code' => $this->string(),
            'city' => $this->string(),
            'province' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('customers');
    }
}
