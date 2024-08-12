<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TasksSeeder extends Seeder
{
    public function run()
    {
        // create 10 tasks
        $tasks = [
            [
                'id_user' => 1,
                'task_name' => 'Task 1',
                'task_description' => 'Task 1 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 1,
                'task_name' => 'Task 2',
                'task_description' => 'Task 2 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 1,
                'task_name' => 'Task 3',
                'task_description' => 'Task 3 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 2,
                'task_name' => 'Task 4',
                'task_description' => 'Task 4 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 2,
                'task_name' => 'Task 5',
                'task_description' => 'Task 5 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 2,
                'task_name' => 'Task 6',
                'task_description' => 'Task 6 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 3,
                'task_name' => 'Task 7',
                'task_description' => 'Task 7 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 3,
                'task_name' => 'Task 8',
                'task_description' => 'Task 8 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 3,
                'task_name' => 'Task 9',
                'task_description' => 'Task 9 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 3,
                'task_name' => 'Task 10',
                'task_description' => 'Task 10 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        // insert all tasks
        $this->db->table('tasks')->insertBatch($tasks);
    }
}
