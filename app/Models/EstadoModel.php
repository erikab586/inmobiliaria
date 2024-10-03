<?php
namespace App\Models;
use CodeIgniter\Model;

class EstadoModel extends Model
{
    protected $table      = 'inm_estado';
    protected $primaryKey = 'id_estado';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_estado', 'id_pais', 'descripcion'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}