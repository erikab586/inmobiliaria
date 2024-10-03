<?php

namespace App\Controllers;
use App\Models\ContratoModel;
use App\Models\CobranzaModel;
use App\Models\InquilinoModel;
use App\Models\UnidadModel;
use App\Models\InmuebleModel;
use App\Models\IvaModel;


class ContratoController extends BaseController
{
    public function index()
    {
        $db= \Config\Database::connect();

        $inquilino= new InquilinoModel();
        $item['inquilino']= $inquilino->findAll();
        $unidad= new UnidadModel();
        $item['unidad']= $unidad->findAll();

        $builder = $db->table('inm_contrato c');
        $builder->select('c.*,i.nombres, i.apellidos, u.codigo_unidad');
        $builder->join('inm_inquilino i', 'i.id_inquilino = c.id_inquilino');
        $builder->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $item['contrato'] = $builder->get()->getResultArray();
        return view('contrato/index.php', $item);
    }
    
    public function generador()
    {
       $fecha_actual= date('Y-m-d');
       //$ultimo = date('Y-m-t', strtotime($fecha_actual)); //No borrar esta linea, sera la compcaracion
       $primer_dia_mes = date("Y-m-01", strtotime($fecha_actual));
       $fecha_ejemplo= '2024-04-09';
       $mes = date('m', strtotime($primer_dia_mes)); // Obtiene el mes (formato: 01-12)
       $anio = date('Y', strtotime($primer_dia_mes)); // Obtiene el año (formato: 2024)
        //echo $primer_dia_mes;
       $concepto="RENTA";
       $cvconcepto=1;
       switch ($mes)
       {
            case '01':
                $mesl="Enero";
            break;
            case '02':
                $mesl="Febrero";
            break;
            case '03':
                $mesl="Marzo";
            break;
            case '04':
                $mesl="Abril";
            break;
            case '05':
                $mesl="Mayo";
            break;
            case '06':
                $mesl="Junio";
            break;
            case '07':
                $mesl="Julio";
            break;
            case '08':
                $mesl="Agosto";
            break;
            case '09':
                $mesl="Septiembre";
            break;
            case '10':
                $mesl="Octubre";
            break;
            case '11':
                $mesl="Noviembre";
            break;
            case '06':
                $mesl="Diciembre";
            break;
            default: echo "Error!!! ";
        }
        $periodo=$mesl."-".$anio;
        $cvperiodo=$mes.$anio;
        $status=1;
        
        if($fecha_actual==$primer_dia_mes)
        {
            $db= \Config\Database::connect();
            $builder = $db->table('inm_contrato');
            $builder->select('*');
            $builder->where('estatus', $status);
            $item= $builder->get()->getResultArray();
            // Codigo que permite verificar los contratos vencidos
            $cobranzaModel= new CobranzaModel();
            $cobro=$cobranzaModel->findAll();
            $saldo=0.0;
            $periodoDif=$mesl."-".$anio;
            $cvperiodoDif=$mes.$anio;
            foreach($cobro as $dif)
            {
                if($dif['abono']<$dif['cobranza'])
                {
                    $saldo=$dif['cobranza']-$dif['abono'];
                    $datosDif=["id_propietario"=>$dif['id_propietario'],
                    "id_inmueble"=> $dif['id_inmueble'],
                    "id_unidad"=> $dif['id_unidad'],
                    "id_inquilino"=> $dif['id_inquilino'],
                    "fecha"=> $fecha_ejemplo, 
                    "concepto"=> "DIFERENCIA", 
                    "periodo"=> $periodoDif, 
                    "cv_periodo"=> $cvperiodoDif, 
                    "cv_concepto"=> 10, 
                    "cobranza"=> $saldo];
                    $cobranzaModel= new CobranzaModel();
                    $respuesta=$cobranzaModel->insertar($datosDif);
                   
                }
            }
            foreach($item as $cont)
            {
                
                if($fecha_ejemplo==$cont['fecha_terminoContrato'])
                {
                    
                    if($cont['renta_actual']==0)
                    {
                        $cont['renta_actual']= $cont['renta_actual']+($cont['renta_inicial']*($cont['incremento']/100));
                    }
                    else
                    {
                       $cont['renta_actual']= $cont['renta_actual']+($cont['renta_actual']*($cont['incremento']/100)); 
                       
                    }
                }
               
                $data=["id_propietario"=>$dif['id_propietario'],
                "id_inmueble"=> $cont['id_inmueble'],
                "id_unidad"=> $cont['id_unidad'],
                "id_inquilino"=> $cont['id_inquilino'],
                "fecha"=> $fecha_ejemplo, 
                "concepto"=> $concepto, 
                "periodo"=> $periodo, 
                "cv_periodo"=> $cvperiodo, 
                "cv_concepto"=> $cvconcepto, 
                "cobranza"=> $cont['renta_actual']];
                $cobranzaModel= new CobranzaModel();
                $respuesta=$cobranzaModel->insertar($data);
                $saldo=0.0;
                $periodoIva=$mesl."-".$anio;
                $cvperiodoIva=$mes.$anio;
                if($cont['iva']>0)
                {
                    $saldo=$saldo+($cont['renta_actual']*($cont['iva']/100));
                    $datos=["id_propietario"=>$dif['id_propietario'],
                    "id_inmueble"=> $cont['id_inmueble'],
                    "id_unidad"=> $cont['id_unidad'],
                    "id_inquilino"=> $cont['id_inquilino'],
                    "fecha"=> $fecha_ejemplo, 
                    "concepto"=> "IVA RENTA", 
                    "periodo"=> $periodoIva, 
                    "cv_periodo"=> $cvperiodoIva, 
                    "cv_concepto"=> 2, 
                    "cobranza"=> $saldo];
                    $cobranzaModel= new CobranzaModel();
                    $respuesta=$cobranzaModel->insertar($datos);
                }
                $saldo=0.0;
                $periodoIsr=$mesl."-".$anio;
                $cvperiodoIsr=$mes.$anio;
                if($cont['retencion_isr']>0)
                {
                    $saldo=$saldo+($cont['renta_actual']*($cont['retencion_isr']/100));
                    $datosisr=["id_propietario"=>$dif['id_propietario'],
                    "id_inmueble"=> $cont['id_inmueble'],
                    "id_unidad"=> $cont['id_unidad'],
                    "id_inquilino"=> $cont['id_inquilino'],
                    "fecha"=> $fecha_ejemplo, 
                    "concepto"=> "RETENCION ISR", 
                    "periodo"=> $periodoIsr, 
                    "cv_periodo"=> $cvperiodoIsr, 
                    "cv_concepto"=> 9, 
                    "cobranza"=> $saldo];
                    $cobranzaModel= new CobranzaModel();
                    $respuesta=$cobranzaModel->insertar($datosisr);
                }
            }
           

        }else
        {
            echo "Error!!!! No es fecha de generar Cobranza".$fecha_actual;
        }
       
       return redirect()->to(base_url('/cobranza'))->with('mensaje','1');
        //print_r($cobro);
    }
  
