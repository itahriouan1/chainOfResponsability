<?php
require 'Request.php';
require 'HandlerInterface.php';
require 'AbstractHandler.php';
require 'Serveur1.php';
require 'Serveur2.php';
require 'Serveur3.php';


$handler1= new Serveur1();
$handler2= new Serveur2();
$handler3= new Serveur3();
$handler2->setNext($handler3);
$handler1->setNext($handler2);
$request1=new Request();
$request1->setId(41);
$response=$handler1->handle($request1);
$effHandler=$response->getHandler();
$requestHAndled=$response->isDone();
var_dump($effHandler);
if ($requestHAndled==true){
    echo '<br> is done: YES ';
}
;