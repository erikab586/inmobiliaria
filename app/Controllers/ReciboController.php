<?php

namespace App\Controllers;
use App\Models\ContratoModel;
use App\Models\CobranzaModel;
use App\Models\InquilinoModel;
use App\Models\UnidadModel;
use App\Models\InmuebleModel;
use App\Models\IvaModel;


class ReciboController extends BaseController
{
    public function index()
    {
        $db= \Config\Database::connect();

        $inquilino= new InquilinoModel();
        $item['inquilino']= $inquilino->findAll();
        $unidad= new UnidadModel();
        $item['unidad']= $unidad->findAll();

        $builder = $db->table('inm_contrato c');
        $builder->select('c.*,i.nombres, i.apellidos, u.codigo_unidad, in.codigo_inmueble, p.codigo_propietario');
        $builder->join('inm_inquilino i', 'i.id_inquilino = c.id_inquilino');
        $builder->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $builder->join('inm_inmueble in', 'in.id_inmueble = c.id_inmueble');
        $builder->join('inm_propietario p', 'p.id_propietario = c.id_propietario');
        $item['contrato'] = $builder->get()->getResultArray();
        return view('recibos/index.php', $item);
    }
  
    public function create()
    {
        
    }
    

    public function edit($id)
    {

    }
    public function save() 
    {
        

    }
   
    public function delete($id)
    {
        
    }

