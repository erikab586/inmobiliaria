<?php
namespace App\Models;
use CodeIgniter\Model;

class RolesModel extends Model
{
    protected $table      = 'inm_roles';
    protected $primaryKey = 'id_rolU';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_rolU', 'descripcion_rol'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function insertar($data)
    {
        $rolesModel= $this->db->table('inm_roles');
        $rolesModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $rolesModel= $this->db->table('inm_roles');
        $rolesModel->set($data);
        $rolesModel->where('id_rolU',$id);
        return $rolesModel->update();

    }
    public function borrar($id)
    {
        $rolesModel= $this->db->table('inm_roles');
        $rolesModel->where('id_rolU',$id);
        return $rolesModel->delete();
    }

    
}