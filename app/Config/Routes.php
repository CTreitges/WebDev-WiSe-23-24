<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Start::index');
$routes->get('(:any)/viewGruppennummer', 'Start::viewGruppennummer');
$routes->get('/Startseite', 'Start::index');
$routes->get('/Spalten', 'Start::Spalten');
$routes->get('/SpalteErstellen', 'Start::SpalteErstellen');
