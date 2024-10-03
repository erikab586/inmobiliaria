<?php
   namespace App\Database\Seeds;
   use CodeIgniter\Database\Seeder;
   class Inquilino extends Seeder{
    public function run()
    {
        $nombres;
        $apellidos;
        $rfc;
        $email;
        $telefono_movil;
        $telefono_local;
        $telefono_local2;
        $data=[
            'nombres'=> $nombres, 
            'apellidos'=> $apellidos, 
            'rfc'=> $rfc, 
            'email'=> $email,
            'telefono_movil'=> $telefono_movil,
            'telefono_local'=> $telefono_local,
            'telefono_local2'=> $telefono_local2
        ];
        $this->db->table('inm_inquilino')->insert($data);
    }
   }
?>