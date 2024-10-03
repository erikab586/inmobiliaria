<?php
namespace App\Models;
use CodeIgniter\Model;

class RegistroContableModel extends Model
{
    protected $table      = 'inm_registrocontable';
    protected $primaryKey = 'id_registo';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_registro', 'id_propietario', 'id_inmueble', 'id_unidad', 'fecha', 'referencia', 'folio'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}