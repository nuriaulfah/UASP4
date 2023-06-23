<?php 
namespace App\Controllers;
use App\Models\MapelModel2;

class Mapel2 extends BaseController
{
    function __construct(){
        $this->MapelModel2= new MapelModel2();
    }
    /**
     * index function
     */
    public function index()
    {
        $data['mapel2'] = $this->MapelModel2->getMapel2();
  
        return view('mapel2', $data);

      
      
    }
}
?>