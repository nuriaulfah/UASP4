<?php namespace App\Models;

use CodeIgniter\Model;

class MapelModel3 extends Model
{
    public function getMapel3()
    {
        $querygetMapel3 = "SELECT murid.jk,status, count(*) AS jumlah, mapel.nama_mapel FROM murid LEFT JOIN mapel on mapel.id_mapel = murid.id_mapel group by mapel.nama_mapel, murid.jk, murid.status order by murid.jk asc, jumlah desc";

        $hasil = $this->db->query($querygetMapel3);
        return $hasil->getResultArray();
        
    }
}
?>