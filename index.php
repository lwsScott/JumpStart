<?php
/*
 * Lewis Scott
 * 10/17/20
 * filename https://lscott.greenriverdev.com/355/JumpStart/index.php
 * Index page for JumpStart website
 * provides routes to the controller
 */
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once 'vendor/autoload.php';
//require_once 'model/data-layer.php';
//require_once 'model/validation-functions.php';

// start session
session_start();

//Create an instance of the Base class
// instantiates the base class of the fat
// free framework
// :: invokes static method
$f3 = \Base::instance();
$f3->set('DEBUG', 3);

// construct a new Database
// which creates a new PDO connection
$db = new Database();

// construct a new validator
$validator = new Validate();

// create a new controller
$controller = new JumpStartController($f3, $validator);

// Define a default route
$f3->route('GET /', function () {
    //echo '<h1>Initial home page check</h1>';
    //$view = new Template();
    //echo $view->render('views/home.html');
    $GLOBALS['controller']->home();
});

// this is the route to purpose question page
// GET method when coming from home page
// POST method when submitting form
$f3->route('GET|POST /section1', function($f3){
    // if the form has been submitted
    //echo "<h1>section1 page check</h1>";
    $GLOBALS['controller']->section1($f3);
});

// this is the route to section 2 page
// GET method when coming from home page
// POST method when submitting form
$f3->route('GET|POST /section2', function($f3){
    // if the form has been submitted
    //echo "<h1>section1 page check</h1>";
    $GLOBALS['controller']->section2($f3);
});


// this is the route to interests page
// GET method when coming from profile page
// POST method when submitting form
$f3->route('GET|POST /results', function($f3){
    //$view = new Template();
    //echo $view->render('views/results.html');
    $GLOBALS['controller']->results();
});

// this is the route to login page
// POST method when submitting form
$f3->route('GET|POST /login', function($f3){
    $GLOBALS['controller']->login($f3);
});

// this is the route to logout page
// POST method when submitting form
$f3->route('GET|POST /logout', function($f3){
    $GLOBALS['controller']->logout($f3);
});

// this is the route to newUser page
// POST method when submitting form
$f3->route('GET|POST /newUser', function($f3){
    $GLOBALS['controller']->newUser($f3);
});

//Define a route that displays users
$f3->route('GET|POST /viewUsers', function(){

    $GLOBALS['controller']->viewUsers();
});


// Define a summary route
$f3->route('GET /summary', function () {
    $GLOBALS['controller']->summary();

});

//Run fat free
// -> runs class method instance method
$f3->run();

