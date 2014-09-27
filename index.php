<?php
require "/vendor/autoload.php";

use \Slim\Slim as Slim;

$app = new Slim();
 

$app->config(array(
   'templates.path' => './templates/'
));

$app->get('/', function() use ($app) {
 	$app->render('index.php');
});


$app->get('/upload', function() use ($app) {
 	$app->render('upload.php');
});


$app->run();