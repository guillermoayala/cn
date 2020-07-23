<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class entregasModel extends Model
{
    protected $table = 'entregas';

    protected $allowedFields = ['FechaEntrega', 'IdIngenio', 'IdEquipo', 'PesoTM'];

    function __construct()
    {
        parent::__Construct();
    }

    function obtenerEntregas()
    {
        $querye = $this->db->query('SELECT * FROM ingenios');

        if ($querye->num_rows() > 0) {
            foreach ($querye->result() as $row)
                $arrayEntregas[htmlspecialchars($row->rfc, ENT_QUOTES)] = htmlspecialchars($row->rfc, ENT_QUOTES);
            $querye->free_result();
            return $querye;
        }
    }

    public function finAll()
    {
        $this->db->select();
    }

    public function listarEntregas()
    {
        $entregas = $this->db->query("SELECT p.IdEntrega,p.FechaEntrega,e.Nombre,i.Nombre FROM entregas AS p, equipos AS e, ingenios AS i WHERE p.IdEquipo = e.IdEquipo AND p.IdEquipo = i.IdIngenio");
        return $entregas();
    }
}
