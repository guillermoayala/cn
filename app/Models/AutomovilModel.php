<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class AutomovilModel extends Model
{
    protected $table = 'automoviles';
 
    protected $allowedFields = ['Nombre','Marca','FechaIngreso','Correo'];
}
?>