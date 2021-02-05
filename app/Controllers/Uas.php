<?php

namespace App\Controllers;

use App\Models\Pelanggan_model;
use App\Models\Tarif_model;
use App\Models\Transaksi_model;

class Uas extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        $model = new Pelanggan_model();
        $model1 = new Tarif_model();
        $data['pelanggan'] = $model->getPelanggan()->getresultArray();
        $data['tarif'] = $model1->getTarif()->getresultArray();
        echo view('uas/v_uas', $data);
    }
    public function simpan()
    {
        $model = new Pelanggan_model();
        $model1 = new Tarif_model();
        $modelt = new Transaksi_model();

        $data = array(
            'idt' => $this->request->getVar('idt'),
            'idpel' => $this->request->getVar('idpel'),
            'idharga' => $this->request->getVar('idtarif'),
            'meterblnini' => $this->request->getVar('mtrini'),
            'meterblnlalu' => $this->request->getVar('mtrlalu')
        );

        $modelt->saveTransaksi($data);
        return redirect()->to('/uas');
    }
}
