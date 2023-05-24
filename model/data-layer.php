<?php

/* diner/model/data-layer.php
    Returns data for the diner app
    This is part of the MODEL
    Eventually, this will read/write the DB
*/

// Get the meals for the order form
function getMeals() {
    $meals = array("breakfast", "lunch", "dinner");
    return $meals;
}

function getCondiments() {
    $condiments = array("ketchup", "mustard", "mayo", "sriracha");
    return $condiments;
}

function getFood() {
    // not sure if needed
}