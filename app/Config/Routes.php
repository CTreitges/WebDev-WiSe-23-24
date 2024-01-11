<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Start::index');
$routes->get('(:any)/viewGruppennummer', 'Start::viewGruppennummer');
$routes->get('/Startseite', 'TaskController::index');
$routes->get('/Spalten', 'Start::Spalten');
$routes->get('/SpalteErstellen', 'Start::SpalteErstellen');
$routes->get('/test', 'TaskController::test');