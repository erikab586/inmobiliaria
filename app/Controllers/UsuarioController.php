<?php
namespace App\Controllers;
use App\Models\UsuarioModel;
use App\Models\RolesModel;
class UsuarioController extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function lista()
    {   
        $db= \Config\Database::connect();
        $roles= new RolesModel();
        $item['roles']= $roles->findAll();
        $builder = $db->table('inm_usuario u');
        $builder->select('u.*,r.descripcion_rol');
        $builder->join('inm_roles r', 'r.id_rolU = u.id_roles');
        $item['usuario'] = $builder->get()->getResultArray();
        return view('usuario/index.php', $item);
    }
    public function login()
    {
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        $UsuarioModel= new UsuarioModel();
        $item= $UsuarioModel->obtener(['email'=>$email]);
        if((count($item)>0)&&(password_verify($password,$item[0]['password'])))
        {
            $data=["email"=> $item[0]['email'],
                  "id_roles"=> $item[0]['id_roles'],
                  "username"=> $item[0]['username'],
                  "Nombres"=> $item[0] ['Nombres'],
                  "Apellidos"=> $item[0]['Apellidos'],
                  "estatus_usuario"=> $item[0]['estatus_usuario']
            ];
            $session= session();
            $session->set($data);
            return redirect()->to(base_url('/cobranza'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }

    public function perfil()
    {
        $roles= new RolesModel();
        $item['roles']= $roles->findAll();
        return view('usuario/perfil', $item);
    }
    public function salir()
    {
        $session= session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
    
    public function formUsuario()
    { 
        $roles= new RolesModel();
        $item['roles']= $roles->findAll();
        return view('usuario/crear',$item);
    }
    public function create() //Este metodo sirve para capturar los datos para un nuevo iva y guardar en la bd
    {
      
        $rol= $this->request->getPost('rol');
        $username= $this->request->getPost('username');
        $nombres= $this->request->getPost('nombres');
        $apellidos= $this->request->getPost('apellidos');
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        $opciones=['cont'=>123456];
        $hash=password_hash($password, PASSWORD_BCRYPT,$opciones);
        $data=["id_roles"=>$rol,
               "username"=>$username,
               "Nombres"=>$nombres,
               "Apellidos"=>$apellidos,
               "email"=>$email,
               "password"=>$hash];
        $UsuarioModel= new UsuarioModel();
        $respuesta=$UsuarioModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/usuario'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/usuario'))->with('mensaje','0');
        }
    }

    public function edit($id)
    {
        $roles= new RolesModel();
        $item['roles']= $roles->findAll();
        $db= \Config\Database::connect();
        $builder = $db->table('inm_usuario u');
        $builder->select('u.*,r.descripcion_rol');
        $builder->join('inm_roles r', 'r.id_rolU = u.id_roles');
        $builder->where('u.id_usuario',$id);
        $item['usuario']=$builder->get()->getResultArray(); 
        return view('usuario/editar',$item);
    }
    public function save() //Este metodo sirve para capturar los nuevos datos para modificar roles de usuarios y editar en la bd
    {
        $id= $this->request->getPost('id');
        $rol= $this->request->getPost('rol');
        $username= $this->request->getPost('username');
        $nombres= $this->request->getPost('nombres');
        $apellidos= $this->request->getPost('apellidos');
        $email= $this->request->getPost('email');
        $data=["id_roles"=>$rol,
                "username"=>$username,
                "nombres"=>$nombres,
                "apellidos"=>$apellidos,
                "email"=>$email];
        $UsuarioModel= new UsuarioModel();
        $respuesta=$UsuarioModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/usuario'))->with('mensaje','2');
        }
        else{
            return redirect()->to(base_url('/usuario'))->with('mensaje','3');
        }

    }
    public function buscar($id)
    {
        $contenido = $id;
        $db= \Config\Database::connect();
        $builder = $db->table('inm_usuario u');
        $builder->select('u.*,r.descripcion_rol');
        $builder->join('inm_roles r', 'r.id_rolU = u.id_roles');
        $builder->where('u.id_usuario',$id);
        $item=$builder->get()->getResultArray(); 
        foreach ($item as $val)
        {
            if($val['estatus_usuario']=='1')
                $estatus="ACTIVO";
            else
                $estatus="INACTIVO";

            $data=[
            'id'=> $val['id_usuario'],
            'roles'=> $val['descripcion_rol'],
            'username'=> $val['username'],
            'email'=> $val['email'],
            'Nombres'=> $val['Nombres'],
            'Apellidos'=> $val['Apellidos'],
            'estatus'=> $estatus];
            
        }
        return $this->response->setJSON(['dato' => $data]);
    }
    public function delete($id)
    {
        $UsuarioModel= new UsuarioModel();
        $data=["id_usuario"=>$id];
        $respuesta=$UsuarioModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/usuario'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/usuario'))->with('mensaje','5');
        }
    }
}