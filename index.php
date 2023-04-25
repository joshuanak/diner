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

// Define the "/order1" -> orderForm1.html
$f3->route('GET /order1', function() {

    //echo '<h1>Order Form 1</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/orderForm1.html');
});

// Define the "/order2" -> orderForm1.html
$f3->route('GET /order2', function() {

    //echo '<h1>Order Form 2</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/orderForm2.html');
});

// Define the summary route
$f3->route('GET /summary', function() {

    //echo '<h1>Order Form 2</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/summary.html');
});

// Run Fat-Free
$f3->run();