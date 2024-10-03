<?php
namespace App\Models;
use CodeIgniter\Model;

class UsoModel extends Model
{
    protected $table      = 'inm_uso';
    protected $primaryKey = 'id_uso';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_uso', 'nombre_uso'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}