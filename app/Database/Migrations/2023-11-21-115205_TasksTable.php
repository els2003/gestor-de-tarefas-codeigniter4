<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TasksTable extends Migration
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
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true
            ],
            'task_name' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'task_description' => [
                'type' => 'VARCHAR',
                'constraint' => '500',
                'null' => true
            ],
            'task_status' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
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
        $this->forge->createTable('tasks');
    }

    public function down()
    {
        // delete table
        $this->forge->dropTable('tasks');
    }
}
