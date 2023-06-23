<?php 
namespace App\Controllers;
use App\Models\MapelModel;

class Mapel extends BaseController
{
    function __construct(){
        $this->MapelModel= new MapelModel();
    }
    /**
     * index function
     */
    public function index()
    {
        $data['mapel'] = $this->MapelModel->getMapel();
  
        return view('mapel', $data);

      
      
    }
}
?>