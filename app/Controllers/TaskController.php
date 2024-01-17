<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getTasksByBoard('1');
        echo view('Sites/Startseite', $data);
    }

    public function viewGruppennummer()
    {
        $gruppennummer = 12;
        var_dump($gruppennummer);
    }

    public function Spalten()
    {
        return view('Sites/Spalten');
    }

    public function SpalteErstellen() {
        return view('Sites/SpalteErstellen');
    }

    public function TaskErstellen() {
        return view('Sites/TaskErstellen');
    }

    public function TaskBearbeiten() {
        return view('Sites/TaskBearbeiten');
    }

    public function CreateTask() {
        $TaskModel = new TaskModel();
//        echo '<pre>';
//        var_dump($_POST);
//        echo '</pre>';
//        die();
        $TaskModel->save($_POST);
        return redirect()->to(base_url().'/Startseite');
    }

    public function test() {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getAllData();
        var_dump($data);
    }
}