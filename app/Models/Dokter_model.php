<?php

namespace App\Models;

use CodeIgniter\Model;

class Dokter_model extends Model
{
    public function getDokter()
    {
        $bulder = $this->db->table('table_dokter');
        return $bulder->get();
    }
    public function saveDokter($data)
    {
        $query = $this->db->table('table_dokter')->insert($data);
        return $query;
    }
    public function deleteDokter($id)
    {
        $query = $this->db->table('table_dokter')->delete(array('dokter_id' => $id));
        return $query;
    }
    public function updateDokter($data, $id)
    {
        $query = $this->db->table('table_dokter')->update($data, array('dokter_id' => $id));
        return $query;
    }
}
