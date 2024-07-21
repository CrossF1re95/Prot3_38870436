<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('aboutUs', 'Home::about_us');
$routes->get('acercaDe', 'Home::acerca_de');
$routes->get('register', 'Home::register');
$routes->get('login', 'Home::login');
$routes->get('catalog', 'Home::catalog');


/*Resgister routes*/
$routes->get('/register','user_controller::create');
$routes->post('/enviar-form','user_controller::formValidation');

/*Login Routes*/
$routes->get('/login','login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');
