<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ingeniosModel extends Model
{
    protected $table = 'ingenios';
 
    protected $allowedFields = ['Codigo', 'Nombre'];
   
}  

?>