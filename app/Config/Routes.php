<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');
$routes->post('/confirm_email', 'SignupController::index');
$routes->get('/signup', 'SigninController::index');
$routes->post('/sign-up', 'SigninController::index');
$routes->post('/dashboard', 'DashboardController::index');
$routes->get('/verify_token', 'SignupController::token_verification');
$routes->post('/signup', 'SignupController::validation');
