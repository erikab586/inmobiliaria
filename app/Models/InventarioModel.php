<?php
namespace App\Models;
use CodeIgniter\Model;

class InventarioModel extends Model
{
    protected $table      = 'inm_inventario';
    protected $primaryKey = 'id_inventario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_invetario', 'id_unidad', 'descripcion', 'cantidad',
    'fecha_inventario'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}