<?php
//session_start();

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

    // Check if the form has been posted
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        // Get the data
        $pet = $_POST['pet'];
        $color = $_POST['color'];

        // Validate the data
        if(!empty('pet') && ($color != 'No'))
        {
            // Data is invalid
            echo "Please supply a pet type";

            // Data is valid
            $f3->set('SESSION.pet', $pet);

            $f3->set('SESSION.color', $color);

            $f3->reroute('summary');
        }
    }

    //render a view page
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

$f3->route('GET|POST /summary', function($f3){

    $view = new Template();
    echo $view->render('views/order-summary.html');
});

// Run Fat-Free
$f3->run();

?>