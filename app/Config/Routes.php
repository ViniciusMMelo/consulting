<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Login
$routes->get('/login', 'Auth::login');
$routes->post('/auth', 'Auth::auth_login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/unauthorized', 'Auth::login');
// App
$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('/myConsulting', 'Consulting::index');
    $routes->get('/consulting/new', 'Consulting::newConsulting');
    $routes->group('admin', ['filter' => 'role:1'], static function ($routes) {
        $routes->get('consulting', 'Admin::consulting');
        $routes->get('users', 'Admin::users');
    });
    
});

