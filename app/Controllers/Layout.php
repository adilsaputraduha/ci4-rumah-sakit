<?php

namespace App\Controllers;

class Layout extends BaseController
{
    public function index()
    {
        echo view('layout/beranda');
    }
}
