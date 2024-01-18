<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index($title='')
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getTasksByBoard('1');
        $data['title'] = 'Task Board | Startseite';
        echo view('Sites/Startseite', $data);
    }

    public function viewGruppennummer()
    {
        $gruppennummer = 12;
        var_dump($gruppennummer);
    }

    public function Spalten($title='')
    {
        $data['title'] = 'Task Board | Spalten';
        return view('Sites/Spalten', $data);
    }

    public function SpalteErstellen($title='') {
        $data['title'] = 'Task Board | Spalte erstellen';
        return view('Sites/SpalteErstellen', $data);
    }

    public function TaskErstellen($title='') {
        $data['title'] = 'Task Board | Task erstellen';
        return view('Sites/TaskErstellen', $data);
    }

    public function TaskBearbeiten($title='') {
        $data['title'] = 'Task Board | Task bearbeiten';
        return view('Sites/TaskBearbeiten', $data);
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