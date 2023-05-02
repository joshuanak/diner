<?php

/*
 * Joshua Nakatani
 * 4/13/2023
 * 328/diner/index.php
 * Controller for diner project
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an F3 object
$f3 = Base::instance();
// Base $f3 = new Base();

// Define a default route
$f3->route('GET /', function() {

    //echo '<h1>Welcome to My Diner!</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define the breakfast route
$f3->route('GET /breakfast', function() {

    //echo '<h1>Breakfast Menu</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/menus/breakfast.html');
});

// Define the lunch route
$f3->route('GET /lunch', function() {

    //echo '<h1>Lunch Menu</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/menus/lunch.html');
});

// Define the dinner route
$f3->route('GET /dinner', function() {

    //echo '<h1>Dinner Menu</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/menus/dinner.html');
});


// Define the happy hour route
$f3->route('GET /happy-hour', function() {

    //echo '<h1>Happy Hour</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/menus/happyHour.html');
});

// Define the "/order1" -> orderForm1.html
$f3->route('GET|POST /order1', function($f3) {

    // if the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // Get the data
        // ["food"]=> string(7) "waffles" ["meal"]=> string(9) "breakfast"
        var_dump($_POST);
        $food = $_POST['food'];
        $meal = $_POST['meal'];
        //echo ("Food: $food, Meal: $meal");

        // Validate the data

        // Store the data in the session array
        $f3->set('SESSION.food', $food);
        $f3->set('SESSION.meal', $meal);
        // $_SESSION['food'] = $food;

        // Redirect to order2 route
        $f3->reroute('order2');
    }

    // Display a view page
    $view = new Template();
    echo $view->render('views/orderForm1.html');
});

// Define the "/order1" -> orderForm1.html
$f3->route('GET|POST /order2', function($f3) {

    // if the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // get the data
        //var_dump($_POST);
        // ["conds"]=> array(1) { [0]=> string(7) "ketchup"
        $conds = implode(", ", $_POST['conds']);
        //echo $conds;

        // store the data in the session array
        $f3->set('SESSION.condiments', $conds);

        // redirect to the summary route
        $f3->reroute('summary');
    }
    // Display a view page
    $view = new Template();
    echo $view->render('views/orderForm2.html');
});

// Define the summary route
$f3->route('GET /summary', function() {

    //echo '<h1>Summary</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/summary.html');

    session_destroy();
});

// Run Fat-Free
$f3->run();