<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');
// $routes->get('/confirm_email', 'SignupController::index');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/verify_token', 'SignupController::token_verification');
$routes->post('/sign-in', 'SigninController::index');
$routes->get('/signup', 'SignupController::index');
$routes->post('/signup', 'SignupController::validation');
$routes->get('/confirm_email', 'ConfirmEmail::index');
$routes->get('/change-password', 'ChangePasswordController::index');
$routes->post('/change-password', 'ChangePasswordController::passwordChange');
$routes->get('/reset-password', 'resetController::view_reset_email');
$routes->post('/resetpassword', 'resetController::verification');
$routes->post('/token_verification', 'resetController::validation');
$routes->get('/logout', 'logoutController::index');
$routes->get('(:any)', 'Home::redirect/$1');



//filtering the routes

// $routes->get('/', 'Home::index', ['filter' => 'accessControl']);
// $routes->post('/', 'Home::index', ['filter' => 'accessControl']);
// $routes->get('/verify_token', 'SignupController::token_verification', ['filter' => 'accessControl']);
// $routes->get('/signup', 'SignupController::index', ['filter' => 'accessControl']);
// $routes->get('/confirm_email', 'ConfirmEmail::index', ['filter' => 'accessControl']);
// $routes->post('/signup', 'SignupController::validation', ['filter' => 'accessControl']);
// $routes->get('/change-password', 'ChangePasswordController::index', ['filter' => 'accessControl']);
// $routes->post('/change-password', 'ChangePasswordController::passwordChange', ['filter' => 'accessControl']);
// $routes->post('/dashboard', 'DashboardController::index', ['filter' => 'accessControl']);

