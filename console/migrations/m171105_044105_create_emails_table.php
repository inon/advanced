<?php

use yii\db\Migration;

/**
 * Handles the creation of table `emails`.
 */
class m171105_044105_create_emails_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('emails', [
            'id' => $this->primaryKey(),
            'receiver_name' => $this->string(),
            'receiver_email' => $this->string(),
            'content' => $this->text(),
            'attachment' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('emails');
    }
}
