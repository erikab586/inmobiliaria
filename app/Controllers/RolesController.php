<?php

namespace App\Controllers;
use App\Models\RolesModel;
class RolesController extends BaseController
{
    public function index()
    {
        $rol= new RolesModel();
        $item['rol']= $rol->findAll();
        return view('roles/index.php', $item);
    }
    public function create() //Este metodo sirve para capturar los datos para un nuevo iva y guardar en la bd
    {
      
        $rol= $this->request->getPost('rol');
        $data=["descripcion_rol"=>$rol];
        $RolesModel= new RolesModel();
        $respuesta=$RolesModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/rol'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/rol'))->with('mensaje','0');
        }

    }
    public function edit($id)
    {
        $RolesModel= new RolesModel();
        $item['rol']= $RolesModel->find($id);
        return view('roles/editar',$item);
    }
    public function save() //Este metodo sirve para capturar los nuevos datos para modificar roles de usuarios y editar en la bd
    {
        $id= $this->request->getPost('idrol');
        $descripcion= $this->request->getPost('rol');
        $data=["descripcion_rol"=>$descripcion];
        $RolesModel= new RolesModel();
        $respuesta=$RolesModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/rol'))->with('mensaje','2');
        }
        else{
            return redirect()->to(base_url('/rol'))->with('mensaje','3');
        }

    }
    public function delete($id)
    {
        $RolesModel= new RolesModel();
        $data=["id_rolU"=>$id];
        $respuesta=$RolesModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/rol'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/rol'))->with('mensaje','5');
        }
    }

}