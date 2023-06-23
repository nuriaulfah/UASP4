<?php 
namespace App\Controllers;
use App\Models\MapelModel3;

class Mapel3 extends BaseController
{
    function __construct(){
        $this->MapelModel3= new MapelModel3();
    }
    /**
     * index function
     */
    public function index()
    {
        $data['mapel3'] = $this->MapelModel3->getMapel3();
  
        return view('mapel3', $data);

      
      
    }
}
?>