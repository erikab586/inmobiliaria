<?php
namespace App\Models;
use CodeIgniter\Model;

class TipoModel extends Model
{
    protected $table      = 'inm_tipo';
    protected $primaryKey = 'id_tipo';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_tipo', 'nombre_tipo'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}