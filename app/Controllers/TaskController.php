<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{

    public function index($title='')
    {
        $taskmodel = new TaskModel();
        $data['tasks'] = $taskmodel->getTasks();
        $data['title'] = 'Startseite';
        echo view('Sites/Startseite', $data);
    }

    public function viewGruppennummer()
    {
        $gruppennummer = 12;
        var_dump($gruppennummer);
    }

    /*
    Statische Seite - nicht mehr in Benutzung

    public function Spalten($title='')
    {
        $data['title'] = 'Spalten';
        return view('Sites/Spalten', $data);
    }

    public function SpalteErstellen()
    {
        $data['title'] = 'Spalte erstellen';
        return view('Sites/SpalteErstellen', $data);
    }
    */

    public function test() {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getAllData();
        var_dump($data);
    }



    // GRUD Funktionen:

    public function __construct() {
        $this->taskmodel = new TaskModel();
    }

    public function crudTasks($id = 0, $todo = 0)
    {
        $taskmodel = new TaskModel();
        $data['personen'] = $taskmodel->getPersonen();
        $data['spalten'] = $taskmodel->getSpalten();
        $data['tasks'] = $taskmodel->getTasks();
        $data['todo'] = $todo;
        switch ($todo) {
            case 0:
                $data['title'] = 'Task erstellen';
                break;
            case 1:
                $data['title'] = 'Task bearbeiten';
                break;
            case 2:
                $data['title'] = 'Task löschen';
                break;
        }

        if($id > 0 && ($todo == 1 || $todo == 2)) {
            $data['update'] = $this->taskmodel->getTask($id);
        }

        echo view('Sites/TaskCRUD', $data);
    }

    public function submitTasks()
    {
        if(isset($_POST['submitTasks'])) {

            if(isset($_POST['id']) && $_POST['id'] != '') {
                $this->taskmodel->updateTask();
            }
            else {
                $this->taskmodel->createTask();
            }
            return redirect()->to(base_url('Startseite'));

        }
        elseif (isset($_POST['deleteTasks'])){
            $this->taskmodel->deleteTask();
            return redirect()->to(base_url('Startseite'));
        }

        return redirect()->to(base_url('Startseite'));
    }
}