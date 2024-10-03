<?php
namespace App\Models;
use CodeIgniter\Model;

class ServiciosModel extends Model
{
    protected $table      = 'inm_servicios';
    protected $primaryKey = 'id_servicios';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_servicios', 'id_inmueble', 'cuenta_agua', 'medidor_agu', 'inst_pagoAgua', 'fech_pagoAgua',
    'cuenta_luz', 'medidor_luz', 'fech_pagoLuz', 'inst_pagoLuz', 'cuenta_gas', 'tipo_gas', 'medidor_gas, inst_pagoGas, fech_pagoGas',
    'cuota_mtto', 'cuenta_predial', 'inst_pagoPredial', 'fech_pagoPredial', 'fecha_registro'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}