<?php

namespace App\Controllers;

use App\Models\Pasien_model;

class Pasien extends BaseController
{
    public function index()
    {
        $model = new Pasien_model();
        $data['pasien'] = $model->getPasien()->getresultArray();
        echo view('pasien/v_pasien', $data);
    }

    public function save()
    {
        $model = new Pasien_model();
        $data = array(
            'pasien_id' => $this->request->getPost('idpasien'),
            'pasien_nama' => $this->request->getPost('namapasien'),
            'pasien_alamat' => $this->request->getPost('alamatpasien'),
            'pasien_noruang' => $this->request->getPost('noruangpasien'),
            'pasien_nohp' => $this->request->getPost('nopasien')
        );
        if (!$this->validate([
            'idpasien' => [
                'rules' => 'required|is_unique[table_pasien.pasien_id]',
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
        $model->savePasien($data);
        return redirect()->to('/pasien');
    }
    public function edit()
    {
        $model = new Pasien_model();
        $id = $this->request->getPost('idpasien');
        $data = array(
            'pasien_nama' => $this->request->getPost('namapasien'),
            'pasien_alamat' => $this->request->getPost('alamatpasien'),
            'pasien_noruang' => $this->request->getPost('normpasien'),
            'pasien_nohp' => $this->request->getPost('nohppasien')
        );
        $model->updatePasien($data, $id);
        return redirect()->to('/pasien');
    }

    public function delete()
    {
        $model = new Pasien_model();
        $id = $this->request->getPost('idpasien');
        $model->deletePasien($id);
        return redirect()->to('/pasien');
    }
}
