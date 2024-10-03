<?php

namespace App\Controllers;
use App\Models\UnidadModel;
use App\Models\InmuebleModel;
use App\Models\TipoModel;

class UnidadController extends BaseController
{
    public function index()
    {
        $db= \Config\Database::connect();
        $InmuebleModel= new InmuebleModel();
        $item['inmueble']= $InmuebleModel->findAll();
        $TipoModel= new TipoModel();
        $item['tipo']= $TipoModel->findAll();
        $builder = $db->table('inm_unidad u');
        $builder->select('u.*, in.codigo_inmueble, t.nombre_tipo');//->order_by('id_unidad','DESC');;
        $builder->join('inm_inmueble in', 'in.id_inmueble = u.id_inmueble');
        $builder->join('inm_tipo t', 't.id_tipo= u.id_tipo');
        $item['unidad'] = $builder->get()->getResultArray();
        return view('unidad/index.php', $item);
    }
    
    public function create()
    {
        $InmuebleModel= new InmuebleModel();
        $item['inmueble']= $InmuebleModel->findAll();
        $TipoModel= new TipoModel();
        $item['tipo']= $TipoModel->findAll();
        return view('unidad/crear.php', $item);
    }
    public function guardar()
    {
        
        $inmueble= $this->request->getPost('inmueble');
        $tipo= $this->request->getPost('tipo');
        $codigo_unidad= $this->request->getPost('codigo_unidad');
        $dim_terreno= $this->request->getPost('dim_terreno');
        $dim_construccion= $this->request->getPost('dim_construccion');
        $antiguedad= $this->request->getPost('antiguedad');
        $recamaras= $this->request->getPost('recamaras');
        $closets=$this->request->getPost('closets');
        $baños= $this->request->getPost('baños');
        $medios_baños= $this->request->getPost('medios_baños');
        $estudios= $this->request->getPost('estudios');
        $area_servicio= $this->request->getPost('area_servicio');
        $num_cuarto_servicio= $this->request->getPost('num_cuarto_servicio');
        $num_estacionamiento= $this->request->getPost('num_estacionamiento');
        $lugar_estacionamiento= $this->request->getPost('lugar_estacionamiento');
        $cocina_equipada= $this->request->getPost('cocina_equipada');
        $vigilancia= $this->request->getPost('vigilancia');
        $cisterna= $this->request->getPost('cisterna');
        $plantas= $this->request->getPost('plantas');
        $nivel= $this->request->getPost('nivel');
        $jardin= $this->request->getPost('jardin');
        $elevadores= $this->request->getPost('elevadores');
        $amenidades= $this->request->getPost('amenidades');
        $caracteristicas= $this->request->getPost('caracteristicas');
        
        $data=["id_inmueble"=>$inmueble,
               "id_tipo"=>$tipo,
               "codigo_unidad"=>$codigo_unidad,
               "dim_terreno"=>$dim_terreno,
               "dim_construccion"=>$dim_construccion,
               "antiguedad"=>$antiguedad,
               "recamaras"=>$recamaras,
               "closets"=>$closets,
               "baños"=>$baños,
               "medios_baños"=>$medios_baños,
               "estudios"=>$estudios,
               "area_servicio"=>$area_servicio,
               "cuartos_servicio"=>$num_cuarto_servicio,
               "estacionamiento"=>$num_estacionamiento,
               "num_estacionamiento"=>$lugar_estacionamiento,
               "cocina_equipada"=>$cocina_equipada,
               "vigilancia"=>$vigilancia,
               "cisterna"=>$cisterna,
               "num_plantas"=>$plantas,
               "piso_nivel"=>$nivel,
               "tipo_jardin"=>$jardin,
               "cant_elevadores"=>$elevadores,
               "amenidades"=>$amenidades,
               "otras_caracteristicas"=>$caracteristicas

              ];
        $UnidadModel= new UnidadModel();
        $respuesta=$UnidadModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/unidad'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/unidad'))->with('mensaje','0');
        }
        
    }
    

    public function edit($id)
    {
       
        $InmuebleModel= new InmuebleModel();
        $item['inmueble']= $InmuebleModel->findAll();
        $TipoModel= new TipoModel();
        $item['tipo']= $TipoModel->findAll();
        $db= \Config\Database::connect();
        $builder = $db->table('inm_unidad u');
        $builder->select('u.*, in.codigo_inmueble, t.nombre_tipo');//->order_by('id_unidad','DESC');;
        $builder->join('inm_inmueble in', 'in.id_inmueble = u.id_inmueble');
        $builder->join('inm_tipo t', 't.id_tipo= u.id_tipo');
        $builder->where('u.id_unidad',$id);
        $item['unidad'] = $builder->get()->getResultArray();
        return view('unidad/editar',$item);
    
    }
    public function save() 
    {
        $id= $this->request->getPost('id_unidad');
        $inmueble= $this->request->getPost('inmueble');
        $tipo= $this->request->getPost('tipo');
        $codigo_unidad= $this->request->getPost('codigo_unidad');
        $dim_terreno= $this->request->getPost('dim_terreno');
        $dim_construccion= $this->request->getPost('dim_construccion');
        $antiguedad= $this->request->getPost('antiguedad');
        $recamaras= $this->request->getPost('recamaras');
        $closets=$this->request->getPost('closets');
        $baños= $this->request->getPost('baños');
        $medios_baños= $this->request->getPost('medios_baños');
        $estudios= $this->request->getPost('estudios');
        $area_servicio= $this->request->getPost('area_servicio');
        $num_cuarto_servicio= $this->request->getPost('num_cuarto_servicio');
        $num_estacionamiento= $this->request->getPost('num_estacionamiento');
        $lugar_estacionamiento= $this->request->getPost('lugar_estacionamiento');
        $cocina_equipada= $this->request->getPost('cocina_equipada');
        $vigilancia= $this->request->getPost('vigilancia');
        $cisterna= $this->request->getPost('cisterna');
        $plantas= $this->request->getPost('plantas');
        $nivel= $this->request->getPost('nivel');
        $jardin= $this->request->getPost('jardin');
        $elevadores= $this->request->getPost('elevadores');
        $amenidades= $this->request->getPost('amenidades');
        $caracteristicas= $this->request->getPost('caracteristicas');
        
        $data=[
               "id_inmueble"=>$inmueble,
               "id_tipo"=>$tipo,
               "codigo_unidad"=>$codigo_unidad,
               "dim_terreno"=>$dim_terreno,
               "dim_construccion"=>$dim_construccion,
               "antiguedad"=>$antiguedad,
               "recamaras"=>$recamaras,
               "closets"=>$closets,
               "baños"=>$baños,
               "medios_baños"=>$medios_baños,
               "estudios"=>$estudios,
               "area_servicio"=>$area_servicio,
               "cuartos_servicio"=>$num_cuarto_servicio,
               "estacionamiento"=>$num_estacionamiento,
               "num_estacionamiento"=>$lugar_estacionamiento,
               "cocina_equipada"=>$cocina_equipada,
               "vigilancia"=>$vigilancia,
               "cisterna"=>$cisterna,
               "num_plantas"=>$plantas,
               "piso_nivel"=>$nivel,
               "tipo_jardin"=>$jardin,
               "cant_elevadores"=>$elevadores,
               "amenidades"=>$amenidades,
               "otras_caracteristicas"=>$caracteristicas

              ];
        $UnidadModel= new UnidadModel();
        $respuesta=$UnidadModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/unidad'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/unidad'))->with('mensaje','0');
        }  

    }

    public function buscar($id)
    {
        $contenido = $id;
        $db= \Config\Database::connect();
        $builder = $db->table('inm_unidad u');
        $builder->select('u.*, in.codigo_inmueble, t.nombre_tipo');//->order_by('id_unidad','DESC');;
        $builder->join('inm_inmueble in', 'in.id_inmueble = u.id_inmueble');
        $builder->join('inm_tipo t', 't.id_tipo= u.id_tipo');
        $builder->where('u.id_unidad',$id);
        $item = $builder->get()->getResultArray();

        foreach ($item as $val)
        {
            if($val['cocina_equipada']== 1)
                $cocina="SI";
            else{
                if($val['cocina_equipada']== 2)
                    $cocina="NO";
                else
                    $cocina="MO HAY INFORMACIÓN";
            }

            if($val['cisterna']== 1)
                $cisterna="SI";
            else{
                if($val['cisterna']== 2)
                    $cisterna="NO";
                else
                    $cisterna="MO HAY INFORMACIÓN";
            }

            if($val['vigilancia']== 1)
                $vigilancia="SI";
            else{
                if($val['vigilancia']== 2)
                    $vigilancia="NO";
                else
                    $vigilancia="MO HAY INFORMACIÓN";
            }

            $data=[
              'id_unidad'=> $val['id_unidad'],
              'codigo_unidad'=> $val['codigo_unidad'],
              'codigo_inmueble'=> $val['codigo_inmueble'],
              'nombre_tipo'=> $val['nombre_tipo'],
              'dim_terreno'=> $val['dim_terreno'],
              'dim_contruccion'=> $val['dim_construccion'],
              'recamaras'=> $val['recamaras'],
              'closets'=> $val['closets'],
              'banos'=> $val['baños'],
              'medios_banos'=> $val['medios_baños'],
              'estudios'=> $val['estudios'],
              'area_servicio'=>$val['area_servicio'],
              'cuartos_servicio'=> $val['cuartos_servicio'],
              'estacionamiento'=> $val['estacionamiento'],
              'num_estacionamiento'=> $val['num_estacionamiento'],
              'cocina_equipada'=> $cocina,
              'piso_nivel'=> $val['piso_nivel'],
              'num_plantas'=> $val['num_plantas'],
              'tipo_jardin'=> $val['tipo_jardin'],
              'antiguedad'=> $val['antiguedad'],
              'tipo_piso'=> $val['tipo_piso'],
              'amenidades'=> $val['amenidades'],
              'cisterna'=> $val['cisterna'],
              'vigilancia'=> $val['vigilancia'],
              'cant_elevadores'=> $val['cant_elevadores'],
              'otras_caracteristicas'=> $val['otras_caracteristicas']
            ];
            
        }
        return $this->response->setJSON(['dato' => $data]);
       //return json_encode($data,true);
    }
   
    public function delete($id)
    {
        $UnidadModel= new UnidadModel();
        $data=["id_unidad"=>$id];
        $respuesta=$UnidadModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/unidad'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/unidad'))->with('mensaje','5');
        }
        
    }

   
}