<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AutomovilModel;


class Automovil extends Controller
{
    public function index()
    {    
        $model = new AutomovilModel();
 
        $data['automoviles_detalles'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('lista', $data);
    } 
    public function create()
    {    
        return view('Agregar');
    }   
    public function AgregarDatos()
    {  
 
        helper(['form', 'url']);
         
        $model = new AutomovilModel();
		
        $data = [
            'Nombre' => $this->request->getVar('txtNombre'),
            'Marca'  => $this->request->getVar('txtMarca'),
            'FechaIngreso'  => $this->request->getVar('txtFecha'),
            'Correo'  => $this->request->getVar('txtCorreo'),
            
            ];
        $save = $model->insert($data);
		return redirect()->to( base_url('/index.php/Automovil') );
    }
    public function editar($id = null)
    {
      
     $model = new AutomovilModel();
 
     $data['automoviles'] = $model->where('id', $id)->first();
 
     return view('editar', $data);
    }


    public function actualizar()
    {  
 
		helper(['form', 'url']);
		 
		$model = new AutomovilModel();

		$id = $this->request->getVar('id');

		 $data = [
            'Nombre' => $this->request->getVar('txtNombre'),
            'Marca'  => $this->request->getVar('txtMarca'),
            'FechaIngreso'  => $this->request->getVar('txtFecha'),
            'Correo'  => $this->request->getVar('txtCorreo'),
			];

	  $save = $model->update($id,$data);

      return redirect()->to( base_url('/index.php/Automovil') );
      }

    public function eliminar($id = null){
		$model = new AutomovilModel();
		$data['automoviles'] = $model->where('id', $id)->delete();
		return redirect()->to( base_url('/index.php/Automovil') );
    }
}


 ?>