<?php

use yii\db\Migration;

/**
 * Handles adding subject to table `emails`.
 */
class m171105_044242_add_subject_column_to_emails_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('emails', 'subject', ' varchar(100) after receiver_email');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('emails', 'subject');
    }
}
