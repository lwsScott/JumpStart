<?php
/*
 * Lewis Scott
 * 4/17/20
 * filename https://lscott.greenriverdev.com/328/dating/index.php
 * Index page for dating website
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
//$db = new Database();

// construct a new validator
//$validator = new Validate();

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

    //check if the form has been posted
    /*
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //echo "in Post";
        //validate the data
        if(empty($_POST['a1'])){
            echo "please answer question 1";
        }
        else if(empty($_POST['a2'])){
            echo "please answer question 2";
        }
        else if(empty($_POST['a3'])){
            echo "please answer question 3";
        }
        else {
    */
            //data is valid
            $_SESSION['a1'] = $_POST['a1'];
            $_SESSION['a11'] = $_POST['a11'];
            $_SESSION['a12'] = $_POST['a12'];
            $_SESSION['a13'] = $_POST['a13'];
            $_SESSION['a14'] = $_POST['a14'];
            $_SESSION['a141'] = $_POST['a141'];
            $_SESSION['a2'] = $_POST['a2'];
            $_SESSION['a21'] = $_POST['a21'];
            $_SESSION['a22'] = $_POST['a22'];
            $_SESSION['a23'] = $_POST['a23'];
            $_SESSION['a24'] = $_POST['a24'];
            $_SESSION['a241'] = $_POST['a241'];
            $_SESSION['a3'] = $_POST['a3'];
            $_SESSION['a31'] = $_POST['a31'];
            $_SESSION['a32'] = $_POST['a32'];
            $_SESSION['a33'] = $_POST['a33'];
            $_SESSION['a34'] = $_POST['a34'];
            $_SESSION['a341'] = $_POST['a341'];

            //redirect to the analysis route
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $f3->reroute("results");
            }
        //}}

    //$view = new Template();
    //echo $view->render('views/section1.html');
    $GLOBALS['controller']->section1();
});

// this is the route to interests page
// GET method when coming from profile page
// POST method when submitting form
$f3->route('GET|POST /results', function($f3){
    //$view = new Template();
    //echo $view->render('views/results.html');
    $GLOBALS['controller']->results();
});

// this is the route to upload image page
// POST method when submitting form
$f3->route('GET|POST /image', function(){
    $GLOBALS['controller']->image();
});

// Define a summary route
$f3->route('GET /summary', function () {
    $GLOBALS['controller']->summary();

});

//Run fat free
// -> runs class method instance method
$f3->run();

