<?php
namespace App\Models;
use CodeIgniter\Model;

class PaisModel extends Model
{
    protected $table      = 'inm_pais';
    protected $primaryKey = 'id_pais';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_pais', 'nombre_pais'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}