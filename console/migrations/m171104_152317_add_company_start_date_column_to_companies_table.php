<?php

use yii\db\Migration;

/**
 * Handles adding company_start_date to table `companies`.
 */
class m171104_152317_add_company_start_date_column_to_companies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('companies', 'company_start_date', $this->date());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('companies', 'company_start_date');
    }
}
