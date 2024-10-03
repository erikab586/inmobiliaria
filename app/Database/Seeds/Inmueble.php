<?php
   namespace App\Database\Seeds;
   use CodeIgniter\Database\Seeder;
   class Inmueble extends Seeder{
    public function run()
    {
        $codigo_inmueble;
        $num_ext;
        $num_int;
        $numero;
        $calle;
        $ciudad;
        $colonia;
        $id_municipio;
        $id_estado;
        $id_pais;
        $codigo_postal;
        $referencia;
        $enseña;
        $transporte;
        $unidades;
        $id_uso;
        $id_tipo;
        $id_adminitrador;
        $id_propietario;
        $data=[
            'codigo_inmueble'=> $codigo_inmueble, 
            'num_ext'=> $num_ext, 
            'num_int'=> $num_int, 
            'numero'=> $numero,
            'calle'=> $calle, 
            'ciudad'=> $ciudad, 
            'colonia'=> $colonia, 
            'id_municipio'=> $id_municipio, 
            'id_estado'=> $id_estado, 
            'id_pais'=> $id_pais, 
            'codigo_postal'=> $codigo_postal, 
            'referencia'=> $referencia,
            'enseña'=> $enseña, 
            'transporte'=> $transporte, 
            'unidades'=> $unidades, 
            'id_uso'=> $id_uso, 
            'id_tipo'=> $id_tipo,
            'id_adminitrador'=> $id_adminitrador, 
            'id_propietario'=> $id_propietario
        ];
        $this->db->table('inm_inmueble')->insert($data);
    }
   }
?>