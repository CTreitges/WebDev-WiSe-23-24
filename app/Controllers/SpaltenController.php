<?php

namespace App\Controllers;

use App\Models\SpaltenModel;

class SpaltenController extends BaseController
{

    public function index($title='')
    {
        $spaltenmodel = new SpaltenModel();
        $data['spalten'] = $spaltenmodel->getSpalten();
        $data['title'] = 'Spalten';
        echo view('Sites/Spalten', $data);
    }



    //CRUD Funktionen:

    public function __construct() {
        $this->spaltenmodel = new SpaltenModel();
    }

    public function crudSpalten($id = 0, $todo = 0)
    {
        $spaltenmodel = new SpaltenModel();
        $data['spalten'] = $spaltenmodel->getSpalten();
        $data['boards'] = $spaltenmodel->getBoards();
        $data['todo'] = $todo;
        switch ($todo) {
            case 0:
                $data['title'] = 'Spalte erstellen';
                break;
            case 1:
                $data['title'] = 'Spalte bearbeiten';
                break;
            case 2:
                $data['title'] = 'Spalte löschen';
                break;
        }

        if($id > 0 && ($todo == 1 || $todo == 2)) {
            $data['update'] = $this->spaltenmodel->getSpalte($id);
        }

        echo view('Sites/SpaltenCRUD', $data);
    }

    public function submitSpalten()
    {
        $validation = \Config\Services::validation();
        if(isset($_POST['submitSpalten'])) {

            if (isset($_POST['id']) && $_POST['id'] != '') {
                $id = $_POST['id'];
            }

            if ($validation->run($_POST,'spaltenbearbeiten')) {

                if (isset($_POST['id']) && $_POST['id'] != '') {
                    $this->spaltenmodel->updateSpalte();
                } else {
                    $this->spaltenmodel->createSpalte();
                }
                return redirect()->to(base_url('Spalten'));

            } else {
                $spaltenmodel = new SpaltenModel();
                $data['spalten'] = $spaltenmodel->getSpalten();
                $data['boards'] = $spaltenmodel->getBoards();
                $data['error'] = $this->validation->getErrors();

                if (isset($_POST['id']) && $_POST['id'] != '') {
                    $data['title'] = 'Spalte bearbeiten';
                    $data['todo'] = 1;
                    $data['update'] = $this->spaltenmodel->getSpalte($id);
                } else {
                    $data['title'] = 'Spalte erstellen';
                    $data['todo'] = 0;
                }

                echo view('Sites/SpaltenCRUD', $data);
            }

        }
        elseif (isset($_POST['deleteSpalten'])){
            $this->spaltenmodel->deleteSpalte();
            return redirect()->to(base_url('Spalten'));
        }
    }

}