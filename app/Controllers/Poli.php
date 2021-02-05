<?php

namespace App\Controllers;

use App\Models\Poli_model;

class Poli extends BaseController
{
    public function index()
    {
        $model = new Poli_model();
        $data['poli'] = $model->getPoli()->getresultArray();
        echo view('poli/v_poli', $data);
    }
}
