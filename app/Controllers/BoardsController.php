<?php

namespace App\Controllers;

use App\Models\BoardsModel;

class BoardsController extends BaseController
{

    public function index($title='')
    {
        $boardsmodel = new BoardsModel();
        $data['boards'] = $boardsmodel->getBoards();
        $data['title'] = 'Boards';
        echo view('Sites/Boards', $data);
    }



    //CRUD Funktionen:

    public function __construct() {
        $this->boardsmodel = new BoardsModel();
    }

    public function crudBoards($id = 0, $todo = 0)
    {
        $boardsmodel = new BoardsModel();
        $data['boards'] = $boardsmodel->getBoards();
        $data['todo'] = $todo;
        switch ($todo) {
            case 0:
                $data['title'] = 'Board erstellen';
                break;
            case 1:
                $data['title'] = 'Board bearbeiten';
                break;
            case 2:
                $data['title'] = 'Board löschen';
                break;
        }

        if($id > 0 && ($todo == 1 || $todo == 2)) {
            $data['update'] = $this->boardsmodel->getBoard($id);
        }

        echo view('Sites/BoardsCRUD', $data);
    }

    public function submitBoards()
    {
        if(isset($_POST['submitBoards'])) {

            if(isset($_POST['id']) && $_POST['id'] != '') {
                $this->boardsmodel->updateBoard();
            }
            else {
                $this->boardsmodel->createBoard();
            }
            return redirect()->to(base_url('Boards'));

        }
        elseif (isset($_POST['deleteBoards'])){
            $this->boardsmodel->deleteBoard();
            return redirect()->to(base_url('Boards'));
        }

        return redirect()->to(base_url('Boards'));
    }

}