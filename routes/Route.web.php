<?php

use App\Core\Router;
use App\Controller\ClasseController;
use App\Controller\EtudiantController;
use App\Controller\PersonneController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Exception\RouteNotFoundException;


$router = new Router;
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/etu',[EtudiantController::class,"lister"]);
$router->route('/ins',[EtudiantController::class,"inscrire"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route('/listerprofs',[ProfesseurController::class,"listerProf"]);


try {
    $router->resolve();
}catch (\RouteNotFoundException $ex){
    echo $ex->message;
}