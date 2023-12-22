<?php

namespace App\Controllers;

class Start extends BaseController
{
    public function index(): string
    {
        return view('Sites/Startseite');
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
}
