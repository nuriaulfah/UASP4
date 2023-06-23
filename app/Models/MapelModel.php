<?php namespace App\Models;

use CodeIgniter\Model;

class MapelModel extends Model
{
    public function getMapel()
    {
        $querygetMapel = "SELECT murid.jk, count(*) AS jumlah, mapel.nama_mapel FROM murid LEFT JOIN mapel on mapel.id_mapel = murid.id_mapel group by mapel.nama_mapel, murid.jk order by murid.jk asc, mapel.nama_mapel desc";

        $hasil = $this->db->query($querygetMapel);
        return $hasil->getResultArray();
        
    }
}
?>