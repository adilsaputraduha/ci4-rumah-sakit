<?php

namespace App\Models;

use CodeIgniter\Model;

class Pasien_model extends Model
{
    public function getPasien()
    {
        $bulder = $this->db->table('table_pasien');
        return $bulder->get();
    }
    public function savePasien($data)
    {
        $query = $this->db->table('table_pasien')->insert($data);
        return $query;
    }
    public function deletePasien($id)
    {
        $query = $this->db->table('table_pasien')->delete(array('pasien_id' => $id));
        return $query;
    }
    public function updatePasien($data, $id)
    {
        $query = $this->db->table('table_pasien')->update($data, array('pasien_id' => $id));
        return $query;
    }
}
