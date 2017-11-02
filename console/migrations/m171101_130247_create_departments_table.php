<?php

use yii\db\Migration;

/**
 * Handles the creation of table `departments`.
 * Has foreign keys to the tables:
 *
 * - `companies_company`
 */
class m171101_130247_create_departments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('departments', [
            'department_id' => $this->primaryKey(),
            'branches_branch_id' => $this->integer(),
            'department_name' => $this->string(),
            'companies_company_id' => $this->integer()->unsigned(),
            'department_created_date' => $this->datetime(),
            'department_status' =>  "ENUM('active', 'inactive')",
        ]);

        // creates index for column `companies_company_id`
        $this->createIndex(
            'idx-departments-companies_company_id',
            'departments',
            'companies_company_id'
        );

        // add foreign key for table `companies_company`
        $this->addForeignKey(
            'fk-departments-companies_company_id',
            'departments',
            'companies_company_id',
            'companies',
            'company_id',
            'CASCADE'
        );

        // add foreign key for table `companies_company`
        $this->addForeignKey(
            'fk-departments-branches_branch_id',
            'departments',
            'branches_branch_id',
            'branches',
            'branch_id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `companies_company`
        $this->dropForeignKey(
            'fk-departments-companies_company_id',
            'departments'
        );

        // drops index for column `companies_company_id`
        $this->dropIndex(
            'idx-departments-companies_company_id',
            'departments'
        );

        $this->dropTable('departments');
    }
}
