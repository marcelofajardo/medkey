<?php

use app\common\db\Migration;

/**
 * Class m190227_192117_locale_user
 */
class m190227_192117_locale_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addBothColumns('{{%user}}', 'language', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropBothColumns('{{%user}}', 'language');
    }
}
