<?php
require "/vendor/autoload.php";

use \Slim\Slim as Slim;

$app = new Slim();
 

$app->config(array(
   'templates.path' => 'templates/'
));

$app->get('/', function() use ($app) {
 	$app->render('main.tpl');
});

$app->get('/upload', function() use ($app) {
 	$app->render('upload.tpl');
});

$app->post('/', function() use ($app) {
	$uploaddir = "uploads/";
	$temp = $_FILES['file']['name'];
	$uploadfile = $uploaddir . $temp;

	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
	$app->redirect('upload', array(
		'fileName' => $temp));
});

$app->run();