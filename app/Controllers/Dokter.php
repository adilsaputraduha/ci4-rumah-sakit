<?php

namespace App\Controllers;

use App\Models\Dokter_model;

class Dokter extends BaseController
{
    public function index()
    {
        $model = new Dokter_model();
        $data['dokter'] = $model->getDokter()->getresultArray();
        echo view('dokter/v_dokter', $data);
    }
    public function save()
    {
        $model = new Dokter_model();
        $data = array(
            'dokter_id' => $this->request->getPost('iddokter'),
            'dokter_nama' => $this->request->getPost('namadokter'),
            'dokter_nohp' => $this->request->getPost('nohpdokter')
        );
        if (!$this->validate([
            'iddokter' => [
                'rules' => 'required|is_unique[table_dokter.dokter_id]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => '{field} Sudah ada'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }

        $model->saveDokter($data);
        return redirect()->to('/dokter');
    }

    public function edit()
    {
        $model = new Dokter_model();
        $id = $this->request->getPost('iddokter');
        $data = array(
            'dokter_nama' => $this->request->getPost('namadokter'),
            'dokter_nohp' => $this->request->getPost('nohpdokter')
        );
        $model->updateDokter($data, $id);
        return redirect()->to('/dokter');
    }

    public function delete()
    {
        $model = new Dokter_model();
        $id = $this->request->getPost('iddokter');
        $model->deleteDokter($id);
        return redirect()->to('/dokter');
    }
}
