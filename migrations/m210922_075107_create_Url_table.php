<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Url}}`.
 */
class m210922_075107_create_Url_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Url}}', [
            'ID' => $this->primaryKey(),
            'UniqueCode' => $this->string(12)->notNull()->unique(),
            'Url' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Url}}');
    }
}
