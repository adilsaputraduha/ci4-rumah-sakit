<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelanggan_model extends Model
{
    public function getPelanggan()
    {
        $bulder = $this->db->table('pelanggan');
        return $bulder->get();
    }
}
