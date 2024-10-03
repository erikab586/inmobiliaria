<?php
namespace App\Models;
use CodeIgniter\Model;

class DocContratoModel extends Model
{
    protected $table      = 'inm_doccontrato';
    protected $primaryKey = 'id_doc';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_doc', 'id_contrato', 'documento'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}