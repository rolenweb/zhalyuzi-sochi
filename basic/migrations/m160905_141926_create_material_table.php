<?php

use yii\db\Migration;

/**
 * Handles the creation for table `material`.
 */
class m160905_141926_create_material_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('material', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'title' => $this->string(),
            'code' => $this->string(),
            'price' => $this->float(),
            'unit' => $this->string(),
            'extension' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('material');
    }
}
