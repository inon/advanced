<?php

use yii\db\Migration;

/**
 * Handles adding first_name_column_column_last_name to table `user`.
 */
class m171101_061535_add_first_name_column_column_last_name_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'first_name', 'VARCHAR(100) after `id`');
        $this->addColumn('user', 'last_name', 'VARCHAR(100) after `first_name`');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'first_name');
        $this->dropColumn('user', 'last_name');
    }
}
