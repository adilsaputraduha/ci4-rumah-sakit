<?php

namespace App\Controllers;

use App\Models\Dokter_model;
use App\Models\Pasien_model;
use App\Models\Ruangan_model;
use App\Models\Poli_model;
use App\Models\Rawatinap_model;

class Rawatinap extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        $model = new Dokter_model();
        $model1 = new Pasien_model();
        $model2 = new Poli_model();
        $model3 = new Ruangan_model();
        $data['dokter'] = $model->getDokter()->getresultArray();
        $data['pasien'] = $model1->getPasien()->getresultArray();
        $data['poli'] = $model2->getPoli()->getresultArray();
        $data['ruangan'] = $model3->getRuangan()->getresultArray();
        echo view('rawatinap/v_rawatinap', $data);
    }
    public function simpan()
    {
        $model = new Dokter_model();
        $model1 = new Pasien_model();
        $model2 = new Poli_model();
        $model3 = new Ruangan_model();
        $modelrawatinap = new Rawatinap_model();

        $data = array(
            'rawat_inap_id' => $this->request->getVar('idrawat'),
            'rawat_inap_id_dokter' => $this->request->getVar('kodedokter'),
            'rawat_inap_id_pasien' => $this->request->getVar('kodepasien'),
            'rawat_inap_id_poli' => $this->request->getVar('kodepoli'),
            'rawat_inap_id_ruangan' => $this->request->getVar('koderuangan'),
            'rawat_inap_tgl_masuk' => $this->request->getVar('tglmasuk'),
            'rawat_inap_tgl_keluar' => $this->request->getVar('tglkeluar'),
            'rawat_inap_catatan_medis' => $this->request->getVar('cttmedis')
        );

        $modelrawatinap->saveRawatInap($data);
        return redirect()->to('/rawatinap');
    }
}
