<?php

use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('App\Controller');

/**
 * Insérez vos routes ici
 */

$router->get('/', 'AppController@index');

$router->get('/vtc', 'VtcController@index');

$router->get('/vehicule', function(){
    echo "Voici les véhicules";
});

$router->get('/conducteur', function(){
    echo "Voici les conducteurs";
});

$router->get('/association_vehicule_conducteur', function(){
    echo "Voici les associations de vehicules et conducteurs";
});

$router->run();

