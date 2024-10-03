<?php
namespace App\Models;
use CodeIgniter\Model;

class CobranzaModel extends Model
{
    protected $table      = 'inm_cobranza';
    protected $primaryKey = 'id_cobranza';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_propietario','id_inmueble', 'id_unidad', 'id_inquilino', 'fecha','folio','concepto','periodo','cv_periodo','cv_concepto','cobranza','abono','mora','convenio'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function insertar($data)
    {
        $cobranzaModel= $this->db->table('inm_cobranza');
        $cobranzaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $cobranzaModel= $this->db->table('inm_cobranza');
        $cobranzaModel->set($data);
        $cobranzaModel->where('id_cobranza',$id);
        return $cobranzaModel->update();

    }
    public function borrar($id)
    {
        $cobranzaModel= $this->db->table('inm_cobranza');
        $cobranzaModel->where('id_cobranza',$id);
        return $cobranzaModel->delete();
    }
    
    
}