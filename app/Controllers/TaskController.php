<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getTasksByBoard(1);
        echo view('Pages/Startseite', $data);
    }
}