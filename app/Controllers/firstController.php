<?php

namespace App\Controllers;

class firstController extends BaseController
{
    public int $gruppe=12;
    public function getviewGruppennummer()
    {
        var_dump($this->gruppe);
    }
}
