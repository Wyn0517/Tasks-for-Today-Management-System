<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table            = 'tasks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'status', 'task_date', 'created_at'];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';

    public function getTodayTasks(?string $date = null): array
    {
        $targetDate = $date ?? date('Y-m-d');

        return $this->where('task_date', $targetDate)
                    ->orderBy('id', 'ASC')
                    ->findAll();
    }

    public function getAllTasks(string $direction = 'ASC'): array
    {
        return $this->orderBy('task_date', $direction)
                    ->orderBy('id', 'ASC')
                    ->findAll();
    }
}
