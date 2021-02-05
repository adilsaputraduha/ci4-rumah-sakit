<?php

namespace App\Models;

use CodeIgniter\Model;

class Registrasi_model extends Model
{
    public function simpan($data)
    {
        $query = $this->db->table('table_users')->insert($data);
        return $query;
    }
}
