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
$routes->post('/form/submit', 'FormController::submit');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/responden', 'DashboardController::responden');
$routes->get('/allResponsesWithAnswers', 'ResponsesController::getAllResponsesWithAnswers');
$routes->get('/test', 'ResponsesController::test');
