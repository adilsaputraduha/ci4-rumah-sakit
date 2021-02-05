<?php

namespace App\Controllers;

use App\Models\Ruangan_model;

class Ruangan extends BaseController
{
    public function index()
    {
        $model = new Ruangan_model();
        $data['ruangan'] = $model->getRuangan()->getresultArray();
        echo view('ruangan/v_ruangan', $data);
    }
    public function save()
    {
        $model = new Ruangan_model();
        $data = array(
            'ruangan_id' => $this->request->getPost('idruangan'),
            'ruangan_nama' => $this->request->getPost('namaruangan'),
            'ruangan_harga' => $this->request->getPost('hargaruangan'),
            'ruangan_status' => $this->request->getPost('statusruangan')
        );
        $model->saveRuangan($data);
        return redirect()->to('/ruangan');
    }
    public function edit()
    {
        $model = new Ruangan_model();
        $id = $this->request->getPost('idruangan');
        $data = array(
            'ruangan_nama' => $this->request->getPost('namaruangan'),
            'ruangan_harga' => $this->request->getPost('hargaruangan'),
            'ruangan_status' => $this->request->getPost('statusruangan')
        );
        if (!$this->validate([
            'idruangan' => [
                'rules' => 'required|is_unique[table_ruangan.ruangan_id]',
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
        $model->updateRuangan($data, $id);
        return redirect()->to('/ruangan');
    }

    public function delete()
    {
        $model = new Ruangan_model();
        $id = $this->request->getPost('idruangan');
        $model->deleteRuangan($id);
        return redirect()->to('/ruangan');
    }
}
