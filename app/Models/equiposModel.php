<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class equiposModel extends Model
{
    protected $table = 'equipos';
 
    protected $allowedFields = ['Placa', 'Nombre'];
   
}  

?>