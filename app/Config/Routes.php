<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('estudiantes','EstudiantesController::index');
$routes->post('agregar_estudiante','EstudiantesController::agregarEstudiante');
$routes->get('buscar_estudiante/(:num)','EstudiantesController::buscarEstudiante/$1');
$routes->post('login','EmpleadosController::index');