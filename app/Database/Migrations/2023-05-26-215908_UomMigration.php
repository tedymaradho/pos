<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UomMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'uom_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'uom_name' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
            ]
        ]);
        $this->forge->addKey('uom_id', true);
        $this->forge->createTable('tb_uom', true);
    }

    public function down()
    {
        $this->forge->dropTable('tb_uom');
    }
}