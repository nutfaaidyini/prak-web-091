<?php

use yii\db\Migration;

/**
 * Class m230530_055322_mahasiswa091
 */
class m230530_055322_mahasiswa091 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa091}}', [
            'id091' => $this->primaryKey(),
            'nim091' => $this->string(25)->notNull()->unique(),
            'nama091' => $this->string(225)->notNull(),
            'kelas091' => $this->string(10)->notNull(),
            'status091' => $this->string(50)->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_055322_mahasiswa091 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_055322_mahasiswa091 cannot be reverted.\n";

        return false;
    }
    */
}
