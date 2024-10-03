<?php
namespace App\Models;
use CodeIgniter\Model;

class ComisionModel extends Model
{
    protected $table      = 'inm_comision';
    protected $primaryKey = 'id_comision';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_comision', 'id_inmueble', 'comision', 'apl_honorario', 'com_renta'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}