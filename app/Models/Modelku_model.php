<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelku_model extends Model
{
    public function getModelku()
    {
        $bulder = $this->db->table('penjualan');
        return $bulder->get();
    }
    public function saveBurung($data)
    {
        $query = $this->db->table('penjualan')->insert($data);
        return $query;
    }
}
