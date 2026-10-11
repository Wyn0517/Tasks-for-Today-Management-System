<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();
        $today = date('Y-m-d');
        $tasks = $taskModel->getTodayTasks($today);

        $data = [
            'pageTitle'    => "Today's Tasks",
            'activeNav'    => 'home',
            'todayDate'    => $today,
            'todayDisplay' => date('l, F j, Y'),
            'tasks'        => $tasks,
        ];

        return view('pages/welcome', $data);
    }
}
