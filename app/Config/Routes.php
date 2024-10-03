<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//METODOS QUE CORRESPONDE AL MODULO USUARIO
$routes->get('/', 'UsuarioController::index');
$routes->post('/login', 'UsuarioController::login'); //Metodo que recibe los datos del usuario a loguear
$routes->get('/salir', 'UsuarioController::salir');
$routes->get('/perfil', 'UsuarioController::perfil');
$routes->get('/usuario', 'UsuarioController::lista');
$routes->get('/formusuario','UsuarioController::formUsuario');
$routes->post('/crearusuarios','UsuarioController::create');
$routes->get('/editarusuarios/(:any)','UsuarioController::edit/$1');
$routes->post('/guardarusuarios','UsuarioController::save');
$routes->get('/buscar/(:any)','UsuarioController::buscar/$1');
$routes->get('/eliminarusuarios/(:any)','UsuarioController::delete/$1');

//METODOS QUE CORRESPONDE AL MODULO ROL DE USUARIO
$routes->get('/rol', 'RolesController::index');
$routes->post('/crearroles','RolesController::create');
$routes->get('/editarroles/(:any)','RolesController::edit/$1');
$routes->post('/guardarroles','RolesController::save');
$routes->get('/borrarroles/(:any)','RolesController::delete/$1');

//METODOS QUE CORRESPONDE AL MODULO IVA
$routes->get('/iva', 'IvaController::index');
$routes->post('/creariva','IvaController::create');
$routes->get('/editariva/(:any)','IvaController::edit/$1');
$routes->post('/guardariva','IvaController::save');
$routes->get('/borrariva/(:any)','IvaController::delete/$1');

//METODOS QUE CORRESPONDE AL MODULO PROPIETARIO
$routes->get('/propietario', 'PropietarioController::index');
$routes->get('/crearpropietario','PropietarioController::create');
$routes->post('/nuevopropietario', 'PropietarioController::guardar');
$routes->get('/editarpropietario/(:any)','PropietarioController::edit/$1');
$routes->post('/guardarpropietario','PropietarioController::save');
$routes->get('/buscarpropietario/(:any)','PropietarioController::buscar/$1');
$routes->get('/eliminarpropietario/(:any)','PropietarioController::delete/$1');

//METODOS QUE CORRESPONDE AL MODULO INMUEBLE
$routes->get('/inmueble', 'InmuebleController::index');
$routes->get('/crearinmueble','InmuebleController::create');
$routes->post('/nuevoinmueble', 'InmuebleController::guardar');
$routes->get('/editarinmueble/(:any)','InmuebleController::edit/$1');
$routes->post('/guardarinmueble','InmuebleController::save');
$routes->get('/buscarinmueble/(:any)','InmuebleController::buscar/$1');
$routes->get('/eliminarinmueble/(:any)','InmuebleController::delete/$1');

//METODOS QUE CORRESPODE AL MODULO UNIDAD
$routes->get('/unidad', 'UnidadController::index');
$routes->get('/crearunidad','UnidadController::create');
$routes->post('/nuevaunidad','UnidadController::guardar'); 
$routes->get('/editarunidad/(:any)','UnidadController::edit/$1');
$routes->post('/guardarunidad','UnidadController::save');
$routes->get('/buscarunidad/(:any)','UnidadController::buscar/$1');
$routes->get('/eliminarunidad/(:any)','UnidadController::delete/$1');


//METODOS QUE CORRESPONDE AL MODULO CONCEPTO
$routes->get('/concepto', 'ConceptoController::index');
$routes->post('/crearconcepto','ConceptoController::create');
$routes->get('/editarconcepto/(:any)','ConceptoController::edit/$1');
$routes->post('/guardarconcepto','ConceptoController::save');
$routes->get('/eliminarconcepto/(:any)','ConceptoController::delete/$1');

//METODOS QUE CORRESPONDE AL MODULO COBRANZA
$routes->get('/cobranza', 'CobranzaController::index');
$routes->get('/crearcobranza','CobranzaController::create');
$routes->post('/guardarnuevo','CobranzaController::guardar'); // Metodo que recibe los datos de la nueva cobranza
$routes->get('/editarcobranza/(:any)', 'CobranzaController::edit/$1');
$routes->post('/guardarcobranza','CobranzaController::save');
$routes->get('/buscarcobranza/(:any)','CobranzaController::buscar/$1');
$routes->get('/eliminarcobranza/(:any)','CobranzaController::delete/$1');
$routes->get('/mora','CobranzaController::crearMora');

//METODOS QUE CORRESPONDE AL MODULO CONTRATO
$routes->get('/generador','ContratoController::generador' );
$routes->get('/contrato','ContratoController::index' );
$routes->get('/crearcontrato','ContratoController::create');
$routes->post('/guardarnuevo','ContratoController::guardarNuevo');
$routes->get('/editarcontrato/(:any)','ContratoController::edit/$1');
$routes->post('/guardarcontrato','ContratoController::save');
$routes->get('/buscarcontrato/(:any)','ContratoController::buscar/$1');
$routes->get('/eliminarcontrato/(:any)','ContratoController::delete/$1');
$routes->get('/diferencia','ContratoController::buscarDiferencia');

//METODOS QUE CORRESPONDE AL MODULO RECIBO
$routes->get('/listado','ReciboController::index' );
//$routes->get('/recibo','ReciboController::recibo');
$routes->get('/recibo/(:any)','ReciboController::recibo/$1');
$routes->get('/historial/(:any)','ReciboController::historial/$1');
$routes->get('/enviarws/(:any)','ReciboController::enviarWs/$1');
$routes->get('listado','Home::listado');