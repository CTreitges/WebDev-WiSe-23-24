<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TaskController::index');
$routes->get('(:any)/viewGruppennummer', 'Start::viewGruppennummer');
$routes->get('/Startseite', 'TaskController::index');
$routes->get('/Spalten', 'TaskController::Spalten');
$routes->get('/SpalteErstellen', 'TaskController::SpalteErstellen');
$routes->get('/taskErstellen', 'TaskController::TaskErstellen');
$routes->post('/createTask', 'TaskController::CreateTask');
$routes->get('/taskBearbeiten', 'TaskController::TaskBearbeiten');
$routes->get('/test', 'TaskController::test');