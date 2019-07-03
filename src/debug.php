<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 4/13/18
 * Time: 5:00 PM
 */

include 'database.php';

session_start();

h1("Session");
var_dump($_SESSION);

hr();
h1("Test");

$cart = addToCartDB(1,9);
var_dump($cart);

// ---------------------------------------------------------------------------------------------------------------------
function hr() {
    echo "<hr>";
}

function h1($str) {
    echo "<h1>".$str."</h1>";
}

function li($str) {
    echo "<li>".$str."</li>";
}

function var_dump_str($str) {
    ob_start();
    var_dump($str);
    return ob_get_clean();
}
