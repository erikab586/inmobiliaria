<?php
namespace App\Models;
use CodeIgniter\Model;

class InquilinoModel extends Model
{
    protected $table      = 'inm_inquilino';
    protected $primaryKey = 'id_inquilino';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_inquilino', 'nombres', 'apellidos', 'rfc', 'email', 'telefono_movil',
    'telefono_local','telefono_local2'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}