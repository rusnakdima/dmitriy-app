<?php

use yii\db\Migration;

/**
 * Class m220701_080837_accounts
 */
class m220701_080837_accounts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220701_080837_accounts cannot be reverted.\n";

        return false;
    }
// Use up()/down() to run migration code without a transaction.
public function up()
{
    $this->createTable('accounts', [
        'id' => $this->primaryKey(),
        'username' => $this->string(45),
        'password' => $this->string(64),
        'email' => $this->string(64),
        'auth_key' => $this->string(255),
        'access_token' => $this->string(255),
    ]);
    $this->insert('accounts', [
        'id' => '1',
        'username' => 'admin',
        'password' => 'admin',
        'email' => 'admin@admin.com',
        'auth_key' => md5(random_bytes(5)),
        'access_token' => password_hash(random_bytes(10), PASSWORD_DEFAULT),
    ]);
}

public function down()
{
    $this->dropTable('accounts');

    return false;
}
}
