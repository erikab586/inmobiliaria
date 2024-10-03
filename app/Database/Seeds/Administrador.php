<?php
   namespace App\Database\Seeds;
   use CodeIgniter\Database\Seeder;
   class Propietario extends Seeder{
    public function run()
    {
        $id_rol;
        $Nombres;
        $Apellidos;
        $dni;
        $telefono_movil;
        $email;
        $banco_administrador; 
        $cuenta_bancaria;
        $titular_cuenta;
        $id_pais;
        $id_estado;
        $id_municipio;
        $colonia;
        $ciudad;
        $calle;
        $numero;
        $data=[
            'id_rol', 
            'Nombres',
            'Apellidos', 
            'dni', 
            'telefono_movil',
            'email', 
            'banco_administrador', 
            'cuenta_bancaria', 
            'titular_cuenta', 
            'id_pais', 
            'id_estado',
            'id_municipio', 
            'colonia', 
            'ciudad', 
            'calle', 
            'numero'
        ];
        $this->db->table('inm_propietario')->insert($data);
    }
   }
?>