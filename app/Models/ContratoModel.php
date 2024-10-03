<?php
namespace App\Models;
use CodeIgniter\Model;

class ContratoModel extends Model
{
    protected $table      = 'inm_contrato';
    protected $primaryKey = 'id_contrato';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_propietario','id_inmueble', 'id_unidad', 'id_inquilino', 'fecha_contrato',
    'dia_pago', 'renta_inicial', 'incremento', 'cond_incremento', 'renta_actual', 'monto_renta', 'estatus_servicios',
    'fecha_terminoContrato', 'iva', 'retencion_isr'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function insertar($data)
    {
        $contratoModel= $this->db->table('inm_contrato');
        $contratoModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $contratoModel= $this->db->table('inm_contrato');
        $contratoModel->set($data);
        $contratoModel->where('id_contrato',$id);
        return $contratoModel->update();

    }
    public function borrar($id)
    {
        $contratoModel= $this->db->table('inm_contrato');
        $contratoModel->where('id_contrato',$id);
        return $contratoModel->delete();
    }

}