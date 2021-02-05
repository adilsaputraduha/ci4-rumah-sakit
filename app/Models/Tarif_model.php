<?php

namespace App\Models;

use CodeIgniter\Model;

class Tarif_model extends Model
{
    public function getTarif()
    {
        $bulder = $this->db->table('tarif');
        return $bulder->get();
    }
}
