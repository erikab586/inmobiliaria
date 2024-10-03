<?php
namespace App\Models;
use CodeIgniter\Model;

class UnidadModel extends Model
{
    protected $table      = 'inm_unidad';
    protected $primaryKey = 'id_unidad';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_unidad', 'codigo_unidad', 'id_inmueble', 'id_tipo', 'dim_terreno', 'dim_construccion',
    'recamaras', 'closets', 'baños', 'medios_baños', 'estudios', 'area_servicio', 'cuartos_servicio',
    'estacionamiento', 'num_estacionamiento', 'cocina_equipada', 'piso_nivel', 'num_plantas',
    'tipo_jardin', 'antiguedad', 'tipo_piso', 'amenidades', 'cisterna', 'vigilancia', 'cant_elevadores',
    'otras_caracteristicas'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function insertar($data)
    {
        $ivaModel= $this->db->table('inm_unidad');
        $ivaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $ivaModel= $this->db->table('inm_unidad');
        $ivaModel->set($data);
        $ivaModel->where('id_unidad',$id);
        return $ivaModel->update();

    }
    public function borrar($id)
    {
        $ivaModel= $this->db->table('inm_unidad');
        $ivaModel->where('id_unidad',$id);
        return $ivaModel->delete();
    }

}