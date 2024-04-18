<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);
// 328/diner/index.php
// This is my CONTROLLER

// Turn on error reporting
require_once ('vendor/autoload.php');

// Instantiate base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function(){

    //echo '<h1>Pet Home</h1>';

    //render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define order route
$f3->route('GET|POST /order', function($f3){

    //echo '<h1>Order Page</h1>';

    //render a view page
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

// Run Fat-Free
$f3->run();

?>