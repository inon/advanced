<?php

use yii\db\Migration;

/**
 * Handles the creation of table `locations`.
 */
class m171112_084724_create_locations_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('locations', [
            'location_id' => $this->primaryKey(),
            'zip_code' => $this->string(100),
            'city' => $this->string(100),
            'province' => $this->string(100)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('locations');
    }
}
