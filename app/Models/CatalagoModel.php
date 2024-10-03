<?php
namespace App\Models;
use CodeIgniter\Model;

class CatalagoModel extends Model
{
    protected $table      = 'inm_catalago';
    protected $primaryKey = 'id_catalago';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_catalago', 'id_usuario', 'nombres', 'apellidos',
    'departamento', 'concepto'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}