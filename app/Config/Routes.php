<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/form', 'FormController::index');
$routes->get('/form1', 'FormController::form1');
$routes->get('/form2', 'FormController::form2');
$routes->get('/dashboard', 'DashboardController::index');
