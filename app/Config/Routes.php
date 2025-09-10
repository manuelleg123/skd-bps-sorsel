<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthenticationController::index');
$routes->post('/attemptLogin', 'AuthenticationController::attemptLogin');
$routes->get('/logout', 'AuthenticationController::logout');
$routes->get('/form', 'FormController::index');
$routes->post('/form/submit', 'FormController::submit');
$routes->get('/test', 'ResponsesController::test');

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/responden', 'DashboardController::responden');
    $routes->get('/dashboard', 'DashboardController::index');
    $routes->get('/logout', 'AuthController::logout');
    $routes->get('/allResponsesWithAnswers', 'ResponsesController::getAllResponsesWithAnswers');
    $routes->get('/users', 'DashboardController::users');
    $routes->get('/allUsers', 'UsersController::getAllUsers');
});
$routes->delete('/responses/delete/(:num)', 'ResponsesController::deleteResponse/$1');
$routes->delete('/users/delete/(:num)', 'UsersController::deleteUser/$1');
