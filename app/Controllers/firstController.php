<?php

namespace App\Controllers;

class firstController extends BaseController
{
    public int $gruppe=12;
    public function getviewGruppennummer()
    {
        var_dump($this->gruppe);
    }

    public function getViews()
    {
        echo view('templates/Head');
        echo view('templates/Nav');
        echo view('templates/Footer');
    }
}

