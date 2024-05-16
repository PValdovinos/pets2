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
        $type = $_POST['type'];

        // Validate the data
        if(!empty($pet) && ($color != 'No') && isset($type))
        {
            if($type === "robotic")
            {
                //construct new roboticpet object and add to session
                $f3->set("SESSION.pet", new RoboticPet($pet, $color));
                //route to roboticpet page
                //add reroute to summar on roboticpet
                $f3->reroute('roboticpet');
            }else{
                //construct new stuffedpet object and add to session
                $f3->set("SESSION.pet", new stuffedPet($pet, $color));
                //route to stuffedpet page
                //add reroute to summar on stuffedpet
                $f3->reroute('stuffedpet');
            }
        }
    }

    //render a view page
    $view = new Template();
    echo $view->render('views/pet-order.html');
});
//robotic pet page
$f3->route('GET|POST /roboticpet', function($f3){

    //add reroute to summary
    //$f3->reroute('summary');
    $view = new Template();
    echo $view->render('views/roboticpet.html');
});

//stuffed pet page
$f3->route('GET|POST /stuffedpet', function($f3){

    //add reroute to summary
    //$f3->reroute('summary');
    $view = new Template();
    echo $view->render('views/stuffedpet.html');
});

//route to summary
$f3->route('GET|POST /summary', function($f3){

    $view = new Template();
    echo $view->render('views/order-summary.html');
});

// Run Fat-Free
$f3->run();

