<?php

namespace App\Controllers;
use App\Models\CobranzaModel;
use App\Models\InmuebleModel;
use App\Models\UnidadModel;
use App\Models\InquilinoModel;
use App\Models\PropietarioModel;
class CobranzaController extends BaseController
{
    public function index()
    {
        $db= \Config\Database::connect();
        $builder = $db->table('inm_cobranza c');
        $builder->select('c.*,i.codigo_inmueble, u.codigo_unidad, p.codigo_propietario');
        $builder->join('inm_inmueble i', 'i.id_inmueble = c.id_inmueble');
        $builder->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $builder->join('inm_propietario p', 'p.id_propietario = c.id_propietario');
        $builder->orderBy('id_cobranza','desc');
        $item['cobranza'] = $builder->get()->getResultArray();
        return view('cobranza/index.php', $item);
    }
    public function create()
    {
        $unidades= new UnidadModel();
        $item['unidad']= $unidades->findAll();
        $inmuebles= new InmuebleModel();
        $item['inmueble']= $inmuebles->findAll();
        $inquilinos= new InquilinoModel();
        $item['inquilino']= $inquilinos->findAll();
        $propietario= new PropietarioModel();
        $item['propiedad']= $propietario->findAll();
        return view('cobranza/crear.php', $item); 
    }
    public function guardar() //Este metodo sirve para capturar los datos para un nuevo contrato y guardar en la bd
    {
      
        $inmueble= $this->request->getPost('inmueble');
        $unidad= $this->request->getPost('unidad');
        $inquilino= $this->request->getPost('inquilino');
        $propietario= $this->request->getPost('propietario');
        $fecha= $this->request->getPost('fecha');
        $folio= $this->request->getPost('folio');
        $concepto= $this->request->getPost('concepto');
        $periodo= $this->request->getPost('periodo');
        $cvperiodo= $this->request->getPost('cvperiodo');
        $cvconcepto= $this->request->getPost('cvconcepto');
        $cobranza= $this->request->getPost('cobranza');
        $abono= $this->request->getPost('abono');
        $mora= $this->request->getPost('mora');
        $convenio= $this->request->getPost('convenio');
        $data=["id_inmueble"=>$inmueble,
               "id_unidad"=>$unidad,
               "id_inquilino"=>$inquilino,
               "id_propietario"=>$propietario,
               "fecha"=>$fecha,
               "folio"=>$folio ,
               "concepto"=>$concepto,
               "periodo"=>$periodo,
               "cv_periodo"=>$cvperiodo,
               "cv_concepto"=>$cvconcepto,
               "cobranza"=>$cobranza,
               "abono"=>$abono,
               "mora"=>$mora,
               "convenio"=>$convenio];
        $cobranzaModel= new CobranzaModel();
        $respuesta=$cobranzaModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/cobranza'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/cobranza'))->with('mensaje','0');
        }

    }

    public function edit($id)
    {
        $db= \Config\Database::connect();
        $unidades= new UnidadModel();
        $item['unidad']= $unidades->findAll();
        $inmuebles= new InmuebleModel();
        $item['inmueble']= $inmuebles->findAll();
        $inquilinos= new InquilinoModel();
        $item['inquilino']= $inquilinos->findAll();
        $propietario= new PropietarioModel();
        $item['propiedad']= $propietario->findAll();
        $builder = $db->table('inm_cobranza c');
        $builder->select('c.*,i.codigo_inmueble, u.codigo_unidad, iq.nombres, iq.apellidos, p.codigo_propietario');
        $builder->join('inm_inmueble i', 'i.id_inmueble = c.id_inmueble');
        $builder->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $builder->join('inm_inquilino iq', 'iq.id_inquilino = c.id_inquilino');
        $builder->join('inm_propietario p', 'p.id_propietario = c.id_propietario');
        $builder->where('c.id_cobranza',$id);
        $item['cobranza']=$builder->get()->getResultArray(); 
        return view('cobranza/editar',$item);
    }
    public function save() //Este metodo sirve para capturar los nuevos datos para modificar contrato y editar en la bd
    {
        $id= $this->request->getPost('id');
        $inmueble= $this->request->getPost('inmueble');
        $unidad= $this->request->getPost('unidad');
        $inquilino= $this->request->getPost('inquilino');
        $propietario= $this->request->getPost('propietario');
        $fecha= $this->request->getPost('fecha');
        $folio= $this->request->getPost('folio');
        $concepto= $this->request->getPost('concepto');
        $periodo= $this->request->getPost('periodo');
        $cvperiodo= $this->request->getPost('cvperiodo');
        $cvconcepto= $this->request->getPost('cvconcepto');
        $cobranza= $this->request->getPost('cobranza');
        $abono= $this->request->getPost('abono');
        $mora= $this->request->getPost('mora');
        $convenio= $this->request->getPost('convenio');
        $data=["id_inmueble"=>$inmueble,
               "id_unidad"=>$unidad,
               "id_inquilino"=>$inquilino,
               "id_propietario"=>$propietario,
               "fecha"=>$fecha,
               "folio"=>$folio ,
               "concepto"=>$concepto,
               "periodo"=>$periodo,
               "cv_periodo"=>$cvperiodo,
               "cv_concepto"=>$cvconcepto,
               "cobranza"=>$cobranza,
               "abono"=>$abono,
               "mora"=>$mora,
               "convenio"=>$convenio];
        $cobranzaModel= new CobranzaModel();
        $respuesta=$cobranzaModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/cobranza'))->with('mensaje','2');
        }
        else{
            return redirect()->to(base_url('/cobranza'))->with('mensaje','3');
        }

    }
    
    public function buscar($id)
    {
        $contenido = $id;
        $db= \Config\Database::connect();
        $builder = $db->table('inm_cobranza c');
        $builder->select('c.*, u.codigo_unidad,i.codigo_inmueble, iq.nombres, iq.apellidos, p.codigo_propietario');
        $builder->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $builder->join('inm_inmueble i', 'i.id_inmueble = c.id_inmueble');
        $builder->join('inm_inquilino iq', 'iq.id_inquilino = c.id_inquilino');
        $builder->join('inm_propietario p', 'p.id_propietario = c.id_propietario');
        $builder->where('c.id_cobranza',$id);
        $item=$builder->get()->getResultArray(); 
        foreach ($item as $val)
        {
            if($val['estatus_cobranza']=='0')
                $estatus="PENDIENTE";
            else{
                if($val['estatus_cobranza']=='1')
                    $estatus="PAGADO";
                else
                    $estatus="ABONADO";
            }
            $data=[
            'id'=> $val['id_cobranza'],
            'inmueble'=> $val['codigo_inmueble'],
            'unidad'=> $val['codigo_unidad'],
            'propietario'=> $val['codigo_propietario'],
            'nombres'=> $val['nombres'],
            'apellidos'=> $val['apellidos'],

            'fecha'=> $val['fecha'],
            'folio'=> $val['folio'],
            'concepto'=> $val['concepto'],
            'cv_concepto'=> $val['cv_concepto'],
            'periodo'=> $val['periodo'],

            'cv_periodo'=> $val['cv_periodo'],
            'cobranza'=> $val['cobranza'],
            'abono'=> $val['abono'],
            'mora'=> $val['mora'],
            'convenio'=>$val['convenio'],
            'estatus'=> $estatus];
            
        }
        return $this->response->setJSON(['dato' => $data]);
    }

    public function delete($id)
    {
        $cobranzaModel= new CobranzaModel();
        $data=["id_cobranza"=>$id];
        $respuesta=$cobranzaModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/cobranza'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/cobranza'))->with('mensaje','5');
        }
    }
    
    public function crearMora()
    {
        $db= \Config\Database::connect();
        $builder = $db->table('inm_cobranza c');
        $builder->select('id_inquilino, COUNT(*) AS cantidad');
        $builder->where(['c.concepto'=>"RENTA", 'c.estatus_cobranza'=>0]);
        $builder->groupBy('id_inquilino');
        $inquilinos=$builder->get()->getResultArray(); 


        $buil= $db->table('inm_cobranza c');
        $buil->select('c.*, u.codigo_unidad,i.codigo_inmueble, iq.nombres, iq.apellidos, p.codigo_propietario');
        $buil->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $buil->join('inm_inmueble i', 'i.id_inmueble = c.id_inmueble');
        $buil->join('inm_inquilino iq', 'iq.id_inquilino = c.id_inquilino');
        $buil->join('inm_propietario p', 'p.id_propietario = c.id_propietario');
        $buil->where(['c.estatus_cobranza'=>0,'c.concepto'=>"RENTA"]);
        $item=$buil->get()->getResultArray(); 

        foreach($inquilinos as $inquilino)
        {
            $mora=0.0;
            $cobro=0.0;
            $cont=1;
            $inqui= $inquilino['id_inquilino'];
            $cantidad= $inquilino['cantidad'];
            foreach($item as $cobranza)
            {
                if(($cobranza['id_inquilino'] == $inqui)&&($cont< $cantidad))
                {
                    $id= $cobranza['id_cobranza'];
                    $mora= $mora+ 0.3;
                    $cobro=$cobro+$cobranza['cobranza']+($cobranza['cobranza']*($mora));
                    $data=['cobranza'=> $cobro,
                           'mora'=> $mora];
                    $cobranzaModel= new CobranzaModel();
                    $respuesta=$cobranzaModel->modificar($id,$data);
                    $cont++;
                }
                else{
                    if(($cobranza['id_inquilino'] == $inqui)&&($cont>=4))
                    {
                        $id= $cobranza['id_cobranza'];
                        $mora=1.0;
                        $cobro=$cobro+$cobranza['cobranza']+($cobranza['cobranza']*($mora));
                        $data=['cobranza'=> $cobro,
                               'mora'=> $mora];
                        $cobranzaModel= new CobranzaModel();
                        $respuesta=$cobranzaModel->modificar($id,$data);
                    }
                    
                    $mora=0.0;
                    $cont=0;
                }
                $cobro=0.0;
            }
        }
        $buil= $db->table('inm_cobranza c');
        $buil->select('c.*, u.codigo_unidad,i.codigo_inmueble, iq.nombres, iq.apellidos, p.codigo_propietario');
        $buil->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $buil->join('inm_inmueble i', 'i.id_inmueble = c.id_inmueble');
        $buil->join('inm_inquilino iq', 'iq.id_inquilino = c.id_inquilino');
        $buil->join('inm_propietario p', 'p.id_propietario = c.id_propietario');
        $buil->where(['c.estatus_cobranza'=>0,'c.concepto'=>"RENTA"]);
        $item['cobro']=$buil->get()->getResultArray(); 
         return redirect()->to(base_url('/cobranza'));
    }

}