<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('login', 'Home::login');
$routes->get('registro', 'Home::registro');
$routes->get('equipo_mclaren', 'Home::mclaren');
$routes->get('equipo_ferrari', 'Home::ferrari');
$routes->get('equipo_redbull', 'Home::redbull');
