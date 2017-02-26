<?php

use yii\db\Migration;

class m170226_070323_create_language extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%languages}}', [
            'id' => $this->primaryKey(),
            'language' => $this->string(16)->notNull(),
            'local' => $this->string(16)->notNull(),
            'name' => $this->string(16)->notNull(),
            'default' => $this->smallInteger(2)->notNull()->defaultValue(0),
            'date_create' => $this->integer()->notNull(),
            'date_update' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->batchInsert('{{%languages}}', ['local', 'language', 'name', 'default', 'date_create', 'date_update'], [
            ['en', 'en-US', 'English', 0, time(), time()],
            ['ru', 'ru-RU', 'Русский', 1, time(), time()],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%languages}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
