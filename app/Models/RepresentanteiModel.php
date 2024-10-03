<?php
namespace App\Models;
use CodeIgniter\Model;

class PaisModel extends Model
{
    protected $table      = 'inm_representantei';
    protected $primaryKey = 'id_representantei';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_representantei', 'id_inquilino', 'nombres', 'apellidos',
    'dni', 'telefono_movil'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}