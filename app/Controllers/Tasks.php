<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();
        $tasks = $taskModel->getAllTasks('ASC');

        $data = [
            'pageTitle'  => 'All Tasks',
            'activeNav'  => 'tasks',
            'tasks'      => $tasks,
            'totalCount' => count($tasks),
        ];

        return view('pages/tasks', $data);
    }
}
