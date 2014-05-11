<?php
/*
start
<br/>

include_once("../FizzBuzz.php");
include_once("../obrazek.php");


//fizzBuzz();
obrazek();
*/
require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
});

$app->get('/', function() use ($app) {
    return 'Welcome in Dziunia!'; 
});

$app->run();