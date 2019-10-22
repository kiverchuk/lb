<?php
use Bramus\Router\Router;
$router = new Router();

$router->get('/show_all.php', function (){
    $this->handleRequest("masiv", "index");
});
$router->get('/', function (){
    $this->handleRequest("masiv", "index");
});
$router->get('/add.php', function (){
    $this->handleRequest("masiv", "addMenu");
});
$router->post('/add.php', function (){
    $this->handleRequest("masiv", "add");
});
$router->get('/delete.php', function (){
    $this->handleRequest("masiv", "deleteMenu");
});
$router->get('/show_one.php', function (){
    $this->handleRequest("masiv", "showOne");
});
$router->get('delete.php(\w+)', function (){
    $this->handleRequest("masiv", "delete");
});


$router->run();
