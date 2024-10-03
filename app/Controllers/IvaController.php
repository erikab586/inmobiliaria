<?php

namespace App\Controllers;
use App\Models\IvaModel;
class IvaController extends BaseController
{
    public function index()
    {
        $db= \Config\Database::connect();
        $builder = $db->table('inm_iva');
        $builder->select('*');
        $item['iva'] = $builder->get()->getResultArray();
        return view('iva/index.php', $item);
    }
    public function create() //Este metodo sirve para capturar los datos para un nuevo iva y guardar en la bd
    {
      
        $iva= $this->request->getPost('iva');
        $data=["porcentaje"=>$iva];
        $IvaModel= new IvaModel();
        $respuesta=$IvaModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/iva'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/iva'))->with('mensaje','0');
        }

    }
    public function edit($id)
    {
        $ivaModel= new IvaModel();
        $item['iva']= $ivaModel->find($id);
        return view('iva/editar',$item);
    }
    public function save() //Este metodo sirve para capturar los nuevos datos para modificar iva y editar en la bd
    {
        $iva= $this->request->getPost('nuevoiva');
        $id= $this->request->getPost('idiva');
        $data=["porcentaje"=>$iva];
        $IvaModel= new IvaModel();
        $respuesta=$IvaModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/iva'))->with('mensaje','2');
        }
        else{
            return redirect()->to(base_url('/iva'))->with('mensaje','3');
        }

    }
    public function delete($id)
    {
        $ivaModel= new IvaModel();
        $data=["id_iva"=>$id];
        $respuesta=$ivaModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/iva'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/iva'))->with('mensaje','5');
        }
    }

}