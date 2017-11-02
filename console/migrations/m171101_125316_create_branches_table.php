<?php

use yii\db\Migration;

/**
 * Handles the creation of table `branches`.
 */
class m171101_125316_create_branches_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('branches', [
            'branch_id' => $this->primaryKey(),
            'companies_company_id' => $this->integer()->unsigned(),
            'branch_name' => $this->string(),
            'branch_address' => $this->string(),
            'branch_created_date' => $this->dateTime(),
            'branch_status' =>  "ENUM('active', 'inactive')",
        ]);

        $this->addForeignKey(
            'fk-branch-companies_company_id',
            'branches',
            'companies_company_id',
            'companies',
            'company_id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-branch-companies_company_id',
            'branches'
        );

        $this->dropTable('branches');
    }
}
