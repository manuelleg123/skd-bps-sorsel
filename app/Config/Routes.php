<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthenticationController::index');
$routes->post('/login', 'AuthenticationController::login');
$routes->get('/logout', 'AuthenticationController::logout');
$routes->get('/form', 'FormController::index');
$routes->get('/form1', 'FormController::form1');
$routes->get('/form2', 'FormController::form2');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/responden', 'DashboardController::responden');
