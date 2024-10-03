<?php
namespace App\Models;
use CodeIgniter\Model;

class AdministradorModel extends Model
{
    protected $table      = 'inm_administrador';
    protected $primaryKey = 'id_administrador';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_administrador','id_rol', 'Nombres',
    'Apellidos', 'dni', 'telefono_movil','email', 'banco_administrador', 
    'cuenta_bancaria', 'titular_cuenta', 'id_pais', 'id_estado',
    'id_municipio', 'colonia', 'ciudad', 'calle', 'numero'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}