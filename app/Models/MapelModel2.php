<?php namespace App\Models;

use CodeIgniter\Model;

class MapelModel2 extends Model
{
    public function getMapel2()
    {
        $querygetMapel2 = "SELECT * FROM mapel";

        $hasil = $this->db->query($querygetMapel2);
        return $hasil->getResultArray();
        
    }
}
?>