<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\entregasModel;


class Entregas extends Controller
{ 
    
	protected $Entrega;

	public function __construct()
	{
         $this->entrega = new entregasModel();
         $this->load->model('entregasModel', 'entregasModel');
	}
    public function index()
    {    
        
        $model = new entregasModel();
        $data['entregas'] = $this->entregasModel->FindAll();
        return view('estructura/header').view('entregas',$data);
    }
    public function create()
    {    
        return view('create-entrega');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new entregasModel();
 
        $data = [
 
            'FechaEntrega' => $this->request->getVar('FechaEntrega'),
            'IdIngenio'  => $this->request->getVar('IdIngenio'),
            'IdEquipo'  => $this->request->getVar('IdEquipo'),
            'PesoTM'  => $this->request->getVar('PesoTM'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('/index.php/Entregas') );
    }
    public function test()
	{
		$data = $this->entrega->findAll();
		return json_encode($data);
	}
  
  

   

}


