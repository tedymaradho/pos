<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'category_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'category_name' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
            ]
        ]);
        $this->forge->addKey('category_id', true);
        $this->forge->createTable('tb_category', true);
    }

    public function down()
    {
        $this->forge->dropTable('tb_category');
    }
}