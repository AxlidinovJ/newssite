<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%salom}}`.
 */
class m220117_120707_create_salom_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%salom}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%salom}}');
    }
}
