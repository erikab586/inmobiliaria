<?php

namespace App\Controllers;
use App\Models\PropietarioModel;
use App\Models\RolesModel;
use App\Models\PaisModel;
use App\Models\EstadoModel;
use App\Models\MunicipioModel;
class PropietarioController extends BaseController
{
    public function index()
    {
        $db= \Config\Database::connect();

        $propietario= new PropietarioModel();
        $item['propietario']= $propietario->findAll();
        return view('propietario/index.php', $item);
    }
    public function create()
    {
        $RolesModel= new RolesModel();
        $item['roles']= $RolesModel->findAll();
        $PaisModel= new PaisModel();
        $item['pais']= $PaisModel->findAll();
        $EstadoModel= new EstadoModel();
        $item['estado']= $EstadoModel->findAll();
        $MunicipioModel= new MunicipioModel();
        $item['municipio']= $MunicipioModel->findAll();
        return view('propietario/crear.php', $item);
    }
    public function guardar()
    {
            $codigo_propietario= $this->request->getPost('propietario');
            $rol= $this->request->getPost('rol');
            $nombres= $this->request->getPost('nombres');
            $apellidos= $this->request->getPost('apellidos');
            $rfc= $this->request->getPost('rfc');
            $cp_fiscal= $this->request->getPost('cp');
            $regimen_fiscal= $this->request->getPost('regimen');
            $dispensar_ingresos= $this->request->getPost('dispensar');
            $factura= $this->request->getPost('factura');
            $codigo_postal= $this->request->getPost('codigo');
            $email_prin= $this->request->getPost('prin');
            $email_sec= $this->request->getPost('sec');
            $telefono_movil= $this->request->getPost('movil');
            $telefono_casa= $this->request->getPost('casa');
            $telefono_trabajo= $this->request->getPost('trabajo');
            $telefono2_trabajo= $this->request->getPost('trabajo2');
            $banco_deposito= $this->request->getPost('banco');
            $cuenta_clabe= $this->request->getPost('clabe');
            $titular_cuenta= $this->request->getPost('titular');
            $porcentaje= $this->request->getPost('porcentaje');
            $instrucciones_pago= $this->request->getPost('pago');
            $instrucciones_extras= $this->request->getPost('extras');
            $nombre_pais= $this->request->getPost('pais');
            $descripcion= $this->request->getPost('estado');
            $nombre_municipio= $this->request->getPost('municipio');
            $colonia= $this->request->getPost('colonia');
            $ciudad= $this->request->getPost('ciudad');
            $calle= $this->request->getPost('calle');
            $numero= $this->request->getPost('numero');
        
        
        $data=[
            'codigo_propietario'=> $codigo_propietario,
            'id_rol'=> $rol,
            'nombres'=> $nombres,
            'apellidos'=> $apellidos,
            'rfc'=> $rfc,
            'cp_fiscal'=> $cp_fiscal,
            'regimen_fiscal'=> $regimen_fiscal,
            'dispensar_ingresos'=> $dispensar_ingresos,
            'factura'=> $factura,
            'codigo_postal'=> $codigo_postal,
            'email_prin'=>$email_prin,
            'email_sec'=> $email_sec,
            'telefono_movil'=> $telefono_movil,
            'telefono_casa'=> $telefono_casa,
            'telefono_trabajo'=> $telefono_trabajo,
            'telefono2_trabajo'=> $telefono2_trabajo,
            'banco_deposito'=> $banco_deposito,
            'cuenta_clabe'=> $cuenta_clabe,
            'titular_cuenta'=> $titular_cuenta,
            'porcentaje'=> $porcentaje,
            'instrucciones_pago'=> $instrucciones_pago,
            'instrucciones_extras'=> $instrucciones_extras,
            'id_pais'=> $nombre_pais,
            'id_estado'=> $descripcion,
            'id_municipio'=> $nombre_municipio,
            'colonia'=>$colonia,
            'ciudad'=>$ciudad,
            'calle'=> $calle,
            'numero'=> $numero,
        ];
        $PropietarioModel= new PropietarioModel();
        $respuesta=$PropietarioModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/propietario'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/propietario'))->with('mensaje','0');
        }
        
    }
    public function edit($id)
    {
       
        $RolesModel= new RolesModel();
        $item['roles']= $RolesModel->findAll();
        $PaisModel= new PaisModel();
        $item['pais']= $PaisModel->findAll();
        $EstadoModel= new EstadoModel();
        $item['estado']= $EstadoModel->findAll();
        $MunicipioModel= new MunicipioModel();
        $item['municipio']= $MunicipioModel->findAll();
        $db= \Config\Database::connect();
        $builder = $db->table('inm_propietario p');
        $builder->select('p.*, r.descripcion_rol, ps.nombre_pais, e.descripcion, m.nombre_municipio');//->order_by('id_unidad','DESC');;
        $builder->join('inm_roles r', 'r.id_rolU = p.id_rol');
        $builder->join('inm_pais ps', 'ps.id_pais = p.id_pais');
        $builder->join('inm_estado e', 'e.id_estado = p.id_estado');
        $builder->join('inm_municipio m', 'm.id_municipio = p.id_municipio');
        $builder->where('p.id_propietario',$id);
        $item['propietario'] = $builder->get()->getResultArray();
        return view('propietario/editar',$item);
    
    }
    public function save() 
    {
            $id= $this->request->getPost('id');
            $codigo_propietario= $this->request->getPost('propietario');
            $rol= $this->request->getPost('rol');
            $nombres= $this->request->getPost('nombres');
            $apellidos= $this->request->getPost('apellidos');
            $rfc= $this->request->getPost('rfc');
            $cp_fiscal= $this->request->getPost('cp');
            $regimen_fiscal= $this->request->getPost('regimen');
            $dispensar_ingresos= $this->request->getPost('dispensar');
            $factura= $this->request->getPost('factura');
            $codigo_postal= $this->request->getPost('codigo');
            $email_prin= $this->request->getPost('prin');
            $email_sec= $this->request->getPost('sec');
            $telefono_movil= $this->request->getPost('movil');
            $telefono_casa= $this->request->getPost('casa');
            $telefono_trabajo= $this->request->getPost('trabajo');
            $telefono2_trabajo= $this->request->getPost('trabajo2');
            $banco_deposito= $this->request->getPost('banco');
            $cuenta_clabe= $this->request->getPost('clabe');
            $titular_cuenta= $this->request->getPost('titular');
            $porcentaje= $this->request->getPost('porcentaje');
            $instrucciones_pago= $this->request->getPost('ipagos');
            $instrucciones_extras= $this->request->getPost('extras');
            $nombre_pais= $this->request->getPost('pais');
            $descripcion= $this->request->getPost('estado');
            $nombre_municipio= $this->request->getPost('municipio');
            $colonia= $this->request->getPost('colonia');
            $ciudad= $this->request->getPost('ciudad');
            $calle= $this->request->getPost('calle');
            $numero= $this->request->getPost('numero');
        
        
        $data=[
            'codigo_propietario'=> $codigo_propietario,
            'id_rol'=> $rol,
            'nombres'=> $nombres,
            'apellidos'=> $apellidos,
            'rfc'=> $rfc,
            'cp_fiscal'=> $cp_fiscal,
            'regimen_fiscal'=> $regimen_fiscal,
            'dispensar_ingresos'=> $dispensar_ingresos,
            'factura'=> $factura,
            'codigo_postal'=> $codigo_postal,
            'email_prin'=>$email_prin,
            'email_sec'=> $email_sec,
            'telefono_movil'=> $telefono_movil,
            'telefono_casa'=> $telefono_casa,
            'telefono_trabajo'=> $telefono_trabajo,
            'telefono2_trabajo'=> $telefono2_trabajo,
            'banco_deposito'=> $banco_deposito,
            'cuenta_clabe'=> $cuenta_clabe,
            'titular_cuenta'=> $titular_cuenta,
            'porcentaje'=> $porcentaje,
            'instrucciones_pago'=> $instrucciones_pago,
            'instrucciones_extras'=> $instrucciones_extras,
            'id_pais'=> $nombre_pais,
            'id_estado'=> $descripcion,
            'id_municipio'=> $nombre_municipio,
            'colonia'=>$colonia,
            'ciudad'=>$ciudad,
            'calle'=> $calle,
            'numero'=> $numero,
        ];
      
        $PropietarioModel= new PropietarioModel();
        $respuesta=$PropietarioModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/propietario'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/propietario'))->with('mensaje','0');
        }  

    }
    public function buscar($id)
    {
        $contenido = $id;
        $db= \Config\Database::connect();
        $builder = $db->table('inm_propietario p');
        $builder->select('p.*, r.descripcion_rol, ps.nombre_pais, e.descripcion, m.nombre_municipio');//->order_by('id_unidad','DESC');;
        $builder->join('inm_roles r', 'r.id_rolU = p.id_rol');
        $builder->join('inm_pais ps', 'ps.id_pais = p.id_pais');
        $builder->join('inm_estado e', 'e.id_estado = p.id_estado');
        $builder->join('inm_municipio m', 'm.id_municipio = p.id_municipio');
        $builder->where('p.id_propietario',$id);
        $item = $builder->get()->getResultArray();

        foreach ($item as $val)
        {
            
            if($val['dispensar_ingresos']== 1)
                $dispensar="SI DISPENSAR";
            else{
                if($val['dispensar_ingresos']== 0)
                    $dispensar="NO DISPENSAR ";
                else
                    $dispensar="MO HAY INFORMACIÓN";
            }

            if($val['factura']== 1)
                $factura="SI FACTURA";
            else{
                if($val['factura']== 0)
                    $factura="NO FACTURA";
                else
                    $factura="MO HAY INFORMACIÓN";
            }

            $data=[
              'id_propietario'=> $val['id_propietario'],
              'codigo_propietario'=> $val['codigo_propietario'],
              'rol'=> $val['descripcion_rol'],
              'nombres'=> $val['nombres'],
              'apellidos'=> $val['apellidos'],
              'rfc'=> $val['rfc'],
              'cp_fiscal'=> $val['cp_fiscal'],
              'regimen_fiscal'=> $val['regimen_fiscal'],
              'dispensar_ingresos'=> $dispensar,
              'factura'=> $factura,
              'codigo_postal'=> $val['codigo_postal'],
              'email_prin'=>$val['email_prin'],
              'email_sec'=> $val['email_sec'],
              'telefono_movil'=> $val['telefono_movil'],
              'telefono_casa'=> $val['telefono_casa'],
              'telefono_trabajo'=> $val['telefono_trabajo'],
              'telefono2_trabajo'=> $val['telefono2_trabajo'],
              'banco_deposito'=> $val['banco_deposito'],
              'cuenta_clabe'=> $val['cuenta_clabe'],
              'titular_cuenta'=> $val['titular_cuenta'],
              'porcentaje'=> $val['porcentaje'],
              'instrucciones_pago'=> $val['instrucciones_pago'],
              'instrucciones_extras'=> $val['instrucciones_extras'],
              'pais'=> $val['nombre_pais'],
              'estado'=> $val['descripcion'],
              'municipio'=> $val['nombre_municipio'],
              'colonia'=>$val['colonia'],
              'ciudad'=>$val['ciudad'],
              'calle'=> $val['calle'],
              'numero'=> $val['numero'],
            ];
            
        }
        return $this->response->setJSON(['dato' => $data]);
     
    }
    public function delete($id)
    {
        $PropietarioModel= new PropietarioModel();
        $data=["id_propietario"=>$id];
        $respuesta=$PropietarioModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/propietario'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/propietario'))->with('mensaje','5');
        }
        
    }

   
}