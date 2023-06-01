<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
            ],
            'level' => [
                'type' => 'INT',
                'constraint' => 1,
            ]
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('tb_user', true);
    }

    public function down()
    {
        $this->forge->dropTable('tb_user');
    }
}