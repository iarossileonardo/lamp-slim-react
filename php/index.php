<?php
use Slim\Factory\AppFactory;


require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/HelloController.php';
require __DIR__ . '/controllers/AlunniController.php';

$app = AppFactory::create();

$app->get('/hello', "HelloController:hello"); //chiama la funzione del controller

$app->get('/hello/{name}', 'HelloController:hello_with_name');

$app->get('/json/{name}', 'HelloController:json_name');

$app->get('/alunni', 'AlunniController:index');

$app->get('/alunni/{id}', 'AlunniController:alunniWithId');

$app->post('/alunni', 'AlunniController:create');

$app->put('/alunni/{id}', 'AlunniController:update');

$app->delete('alunni/{id}', 'AlunniController:destroy')

$app->run();