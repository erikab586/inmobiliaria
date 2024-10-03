<?php
namespace App\Models;
use CodeIgniter\Model;


class IvaModel extends Model
{
    protected $table      = 'inm_iva';
    protected $primaryKey = 'id_iva';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_iva', 'porcentaje'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function insertar($data)
    {
        $ivaModel= $this->db->table('inm_iva');
        $ivaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $ivaModel= $this->db->table('inm_iva');
        $ivaModel->set($data);
        $ivaModel->where('id_iva',$id);
        return $ivaModel->update();

    }
    public function borrar($id)
    {
        $ivaModel= $this->db->table('inm_iva');
        $ivaModel->where('id_iva',$id);
        return $ivaModel->delete();
    }
    
}