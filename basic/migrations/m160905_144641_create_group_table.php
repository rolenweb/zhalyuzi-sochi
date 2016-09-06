<?php

use yii\db\Migration;

/**
 * Handles the creation for table `group`.
 */
class m160905_144641_create_group_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('group', [
            'id' => $this->primaryKey(),
            'sub_category_id' => $this->integer(),
            'title' => $this->string(),
            'structure' => $this->string(),
            'density' => $this->string(),
            'composition' => $this->string(),
            'cleaning' => $this->string(),
            'country' => $this->string(),
            'price' => $this->float(),
            'max_height' => $this->float(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('group');
    }
}
