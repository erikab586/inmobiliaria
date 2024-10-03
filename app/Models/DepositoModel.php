<?php
namespace App\Models;
use CodeIgniter\Model;

class DepositoModel extends Model
{
    protected $table      = 'inm_deposito';
    protected $primaryKey = 'id_deposito';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_deposito', 'id_contrato', 'referencia', 'digito_nuevo', 'digito_verificador',
    'homo_clave', 'dir_documento', 'dir_contrato', 'sub_02'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}