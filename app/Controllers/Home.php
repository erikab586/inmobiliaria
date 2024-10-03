<?php

namespace App\Controllers;
use App\Models\MunicipioModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function listado()
    {
        $estado= new MunicipioModel();
        $item= $estado->findAll();

        foreach($item as $list)
        {
           echo "('".$list['id_estado']."' ,'". $list['nombre_municipio']."'),<br>";
        }
        //print_r($item);
    }
}
