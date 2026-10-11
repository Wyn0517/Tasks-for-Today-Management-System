<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tasks');

        // Prevent duplicates on re-run
        $builder->truncate();

        $today     = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $tomorrow  = date('Y-m-d', strtotime('+1 day'));
        $future    = date('Y-m-d', strtotime('+3 days'));
        $now       = date('Y-m-d H:i:s');

        $tasks = [
            // Yesterday's tasks (2 tasks)
            [
                'title'      => 'Review IT0049 lecture notes on MVC architecture',
                'status'     => 'completed',
                'task_date'  => $yesterday,
                'created_at' => $now,
            ],
            [
                'title'      => 'Configure local XAMPP Apache and MySQL server',
                'status'     => 'completed',
                'task_date'  => $yesterday,
                'created_at' => $now,
            ],

            // Today's tasks (4 tasks) - Must match today's date dynamically
            [
                'title'      => 'Implement TaskModel and UserModel with database queries',
                'status'     => 'in_progress',
                'task_date'  => $today,
                'created_at' => $now,
            ],
            [
                'title'      => 'Design responsive UI for Welcome and Task List views',
                'status'     => 'in_progress',
                'task_date'  => $today,
                'created_at' => $now,
            ],
            [
                'title'      => 'Verify date filtering query for Welcome page',
                'status'     => 'pending',
                'task_date'  => $today,
                'created_at' => $now,
            ],
            [
                'title'      => 'Test mobile layout and keyboard accessibility navigation',
                'status'     => 'pending',
                'task_date'  => $today,
                'created_at' => $now,
            ],

            // Tomorrow's tasks (2 tasks)
            [
                'title'      => 'Prepare technical documentation and submission report',
                'status'     => 'pending',
                'task_date'  => $tomorrow,
                'created_at' => $now,
            ],
            [
                'title'      => 'Review database normalization and query performance',
                'status'     => 'pending',
                'task_date'  => $tomorrow,
                'created_at' => $now,
            ],

            // Future tasks (2 tasks)
            [
                'title'      => 'Submit IT0049 Web Systems Laboratory Activity on LMS',
                'status'     => 'pending',
                'task_date'  => $future,
                'created_at' => $now,
            ],
            [
                'title'      => 'Conduct peer code review and repository backup',
                'status'     => 'pending',
                'task_date'  => $future,
                'created_at' => $now,
            ],
        ];

        $builder->insertBatch($tasks);
    }
}
