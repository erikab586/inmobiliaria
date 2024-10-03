<?php

namespace App\Controllers;
use App\Models\InmuebleModel;
use App\Models\PaisModel;
use App\Models\EstadoModel;
use App\Models\MunicipioModel;
use App\Models\UsoModel;
use App\Models\TipoModel;
use App\Models\PropietarioModel;
use App\Models\AdminitradorModel;

class InmuebleController extends BaseController
{
    public function index()
    {
        $db= \Config\Database::connect();

        $builder = $db->table('inm_inmueble i');
        $builder->select('i.*,p.nombres, p.apellidos, p.codigo_propietario');
        $builder->join('inm_propietario p', 'p.id_propietario = i.id_propietario');
        $item['inmueble'] = $builder->get()->getResultArray();
        return view('inmueble/index.php', $item);
    }
    public function create()
    {
        $PaisModel= new PaisModel();
        $item['pais']= $PaisModel->findAll();
        $EstadoModel= new EstadoModel();
        $item['estado']= $EstadoModel->findAll();
        $MunicipioModel= new MunicipioModel();
        $item['municipio']= $MunicipioModel->findAll();
        $UsoModel= new UsoModel();
        $item['uso']=$UsoModel->findAll();
        $TipoModel= new TipoModel();
        $item['tipo']= $TipoModel->findAll();
        $PropietarioModel= new PropietarioModel();
        $item['propietario']= $PropietarioModel->findAll();
        return view('inmueble/crear.php', $item);
    }
    public function guardar()
    {
            $codigo_inmueble= $this->request->getPost('codigo');
            $num_int= $this->request->getPost('interior');
            $num_ext= $this->request->getPost('ext');
            $nombre_pais= $this->request->getPost('pais');
            $descripcion= $this->request->getPost('estado');
            $nombre_municipio= $this->request->getPost('municipio');
            $colonia= $this->request->getPost('colonia');
            $ciudad= $this->request->getPost('ciudad');
            $calle= $this->request->getPost('calle');
            $numero= $this->request->getPost('numero');
            $codigo_postal= $this->request->getPost('cp');
            $referencia= $this->request->getPost('referencia');
            $enseña= $this->request->getPost('enseña');
            $transporte= $this->request->getPost('transporte');
            $locales= $this->request->getPost('locales');
            $unidades= $this->request->getPost('unidades');
            $uso= $this->request->getPost('uso');
            $tipo= $this->request->getPost('tipo');
            $propietario= $this->request->getPost('propietario');        
        
        $data=[
            'codigo_inmueble'=> $codigo_inmueble,
            'id_pais'=> $nombre_pais,
            'id_estado'=> $descripcion,
            'id_municipio'=> $nombre_municipio,
            'colonia'=>$colonia,
            'ciudad'=>$ciudad,
            'calle'=> $calle,
            'numero'=> $numero,
            'num_ext'=> $num_ext,
            'num_int'=> $num_int,
            'codigo_postal'=> $codigo_postal,
            'referencia'=> $referencia,
            'enseña'=> $enseña,
            'transporte'=> $transporte,
            'locales'=> $locales,
            'unidades'=> $unidades,
            'id_uso'=> $uso,
            'id_tipo'=> $tipo,
            'id_propietario'=> $propietario
        ];
        $InmuebleModel= new InmuebleModel();
        $respuesta=$InmuebleModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/inmueble'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/inmueble'))->with('mensaje','0');
        }
        
    }
    public function edit($id)
    {
        $UsoModel= new UsoModel();
        $item['uso']=$UsoModel->findAll();
        $TipoModel= new TipoModel();
        $item['tipo']= $TipoModel->findAll();
        $PropietarioModel= new PropietarioModel();
        $item['propietario']= $PropietarioModel->findAll();
        $PaisModel= new PaisModel();
        $item['pais']= $PaisModel->findAll();
        $EstadoModel= new EstadoModel();
        $item['estado']= $EstadoModel->findAll();
        $MunicipioModel= new MunicipioModel();
        $item['municipio']= $MunicipioModel->findAll();
        $db= \Config\Database::connect();
        $builder = $db->table('inm_inmueble i');
        $builder->select('i.*, u.id_uso, u.nombre_uso, t.id_tipo, t.nombre_tipo, p.id_propietario,
        p.codigo_propietario, ps.id_pais, ps.nombre_pais, e.id_estado, e.descripcion, m.id_municipio, m.nombre_municipio');
        $builder->join('inm_uso u', 'u.id_uso = i.id_uso');
        $builder->join('inm_tipo t', 't.id_tipo = i.id_tipo');
        $builder->join('inm_propietario p', 'p.id_propietario = i.id_propietario');
        $builder->join('inm_pais ps', 'ps.id_pais = i.id_pais');
        $builder->join('inm_estado e', 'e.id_estado = i.id_estado');
        $builder->join('inm_municipio m', 'm.id_municipio = i.id_municipio');
        $builder->where('i.id_inmueble',$id);
        $item['inmueble'] = $builder->get()->getResultArray();
        return view('inmueble/editar',$item);
    
    }
    public function save() 
    {
            $id= $this->request->getPost('id');
            $codigo_inmueble= $this->request->getPost('codigo');
            $num_int= $this->request->getPost('interior');
            $num_ext= $this->request->getPost('ext');
            $nombre_pais= $this->request->getPost('pais');
            $descripcion= $this->request->getPost('estado');
            $nombre_municipio= $this->request->getPost('municipio');
            $colonia= $this->request->getPost('colonia');
            $ciudad= $this->request->getPost('ciudad');
            $calle= $this->request->getPost('calle');
            $numero= $this->request->getPost('numero');
            $codigo_postal= $this->request->getPost('cp');
            $referencia= $this->request->getPost('referencia');
            $enseña= $this->request->getPost('enseña');
            $transporte= $this->request->getPost('transporte');
            $locales= $this->request->getPost('locales');
            $unidades= $this->request->getPost('unidades');
            $uso= $this->request->getPost('uso');
            $tipo= $this->request->getPost('tipo');
            $propietario= $this->request->getPost('propietario');        
        
        $data=[
            'codigo_inmueble'=> $codigo_inmueble,
            'id_pais'=> $nombre_pais,
            'id_estado'=> $descripcion,
            'id_municipio'=> $nombre_municipio,
            'colonia'=>$colonia,
            'ciudad'=>$ciudad,
            'calle'=> $calle,
            'numero'=> $numero,
            'num_ext'=> $num_ext,
            'num_int'=> $num_int,
            'codigo_postal'=> $codigo_postal,
            'referencia'=> $referencia,
            'enseña'=> $enseña,
            'transporte'=> $transporte,
            'locales'=> $locales,
            'unidades'=> $unidades,
            'id_uso'=> $uso,
            'id_tipo'=> $tipo,
            'id_propietario'=> $propietario
        ];
        
        
        
      
        $InmuebleModel= new InmuebleModel();
        $respuesta=$InmuebleModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/inmueble'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/inmueble'))->with('mensaje','0');
        }  

    }
    public function buscar($id)
    {
        
        $db= \Config\Database::connect();
        $builder = $db->table('inm_inmueble i');
        $builder->select('i.*,  p.id_propietario, p.codigo_propietario, ps.id_pais, ps.nombre_pais, e.id_estado, e.descripcion, m.id_municipio, m.nombre_municipio');
        //$builder->join('inm_uso u', 'u.id_uso = i.id_uso');
        //$builder->join('inm_tipo t', 't.id_tipo = i.id_tipo');
        $builder->join('inm_propietario p', 'p.id_propietario = i.id_propietario');
        $builder->join('inm_pais ps', 'ps.id_pais = i.id_pais');
        $builder->join('inm_estado e', 'e.id_estado = i.id_estado');
        $builder->join('inm_municipio m', 'm.id_municipio = i.id_municipio');
        $builder->where('i.id_inmueble',$id);
        $item = $builder->get()->getResultArray();
        
        foreach ($item as $val)
        {
            switch($val['id_uso'])
            {
                case 1:
                    $uso= "HABITACIONAL";
                case 2:
                    $uso= "NO HAY INFORMACIÓN";
            }

            switch($val['id_uso'])
            {
                case 1:
                    $tipo= "CASA";
                case 2:
                    $tipo= "DEPARTAMENTO";
                case 3:
                    $tipo= "LOCAL";
                case 4:
                    $tipo= "ZAHUAN";
                case 5:
                    $tipo= "CUARTO";
                case 6:
                    $tipo= "CASA SOLA";
                case 7:
                    $tipo= "SIN DESCRIPCION";
                case 8:
                    $tipo= "CTO. AZOTEA";
                case 9:
                    $tipo= "NO HAY INFORMACIÓN";
            }

            $data=[
                'id_inmueble'=> $val['id_inmueble'],
                'codigo_inmueble'=> $val['codigo_inmueble'],
                'pais'=> $val['nombre_pais'],
                'estado'=> $val['descripcion'],
                'municipio'=> $val['nombre_municipio'],
                'colonia'=>$val['colonia'],
                'ciudad'=>$val['ciudad'],
                'calle'=> $val['calle'],
                'numero'=> $val['numero'],
                'num_ext'=> $val['num_ext'],
                'num_int'=> $val['num_int'],
                'codigo_postal'=> $val['codigo_postal'],
                'referencia'=> $val['referencia'],
                'enseña'=> $val['enseña'],
                'transporte'=> $val['transporte'],
                'locales'=> $val['locales'],
                'unidades'=> $val['unidades'],
                'uso'=> $uso,
                'tipo'=> $tipo,
                'propietario'=> $val['codigo_propietario']
            ];
        }
        //print_r($item);
        return $this->response->setJSON(['dato' => $data]);
        //return json_encode($item, true);
    }
    public function delete($id)
    {
        $InmuebleModel= new InmuebleModel();
        $data=["id_inmueble"=>$id];
        $respuesta=$InmuebleModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/inmueble'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/inmueble'))->with('mensaje','5');
        }
        
    }

    
}