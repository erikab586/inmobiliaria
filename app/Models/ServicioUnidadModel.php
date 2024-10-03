<?php
namespace App\Models;
use CodeIgniter\Model;

class ServicioUnidadModel extends Model
{
    protected $table      = 'inm_servunid';
    protected $primaryKey = 'id_servunid';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_servunid', 'id_inmueble','id_unidad',
    'cuenta_luz', 'medidor_luz', 'fecha_pagoluz',
    'cuenta_gas', 'tipo_gas', 'medidor_gas, inst_pagogas, fecha_pagogas'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}