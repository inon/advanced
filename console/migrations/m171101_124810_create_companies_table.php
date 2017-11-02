<?php

use yii\db\Migration;

/**
 * Handles the creation of table `companies`.
 */
class m171101_124810_create_companies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('companies', [
            'company_id' => $this->primaryKey()->unsigned(),
            'company_name' => $this->string(),
            'company_email' => $this->string(),
            'company_address' => $this->string(),
            'company_created_date' => $this->datetime(),
            'company_status' =>  "ENUM('active', 'inactive')",
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('companies');
    }
}
