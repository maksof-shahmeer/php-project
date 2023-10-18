<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Home::index');
$routes->post('/confirm_email', 'SignupController::index');
$routes->post('/dashboard', 'DashboardController::index');
$routes->get('/verify_token', 'SignupController::token_verification');

