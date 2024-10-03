<?php
   namespace App\Database\Seeds;
   use CodeIgniter\Database\Seeder;
   class Propietario extends Seeder{
    public function run()
    {
        $id_rol=2;
        $codigo_propietario= "2035";
        $nombres= "BENIGNO NOE";
        $apellidos= "MENDEZ NAVARRETE";
        $rfc="MENB-491110-MT9";
        $cp_fiscal=" ";
        $regimen_fiscal=" ";
        $dispensar_ingresos=1;
        $factura= 0;
        $codigo_postal="06020";
        $email_prin="mendezbau@gmail.com"; 
        $email_sec="mendezbau@gmail.com";
        $telefono_movil="57023084,";
        $telefono_casa="57022424";
        $telefono_trabajo="57022604";
        $telefono2_trabajo=" ";
        $banco_deposito="BANORTE CLABE";
        $cuenta_clabe="072180004915686612";
        $titular_cuenta="ENRIQUE NAVARRETE BAUTISTA";
        $porcentaje="1.0";
        $instrucciones_pago=" ";
        $instrucciones_extras=" ";
        $id_pais=1;
        $id_estado=9;
        $id_municipio=284;
        $colonia="CENTRO";
        $ciudad="CUAUHTEMOC";
        $calle="LEONA VICARIO 24";
        $numero="301";
        $data=[
            'id_rol'=> $id_rol,
            'codigo_propietario'=> $codigo_propietario,
            'nombres'=> $nombres,
            'apellidos'=> $apellidos,
            'rfc'=> $rfc, 
            'cp_fiscal'=> $cp_fiscal, 
            'regimen_fiscal'=> $regimen_fiscal,
            'dispensar_ingresos'=> $dispensar_ingresos, 
            'factura'=> $factura, 
            'codigo_postal'=> $codigo_postal, 
            'email_prin'=> $email_prin, 
            'email_sec' => $email_sec, 
            'telefono_movil'=> $telefono_movil, 
            'telefono_casa'=> $telefono_casa, 
            'telefono_trabajo'=> $telefono_trabajo, 
            'telefono2_trabajo'=> $telefono2_trabajo, 
            'banco_deposito'=> $banco_deposito,
            'cuenta_clabe'=> $cuenta_clabe, 
            'titular_cuenta'=> $titular_cuenta, 
            'porcentaje'=> $porcentaje, 
            'instrucciones_pago'=>$instrucciones_pago, 
            'instrucciones_extras'=>$instrucciones_extras, 
            'id_pais'=> $id_pais,
            'id_estado'=> $id_estado , 
            'id_municipio'=> $id_municipio, 
            'colonia'=>$colonia, 
            'ciudad'=> $ciudad, 
            'calle'=> $calle, 
            'numero'=> $numero
        ];
        $this->db->table('inm_propietario')->insert($data);
    }
   }
?>