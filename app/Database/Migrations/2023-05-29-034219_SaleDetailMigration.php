<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SaleDetailMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'detail_id' => [
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
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'selling_price' => [
                'type' => 'FLOAT',
                'null' => true,
            ],
            'qty' => [
                'type' => 'INT',
                'constraint' => 32,
                'null' => true,
            ],
            'total_price' => [
                'type' => 'FLOAT',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('detail_id', true);
        $this->forge->createTable('tb_sale_detail', true);
    }

    public function down()
    {
        $this->forge->dropTable('tb_sale_detail');
    }
}