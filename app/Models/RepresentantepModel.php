<?php
namespace App\Models;
use CodeIgniter\Model;

class RepresentantepModel extends Model
{
    protected $table      = 'inm_representantep';
    protected $primaryKey = 'id_representante';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_representante', 'id_propietario', 'id_rol', 'nombres', 'apellidos',
    'telefono_movil', 'telefono_trabajo', 'telefono_trabajo2', 'poder_representante'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}