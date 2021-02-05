<?php

namespace App\Models;

use CodeIgniter\Model;

class Ruangan_model extends Model
{
    public function getRuangan()
    {
        $bulder = $this->db->table('table_ruangan');
        return $bulder->get();
    }
    public function saveRuangan($data)
    {
        $query = $this->db->table('table_ruangan')->insert($data);
        return $query;
    }
    public function deleteRuangan($id)
    {
        $query = $this->db->table('table_ruangan')->delete(array('ruangan_id' => $id));
        return $query;
    }
    public function updateRuangan($data, $id)
    {
        $query = $this->db->table('table_ruangan')->update($data, array('ruangan_id' => $id));
        return $query;
    }
}
