<?php
namespace App\Models;
use CodeIgniter\Model;

class TipoGasModel extends Model
{
    protected $table      = 'inm_tipogas';
    protected $primaryKey = 'id_tipogas';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_tipogas', 'descripcion'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}