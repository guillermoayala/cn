<?php namespace App\Controllers;

class HolaMundo extends BaseController
{
	public function index()
	{
        $data['Nombre'] = 'Ejemplo de Arrays';
		return view('Vista_Hola_Mundo',$data);
    }
    
    public function Otra_Vista(){
        $data = array();
        return view('Otra_Vista',$data);
    }

    
   

	//--------------------------------------------------------------------

}
