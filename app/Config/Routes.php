<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/courses', 'Home::courses');
$routes->get('/placement', 'Home::placement');
$routes->get('/campus', 'Home::campus');
$routes->get('/events', 'Home::events');
$routes->get('/contact', 'Home::contact');
