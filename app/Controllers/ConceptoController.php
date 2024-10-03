<?php

namespace App\Controllers;
use App\Models\ConceptoModel;
class ConceptoController extends BaseController
{
    public function index()
    {
        $concepto= new ConceptoModel();
        $item['concepto']= $concepto->findAll();
        return view('concepto/index.php', $item);
    }
    public function create() //Este metodo sirve para capturar los datos para un nuevo Concepto y guardar en la bd
    {
      
        $codigo= $this->request->getPost('codigo');
        $descripcion= $this->request->getPost('descripcion');
        $data=["cod_concepto"=>$codigo,
               "descripcion"=>$descripcion];
        $ConceptoModel= new ConceptoModel();
        $respuesta=$ConceptoModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/concepto'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/concepto'))->with('mensaje','0');
        }

    }
    public function edit($id)
    {
        $ConceptoModel= new ConceptoModel();
        $item['concepto']= $ConceptoModel->find($id);
        return view('concepto/editar',$item);
    }
    public function save() //Este metodo sirve para capturar los nuevos datos para modificar iva y editar en la bd
    {
        $id= $this->request->getPost('idconcepto');
        $codigo= $this->request->getPost('codigo');
        $descripcion= $this->request->getPost('concepto');
        $data=["cod_concepto"=>$codigo,
               "descripcion"=>$descripcion];
        $ConceptoModel= new ConceptoModel();
        $respuesta=$ConceptoModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/concepto'))->with('mensaje','2');
        }
        else{
            return redirect()->to(base_url('/concepto'))->with('mensaje','3');
        }

    }
    public function delete($id)
    {
        $ConceptoModel= new ConceptoModel();
        $data=["id_concepto"=>$id];
        $respuesta=$ConceptoModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/concepto'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/concepto'))->with('mensaje','5');
        }
    }
}