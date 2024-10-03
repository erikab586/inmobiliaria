<?php
namespace App\Models;
use CodeIgniter\Model;

class MunicipioModel extends Model
{
    protected $table      = 'inm_municipio';
    protected $primaryKey = 'id_municipio';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_municipio', 'nombre_municipio', 'id_estado'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}