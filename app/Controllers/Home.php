<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Pagina Principal';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('front/principal_ulti');
        echo view('front/footerview');
    }
    
    public function about_us()
    {
        $data['titulo']='Quienes Somos';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('front/aboutUs');
        echo view('front/footerview');
    }

    public function acerca_de()
    {
        $data['titulo']='Acerca de';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('front/acercaDe');
        echo view('front/footerview');
    }

    public function register()
    {
        $data['titulo']='Registrarse';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('back/usuario/register');
        echo view('front/footerview');
    }

    public function login()
    {
        $data['titulo']='Iniciar Sesion';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('back/usuario/login');
        echo view('front/footerview');
    }
    
    public function catalog()
    {
        $data['titulo']='Catalogo';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('front/catalog');
        echo view('front/footerview');
    }
}
