<?php
   namespace App\Database\Seeds;
   use CodeIgniter\Database\Seeder;
   class Usuario extends Seeder{
    public function run()
    {
        $email="yosoyproferika@gmail.com";
        $password= password_hash("Casa3434.", PASSWORD_DEFAULT);
        $id_roles=1;
        $data=[
            'email'=>$email,
            'password'=>$password,
            'id_roles'=>$id_roles
        ];
        $this->db->table('inm_usuario')->insert($data);
    }
   }
?>