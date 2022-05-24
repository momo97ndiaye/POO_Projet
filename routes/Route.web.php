<?php

use App\Core\Router;
use App\Controller\AcController;
use App\Controller\RpController;
use App\Controller\ClasseController;
use App\Controller\EtudiantController;
use App\Controller\PersonneController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Exception\RouteNotFoundException;


$router = new Router;
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/listeretu',[EtudiantController::class,"lister"]);
$router->route('/ins',[EtudiantController::class,"inscrire"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/listerpersonne',[PersonneController::class,"listerPersonne"]);
$router->route('/listerprof',[ProfesseurController::class,"listerProf"]);
$router->route('/listerp',[RpController::class,"listeRp"]);
$router->route('/listerac',[AcController::class,"listerAc"]);


try {
    $router->resolve();
}catch (\RouteNotFoundException $ex){
    echo $ex->message;
}