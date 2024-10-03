<?php
namespace App\Models;
use CodeIgniter\Model;

class ConceptoModel extends Model
{
    protected $table      = 'inm_concepto';
    protected $primaryKey = 'id_concepto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_concepto', 'cod_concepto', 'descripcion'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function insertar($data)
    {
        $ivaModel= $this->db->table('inm_concepto');
        $ivaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $ivaModel= $this->db->table('inm_concepto');
        $ivaModel->set($data);
        $ivaModel->where('id_concepto',$id);
        return $ivaModel->update();

    }
    public function borrar($id)
    {
        $ivaModel= $this->db->table('inm_concepto');
        $ivaModel->where('id_concepto',$id);
        return $ivaModel->delete();
    }
}