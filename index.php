<?php
require "/vendor/autoload.php";

use \Slim\Slim as Slim;

$app = new Slim();
 

$app->config(array(
   'templates.path' => 'templates/'
));

$app->render('header.tpl');

$app->get('/', function() use ($app) {
 	$app->render('main.tpl');
});

$app->post('/', function() use ($app) {
	$uploaddir = "uploads/";
	$temp = $_FILES['file']['name'];

	$uploadfile = $uploaddir . $temp;

	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

	$app->flash('message','Файл загружен!');
	$app->render('upload.tpl');
});

$app->render('footer.tpl');

$app->run();