    public function recibo($id)
    {

        $db= \Config\Database::connect();
        $builder = $db->table('inm_cobranza c');
        $builder->select('c.*, u.codigo_unidad,i.codigo_inmueble, iq.nombres, iq.apellidos, p.codigo_propietario');
        $builder->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $builder->join('inm_inmueble i', 'i.id_inmueble = c.id_inmueble');
        $builder->join('inm_inquilino iq', 'iq.id_inquilino = c.id_inquilino');
        $builder->join('inm_propietario p', 'p.id_propietario = c.id_propietario');
        $builder->where('c.id_inquilino',$id);
        $item['historial']=$builder->get()->getResultArray(); 


        
        $reciboNom= "RECIBO _2003_18_067_ABRIL202024";
        $pdf = new \FPDF('P', 'mm', 'letter');
        $pdf->AddPage();
        $pdf->SetMargins(30,30,30);
        $pdf->SetTitle("RECIBO_2003_18_067_ABRIL202024");
        //Encabezado
        $pdf->image(base_url().'app-assets/images/logo/logoreg.jpg', 15, 7, 43, 28);
        $pdf->SetX(60);
        $pdf->SetFont('Arial', 'B', 13);
        $pdf->cell(150, 5,utf8_decode( "Asociación Nacional de Propietarios de Casas y Edificios A.C."), 0, 1, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->SetX(60);
        $pdf->cell(150, 4,utf8_decode( "AVENIDA INSURGENTES SUR 100 DESPACHO 101, COL. JUAREZ, D.F"), 0, 1, 'L');
        $pdf->SetX(60);
        $pdf->cell(150, 5,utf8_decode( "TELEFONOS 55110131, 55110132, 55110133"), 0, 1, 'L');
        $pdf->SetX(60);
        $pdf->SetFont('Arial', '', 9);
        $pdf->cell(150, 4,utf8_decode( "email: anpro.df@gmail.com"), 0, 1, 'L');
        
        $pdf->SetFillColor(255,255,0,0);
        $pdf->Line(60,28,200,28);
        
        $pdf->SetX(55);$pdf->SetY(28);
        $pdf->cell(172, 4,utf8_decode( "Estado de cuenta e instructivo para pagar en el banco al día."), 0, 1, 'R');
        $pdf->cell(172, 4,utf8_decode( "martes,02 de abril de 2024"), 0, 1, 'R');
        $pdf->SetXY(60,41); 
        $pdf->setFont('Arial', 'B', 9);
        $texto = "Páguese en cualquier sucursal\ndel banco";
        $pdf->MultiCell(49.5,5, utf8_decode($texto), 1,'C');
        $pdf->image(base_url().'app-assets/images/logo/bsantander.png', 110, 40.72, 40, 10.3);
        $pdf->SetXY(150,41); 
        $convenio = "Convenio\n1037";
        $pdf->MultiCell(51,5, utf8_decode($convenio), 1, 'C');

        $pdf->Ln(10);
        $pdf->SetX(15);
        $pdf->setFont('Arial','' , 10);
        $pdf->cell(150, 5,utf8_decode( "Cuenta 2003 18 067"), 0, 1, 'L');
        $pdf->SetX(15);
        $pdf->cell(150, 5,utf8_decode( "MEDINA RINCON CRISTIAN RAMON"), 0, 1, 'L');
        $pdf->SetX(15);
        $pdf->cell(150, 5,utf8_decode( "ARRENDATARIO (A) DE: TORRES QUINTERO 2018 67, ESQ. GAVILAN CASA CONDOM. 067 COLONIA "), 0, 1, 'L');
        $pdf->SetX(15);
        $pdf->cell(150, 5,utf8_decode( "BARRIO SAN MIGUEL, DEL/MPO IZTAPALAPA, CIUDAD DE MEXICO CP 09360"), 0, 1, 'L');
        $pdf->Ln(10);
        $pdf->cell(150, 5,utf8_decode( "ADEUDOS A LA FECHA"), 0, 1, 'C');
        $pdf->Ln(10);
        $pdf->SetDrawColor(230, 230, 230);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetX(15);
        $pdf->cell(135, 6,utf8_decode( "CONCEPTO"), 1, 0, 'L'); $pdf->cell(50, 6,utf8_decode( "IMPORTE"), 1, 1, 'R');
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetX(15);
        $pdf->cell(135, 6,utf8_decode( "AGUA 012024"), 1, 0, 'L'); $pdf->cell(50, 6,utf8_decode( "$150.00"), 1, 1, 'R');
        $pdf->SetX(15);
        $pdf->cell(135, 6,utf8_decode( "CARGO PAGO BANCO"), 1, 0, 'L'); $pdf->cell(50, 6,utf8_decode( "$0.00"), 1, 1, 'R');
        $pdf->SetX(15);
        $pdf->cell(135, 6,utf8_decode( "RENTA 042024"), 1, 0, 'L'); $pdf->cell(50, 6,utf8_decode( "$12,000.OO"), 1, 1, 'R');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetX(15);
        $pdf->cell(135, 6,utf8_decode( "TOTAL A PAGAR"), 1, 0, 'L'); $pdf->cell(50, 6,utf8_decode( "$12,150.00"), 1, 1, 'R');
        $pdf->SetX(15);
        $pdf->cell(135, 6,utf8_decode( "(DOCE MIL CIENTOS CINCUENTA PESOS 00/100 M.N)"), 1, 0, 'L'); $pdf->cell(50, 6,utf8_decode( "$12,150.00"), 1, 1, 'R');
        
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln(20);
        $pdf->SetDrawColor(230, 230, 230);
        $pdf->cell(50, 5,utf8_decode( "REFERENCIA"), 1, 0, 'C');  $pdf->cell(50, 5,utf8_decode( "FECHA LIMITE DE PAGO"), 1, 0, 'C');$pdf->cell(50, 5,utf8_decode( "IMPORTE"), 1, 1, 'C');
        $pdf->cell(50, 5,utf8_decode( "NUMERO DE CUENTA 1"), 1, 0, 'C');  $pdf->cell(50, 5,utf8_decode( "11 de abril 2024"), 1, 0, 'C');$pdf->cell(50, 5,utf8_decode( "$12,150.00"), 1, 1, 'C');
        $pdf->cell(50, 5,utf8_decode( "NUMERO DE CUENTA 2"), 1, 0, 'C');  $pdf->cell(50, 5,utf8_decode( "26 de abril 2024"), 1, 0, 'C');$pdf->cell(50, 5,utf8_decode( "$13,365.00"), 1, 1, 'C');
        $pdf->cell(50, 5,utf8_decode( "NUMERO DE CUENTA 3"), 1, 0, 'C');  $pdf->cell(50, 5,utf8_decode( "30 de abril 2024"), 1, 0, 'C');$pdf->cell(50, 5,utf8_decode( "$14,580.00"), 1, 1, 'C');
        

        $this->response->setHeader('Content-Type', 'application/pdf');
        $pdf->Output($reciboNom.'.pdf', 'I');
    }

    public function historial($id)
    {
        $db= \Config\Database::connect();
        $builder = $db->table('inm_cobranza c');
        $builder->select('c.*, u.codigo_unidad,i.codigo_inmueble, iq.nombres, iq.apellidos, p.codigo_propietario');
        $builder->join('inm_unidad u', 'u.id_unidad = c.id_unidad');
        $builder->join('inm_inmueble i', 'i.id_inmueble = c.id_inmueble');
        $builder->join('inm_inquilino iq', 'iq.id_inquilino = c.id_inquilino');
        $builder->join('inm_propietario p', 'p.id_propietario = c.id_propietario');
        $builder->where('c.id_inquilino',$id);
        $item['historial']=$builder->get()->getResultArray(); 
        return view('recibos/historial',$item);
        //print_r($item);
    }
}