<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\vwEntregasModel;


class vw_entregas extends Controller
{ 
    public function index()
    {    
        $model = new vwEntregasModel();
        $data['vw_entregas'] = $model->orderBy('idEntrega', 'DESC')->FindAll();
        return view('estructura/header').view('vw_entregas',$data);
    }
  
}


