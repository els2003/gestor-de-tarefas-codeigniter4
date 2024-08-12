<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuariosTable extends Migration
{
    public function up()
    {
        // columns
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        // primary key
        $this->forge->addPrimaryKey('id');

        // created table 
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        // delete table
        $this->forge->dropTable('usuarios');
    }
}
