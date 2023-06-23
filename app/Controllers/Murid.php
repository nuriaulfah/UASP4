<?php 
namespace App\Controllers;
use App\Models\MuridModel;

class Murid extends BaseController
{
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $Murids = new MuridModel();
		$pager = \Config\Services::pager();

        $data = array(
            'murids' => $Murids->paginate(100, 'murid'),
            'pager' => $Murids->joins
        );
	//var_dump($data);
		
        return view('murid', $data);

      
      
    }
}