<?php
namespace App\Models;
use CodeIgniter\Model;

class PropietarioModel extends Model
{
    protected $table      = 'inm_propietario';
    protected $primaryKey = 'id_propietario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_propietario', 'id_rol', 'codigo_propietario', 'nombres', 'apellidos',
    'rfc', 'cp_fiscal', 'regimen_fiscal','dispensar_ingresos', 'factura', 'codigo_postal', 'email_prin', 
    'email_sec', 'telefono_movil', 'telefono_casa', 'telefono_trabajo', 'telefono2_trabajo', 'banco_deposito',
    'cuenta_clabe', 'titular_cuenta', 'porcentaje', 'instrucciones_pago', 'instrucciones_extras', 'id_pais',
    'id_estado', 'id_municipio', 'colonia', 'ciudad', 'calle', 'numero'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    public function insertar($data)
    {
        $ivaModel= $this->db->table('inm_propietario');
        $ivaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $ivaModel= $this->db->table('inm_propietario');
        $ivaModel->set($data);
        $ivaModel->where('id_propietario',$id);
        return $ivaModel->update();

    }
    public function borrar($id)
    {
        $ivaModel= $this->db->table('inm_propietario');
        $ivaModel->where('id_propietario',$id);
        return $ivaModel->delete();
    }
    
}