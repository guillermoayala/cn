<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class vwEntregasModel extends Model
{
    protected $table = 'vw_entregas';
 
    protected $allowedFields = ['IdEntrega', 'FechaEntrega','IdEquipo','Placa','NomEquipo','PesoTM','IdIngenio','CodIngenio','NomIngenio'];

}  

?>
