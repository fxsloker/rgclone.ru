<?php
require "/vendor/autoload.php";

// create new Slim instance
$app = new \Slim\Slim();
 
// add new Route
$app->get('/', function() use ($app) {
 	echo "<h1>Hello Slim World</h1>";
});
 
// run the Slim app
$app->run();