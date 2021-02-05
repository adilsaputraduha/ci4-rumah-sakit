<?php

namespace App\Models;

use CodeIgniter\Model;

class Nomorotomatis_model extends Model
{
    public function buat_kode()
    {
        $this->db->table('table_rawat_inap')->select('RIGHT(rawat_inap_id,4) as kode', FALSE);
        $this->db->table('table_rawat_inap')->orderBy('rawat_inap_id', 'DESC');
        $this->db->table('table_rawat_inap')->limit(1);
        $query = $this->db->table('table_rawat_inap')->get('user');
    }
}
