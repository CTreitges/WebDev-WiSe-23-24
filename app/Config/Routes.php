<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TaskController::index');
$routes->get('(:any)/viewGruppennummer', 'Start::viewGruppennummer');
$routes->get('/test', 'TaskController::test');

//Tasks
$routes->get('/Startseite', 'TaskController::index');
$routes->get('/taskErstellen', 'TaskController::crudTasks/0/0');
$routes->get('/taskBearbeiten/(:num)/1', 'TaskController::crudTasks/$1/1');
$routes->get('/taskLoeschen/(:num)/2', 'TaskController::crudTasks/$1/2');
$routes->post('/submitTasks','TaskController::submitTasks');

//Spalten
$routes->get('/Spalten', 'SpaltenController::index');
$routes->get('/spalteErstellen', 'SpaltenController::crudSpalten/0/0');
$routes->get('/spalteBearbeiten/(:num)/1','SpaltenController::crudSpalten/$1/1');
$routes->get('/spalteLoeschen/(:num)/2','SpaltenController::crudSpalten/$1/2');
$routes->post('/submitSpalten','SpaltenController::submitSpalten');