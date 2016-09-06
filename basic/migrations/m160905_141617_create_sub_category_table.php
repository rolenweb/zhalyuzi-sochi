<?php

use yii\db\Migration;

/**
 * Handles the creation for table `sub_category`.
 */
class m160905_141617_create_sub_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sub_category', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'title' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sub_category');
    }
}
