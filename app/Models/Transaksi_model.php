<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi_model extends Model
{
    public function saveTransaksi($data)
    {
        $query = $this->db->table('transaksi')->insert($data);
        return $query;
    }
}
