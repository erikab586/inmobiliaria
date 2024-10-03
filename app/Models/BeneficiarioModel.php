<?php
namespace App\Models;
use CodeIgniter\Model;

class BeneficiarioModel extends Model
{
    protected $table      = 'inm_beneficiario';
    protected $primaryKey = 'id_beneficiario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_beneficiario','id_propietario', 'id_rol', 'nombres',
    'apellidos', 'email', 'envio_info', 'telefono_movil', 'telefono_casa', 'telefono_trabajo',
    'porcentaje', 'banco_deposito', 'cuenta_clabe', 'otros_datos', 'id_pais', 'id_estado',
    'id_municipio', 'colonia', 'ciudad', 'calle', 'numero'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}