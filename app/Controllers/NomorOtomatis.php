<?php

namespace App\Controllers;

use App\Models\Nomorotomatis_model;

class NomorOtomatis extends BaseController
{
    public function index()
    {
        $query = new Nomorotomatis_model();
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada
            $kode = 1;
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "ODJ-9921-" . $kodemax; // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;
        $this->load->view('template/backend', $data);
    }
}
