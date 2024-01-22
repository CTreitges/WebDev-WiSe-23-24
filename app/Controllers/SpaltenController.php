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

}