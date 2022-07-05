<?php

use yii\db\Migration;

class m220705_175631_accounts extends Migration
{
    public function safeUp(){
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

    public function safeDown(){
        $this->dropTable('accounts');
        return false;
    }
    public function up(){}

    public function down(){}
}
