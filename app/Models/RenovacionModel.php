<?php
namespace App\Models;
use CodeIgniter\Model;

class RenovacionModel extends Model
{
    protected $table      = 'inm_renovacion';
    protected $primaryKey = 'id_renovacion';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_renovacion', 'id_contrato', 'fecha_anterior', 'fecha_renovacion', 'periodo_inicial', 'periodo_final'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}