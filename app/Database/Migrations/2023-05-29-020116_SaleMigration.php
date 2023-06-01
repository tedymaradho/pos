<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SaleMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'sales_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'invoice' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
            ],
            'date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'time' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'grand_total' => [
                'time' => 'FLOAT',
                'null' => true,
            ],
            'paid' => [
                'time' => 'FLOAT',
                'null' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('sales_id', true);
        $this->forge->createTable('tb_sales', true);
    }

    public function down()
    {
        $this->forge->dropTable('tb_sales');
    }
}