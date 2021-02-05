<?php

namespace App\Models;

use CodeIgniter\Model;

class Rawatinap_model extends Model
{
    public function getDokter()
    {
        $bulder = $this->db->table('table_dokter');
        return $bulder->get();
    }
    public function saveRawatInap($data)
    {
        $query = $this->db->table('table_rawat_inap')->insert($data);
        return $query;
    }
}
