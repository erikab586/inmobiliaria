<?php
namespace App\Models;
use CodeIgniter\Model;

class InmuebleModel extends Model
{
    protected $table      = 'inm_inmueble';
    protected $primaryKey = 'id_inmueble';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_inmueble', 'codigo_inmueble', 'num_ext', 'num_int', 'numero',
    'calle', 'ciudad', 'colonia', 'id_municipio', 'id_estado', 'id_pais', 'codigo_postal', 'referencia',
    'enseña', 'transporte', 'unidades', 'id_uso', 'id_tipo','id_adminitrador', 'id_propietario'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function insertar($data)
    {
        $ivaModel= $this->db->table('inm_inmueble');
        $ivaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $ivaModel= $this->db->table('inm_inmueble');
        $ivaModel->set($data);
        $ivaModel->where('id_inmueble',$id);
        return $ivaModel->update();

    }
    public function borrar($id)
    {
        $ivaModel= $this->db->table('inm_inmueble');
        $ivaModel->where('id_inmueble',$id);
        return $ivaModel->delete();
    }

}