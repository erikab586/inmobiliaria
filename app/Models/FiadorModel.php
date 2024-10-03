<?php
namespace App\Models;
use CodeIgniter\Model;

class FiadorModel extends Model
{
    protected $table      = 'inm_fiador';
    protected $primaryKey = 'id_fiador';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_fiador', 'id_rol', 'id_inquilino', 'nombres', 'apellidos',
    'telefono_movil', 'telefono_casa', 'telefono_trabajo', 'email', 'propiedad', 'folio_real',
    'libro_rpp', 'rpp', 'predial', 'codigo_postal', 'id_pais', 'id_estado', 'id_municipio',
    'colonia', 'ciudad', 'calle', 'numero' ];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}