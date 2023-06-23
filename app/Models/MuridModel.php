<?php namespace App\Models;

use CodeIgniter\Model;

class MuridModel extends Model
{
    /**
     *table name
     */
    protected $table = "murid";

    /**
     * allowed fields
     */
     protected $allowedFields = 
    [
        'id_murid',
        'nama_murid',
        'jk',
        'status',
        'id_mapel',
    ];

    public function getMurid()
    {
        return $this->findAll();
    }
}