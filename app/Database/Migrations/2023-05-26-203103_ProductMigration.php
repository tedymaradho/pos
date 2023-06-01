<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
            ],
            'buying_price' => [
                'type' => 'float',
                'null' => true,
            ],
            'selling_price' => [
                'type' => 'float',
                'null' => true,
            ],
            'stock' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'category_id' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'uom_id' => [
                'type' => 'INT',
                'constraint' => 3,
            ]
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('tb_product', true);
    }

    public function down()
    {
        $this->forge->dropTable('tb_product');
    }
}