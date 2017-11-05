<?php

use yii\db\Migration;

/**
 * Handles adding logo to table `companies`.
 */
class m171105_010211_add_logo_column_to_companies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('companies', 'logo', 'string after company_address');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('companies', 'logo');
    }
}
