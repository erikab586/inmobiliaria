<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;
//use \App\Filters\SessionAdmin;
class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array<string, class-string|list<class-string>> [filter_name => classname]
     *                                                     or [filter_name => [classname1, classname2, ...]]
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'SessionAdmin'  => \App\Filters\SessionAdmin::class
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array<string, array<string, array<string, string>>>|array<string, list<string>>
     */
    public array $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [
        "SessionAdmin" =>[
        "before" =>[
            "/cobranza",
            '/salir', 
            '/perfil', 
            '/usuario', 
            '/formusuario',
            '/crearusuarios',
            '/editarusuarios/(:any)',
            '/guardarusuarios',
            '/buscar/(:any)',
            '/eliminarusuarios/(:any)',

            //METODOS QUE CORRESPONDE AL MODULO ROL DE USUARIO
            '/rol', 
            '/crearroles',
            '/editarroles/(:any)',
            '/guardarroles',
            '/borrarroles/(:any)',

            //METODOS QUE CORRESPONDE AL MODULO IVA
            '/iva', 
            '/creariva',
            '/editariva/(:any)',
            '/guardariva',
            '/borrariva/(:any)',

            //METODOS QUE CORRESPONDE AL MODULO CONCEPTO
            '/concepto',
            '/crearconcepto',
            '/editarconcepto/(:any)',
            '/guardarconcepto',
            '/eliminarconcepto/(:any)',

            //METODOS QUE CORRESPONDE AL MODULO COBRANZA
            '/crearcobranza',
            '/guardarnuevo', // Metodo que recibe los datos de la nueva cobranza
            '/editarcobranza/(:any)',
            '/guardarcobranza',
            '/buscarcobranza/(:any)',
            '/eliminarcobranza/(:any)',


            //METODOS QUE CORRESPONDE AL MODULO CONTRATO
            '/generador',
            '/contrato',
            '/crearcontrato',
            '/guardarnuevo',
            '/editarcontrato/(:any)',
            '/guardarcontrato',
            '/buscarcontrato/(:any)',
            '/eliminarcontrato/(:any)',
            '/diferencia']
        ]
    ];
}
