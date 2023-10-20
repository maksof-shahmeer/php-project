<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');
// $routes->get('/confirm_email', 'SignupController::index');
$routes->post('/dashboard', 'DashboardController::index');
$routes->get('/verify_token', 'SignupController::token_verification');




$routes->get('/signup', 'SignupController::index');
$routes->get('/confirm_email', 'ConfirmEmail::index');
$routes->post('/signup', 'SignupController::validation');