    public function create()
    {
        $db= \Config\Database::connect();
        $builder = $db->table('inm_iva');
        $builder->select('*');
        $item['iva'] = $builder->get()->getResultArray();
        
        $unidades= new UnidadModel();
        $item['unidad']= $unidades->findAll();
        $inmuebles= new InmuebleModel();
        $item['inmueble']= $inmuebles->findAll();
        $inquilinos= new InquilinoModel();
        $item['inquilino']= $inquilinos->findAll();
        return view('contrato/crear.php', $item); 
    }
    public function guardarNuevo() //Este metodo sirve para capturar los datos para un nuevo contrato y guardar en la bd
    {
      
        $inmueble= $this->request->getPost('inmueble');
        $unidad= $this->request->getPost('unidad');
        $inquilino= $this->request->getPost('inquilino');
        $fecha_contrato= $this->request->getPost('fecha_contrato');
        $fecha_termino= $this->request->getPost('fecha_termino');
        $inicial= $this->request->getPost('inicial');
        $actual= $this->request->getPost('actual');
        $diapago= $this->request->getPost('diapago');
        $incremento= $this->request->getPost('incremento');
        $condicion= $this->request->getPost('condicion');
        $tiempo= $this->request->getPost('tiempo');
        $isr= $this->request->getPost('isr');
        $iva= $this->request->getPost('iva');
        $servicio= $this->request->getPost('servicio');
        $estatus= $this->request->getPost('estatus');
        $obs= $this->request->getPost('observacion');
        $data=["id_inmueble"=>$inmueble,
               "id_unidad"=>$unidad,
               "id_inquilino"=>$inquilino,
               "fecha_contrato"=>$fecha_contrato,
               "dia_pago"=>$diapago ,
               "renta_inicial"=>$inicial,
               "incremento"=>$incremento,
               "porcentaje_cond"=>$condicion,
               "cond_incremento"=>$obs,
               "renta_actual"=>$actual,
               "estatus_servicios"=>$servicio,
               "tiempo_contrato"=>$tiempo,
               "fecha_terminoContrato"=>$fecha_termino,
               "iva"=>$iva,
               "retencion_isr"=>$isr,
               "estatus"=>$estatus];
        $contratoModel= new ContratoModel();
        $respuesta=$contratoModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/contrato'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/contrato'))->with('mensaje','0');
        }

    }

    public function edit($id)
    {
        $db= \Config\Database::connect();
        $builder = $db->table('inm_iva');
        $builder->select('*');
        $item['iva'] = $builder->get()->getResultArray();
        
        $unidades= new UnidadModel();
        $item['unidad']= $unidades->findAll();
        $inmuebles= new InmuebleModel();
        $item['inmueble']= $inmuebles->findAll();
        $inquilinos= new InquilinoModel();
        $item['inquilino']= $inquilinos->findAll();
        $builder = $db->table('inm_contrato c');
        $builder->select('c.*, u.codigo_unidad,i.codigo_inmueble, iq.nombres, iq.apellidos');
        $builder->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $builder->join('inm_inmueble i', 'i.id_inmueble = c.id_inmueble');
        $builder->join('inm_inquilino iq', 'iq.id_inquilino = c.id_inquilino');
        $builder->where('c.id_contrato',$id);
        $item['contrato']=$builder->get()->getResultArray(); 
        return view('contrato/editar',$item);
    }
    public function save() //Este metodo sirve para capturar los nuevos datos para modificar contrato y editar en la bd
    {
        $id= $this->request->getPost('id');
        $inmueble= $this->request->getPost('inmueble');
        $unidad= $this->request->getPost('unidad');
        $inquilino= $this->request->getPost('inquilino');
        $fecha_contrato= $this->request->getPost('fecha_contrato');
        $fecha_termino= $this->request->getPost('fecha_termino');
        $inicial= $this->request->getPost('inicial');
        $actual= $this->request->getPost('actual');
        $diapago= $this->request->getPost('diapago');
        $incremento= $this->request->getPost('incremento');
        $condicion= $this->request->getPost('condicion');
        $tiempo= $this->request->getPost('tiempo');
        $isr= $this->request->getPost('isr');
        $iva= $this->request->getPost('iva');
        $servicio= $this->request->getPost('servicio');
        $estatus= $this->request->getPost('estatus');
        $obs= $this->request->getPost('observacion');
        $data=["id_inmueble"=>$inmueble,
               "id_unidad"=>$unidad,
               "id_inquilino"=>$inquilino,
               "fecha_contrato"=>$fecha_contrato,
               "dia_pago"=>$diapago ,
               "renta_inicial"=>$inicial,
               "incremento"=>$incremento,
               "porcentaje_cond"=>$condicion,
               "cond_incremento"=>$obs,
               "renta_actual"=>$actual,
               "estatus_servicios"=>$servicio,
               "tiempo_contrato"=>$tiempo,
               "fecha_terminoContrato"=>$fecha_termino,
               "iva"=>$iva,
               "retencion_isr"=>$isr,
               "estatus"=>$estatus];
        $contratoModel= new ContratoModel();
        $respuesta=$contratoModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('/contrato'))->with('mensaje','2');
        }
        else{
            return redirect()->to(base_url('/contrato'))->with('mensaje','3');
        }

    }
    public function buscar($id)
    {
        $contenido = $id;
        $db= \Config\Database::connect();
        $builder = $db->table('inm_contrato c');
        $builder->select('c.*, u.codigo_unidad,i.codigo_inmueble, iq.nombres, iq.apellidos');
        $builder->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $builder->join('inm_inmueble i', 'i.id_inmueble = c.id_inmueble');
        $builder->join('inm_inquilino iq', 'iq.id_inquilino = c.id_inquilino');
        $builder->where('c.id_contrato',$id);
        $item=$builder->get()->getResultArray(); 
        foreach ($item as $val)
        {
            if($val['estatus']=='1')
                $estatus="ACTIVO";
            else
                $estatus="INACTIVO";

            if($val['estatus_servicios']=='1')
                $estatuServicio="APLICA";
            else
                $estatuServicio="NO APLICA";

            $data=[
            'id'=> $val['id_contrato'],
            'inmueble'=> $val['codigo_inmueble'],
            'unidad'=> $val['codigo_unidad'],
            'nombres'=> $val['nombres'],
            'apellidos'=> $val['apellidos'],
            'fechaContrato'=> $val['fecha_contrato'],
            'rentaInicial'=> $val['renta_inicial'],
            'incremento'=> $val['incremento'],
            'porcCond'=> $val['porcentaje_cond'],
            'rentaActual'=> $val['renta_actual'],
            'tiempoCont'=> $val['tiempo_contrato'],
            'fechaTermCont'=> $val['fecha_terminoContrato'],
            'diaPago'=> $val['dia_pago'],
            'monto'=> $val['monto_renta'],
            'iva'=> $val['iva'],
            'retencion'=> $val['retencion_isr'],
            'condInc'=> $val['cond_incremento'],
            'estServ'=> $estatuServicio,
            'estatus'=> $estatus];
            
        }


        
        //print_r($data);
        return $this->response->setJSON(['dato' => $data]);
    }
    public function delete($id)
    {
        $contratoModel= new ContratoModel();
        $data=["id_contrato"=>$id];
        $respuesta=$contratoModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/contrato'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/contrato'))->with('mensaje','5');
        }
    }

    public function recibo()
    {
        $pdf = new \FPDF('P', 'mm', 'letter');
        $pdf->AddPage();
        $pdf->SetMargins(30,30,30);
        $pdf->SetTitle("RECIBO_2003_18_067_ABRIL202024");
        //Encabezado
        $pdf->image(base_url().'app-assets/images/logo/logoreg.jpg', 20, 7, 30, 20);
        $pdf->SetX(55);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->cell(150, 5,utf8_decode( "Asociación Nacional de Propietarios de Casas y Edificios A.C."), 0, 1, 'L');
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetX(55);
        $pdf->cell(150, 4,utf8_decode( "AVENIDA INSURGENTES SUR 100 DESPACHO 101, COL. JUAREZ, D.F"), 0, 1, 'L');
        $pdf->SetX(55);
        $pdf->cell(150, 4,utf8_decode( "TELEFONOS 55110131, 55110132, 55110133"), 0, 1, 'L');
        $pdf->SetX(55);
        $pdf->cell(150, 4,utf8_decode( "email: anpro.df@gmail.com"), 0, 1, 'L');
        $pdf->SetFillColor(255,255,0,0);
        $pdf->Line(55,32,200,32);
        
        $this->response->setHeader('Content-Type', 'application/pdf');
        $pdf->Output('mi_archivo.pdf', 'I');
    }
}