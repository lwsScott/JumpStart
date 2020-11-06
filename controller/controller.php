<?php
/*
 * Controller page for JumpStart website
 * provides routes to various views and runs fat free
 * 10/13/20
 * filename https://jumpstart.greenriverdev.com/playbook/JumpStart/controller/controller.php
 * @author Lewis Scott
 * @version 1.0
 */
/**
 * Class JumpStartController
 * routes and validates data
 * interacts with the database object
 * 10/13/20
 * @author Lewis Scott
 * @version 1.0
 */
class JumpStartController
{
    /**
     * @var
     */
    private $_f3; //router
    /**
     * @var
     */
    private $_validator; //validation object

    /**
     * Controller constructor.
     * @param $f3
     */
    public function __construct($f3, $validator)
    {
        $this->_f3 = $f3;
        $this->_validator = $validator;
    }

    /**
     * Display the default route
     */
    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * Check for login
     */
    public function checkLogin()
    {
        //session_start();
        if(!isset($_SESSION['userId']))
        {
            //$_SESSION['page'] = $_SESSION['SCRIPT_URI'];

            //Redirect user to login page
            header("location: login");
        }
    }

    /**
     * Display the section1 route
     */
    public function section1($f3)
    {

        //$GLOBALS['db']->getA1();
        $this->_f3->set('a1', $GLOBALS['db']->getA1());
        $_SESSION['a1'] = "";
        $_SESSION['a2'] = "";
        $_SESSION['a3'] = "";
        $_SESSION['a4'] = "";
        $_SESSION['a5'] = "";
        $_SESSION['a6'] = "";
        $_SESSION['a7'] = "";
        $_SESSION['a8'] = "";
        $_SESSION['a9'] = "";
        $_SESSION['a10'] = "";
        $_SESSION['a11'] = "";
        $_SESSION['a12'] = "";
        $_SESSION['a13'] = "";
        $_SESSION['a14'] = "";
        $_SESSION['a15'] = "";
        $_SESSION['a16'] = "";
        $_SESSION['a17'] = "";
        $_SESSION['a18'] = "";

        //echo "Here";
        //var_dump($_SESSION);

        // validate the data
        // TODO really validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['a1'])) {
                $_SESSION['a1'] = $_POST['a1'];
            } else {
                $_SESSION['a1'] = "";
            }
            if (isset($_POST['a2'])) {
                $_SESSION['a2'] = $_POST['a2'];
            } else {
                $_SESSION['a2'] = "";
            }
            if (isset($_POST['a3'])) {
                $_SESSION['a3'] = $_POST['a3'];
            } else {
                $_SESSION['a3'] = "";
            }
            if (isset($_POST['a4'])) {
                $_SESSION['a4'] = $_POST['a4'];
            } else {
                $_SESSION['a4'] = "";
            }
            if (isset($_POST['a5'])) {
                $_SESSION['a5'] = $_POST['a5'];
            } else {
                $_SESSION['a5'] = "";
            }
            if (isset($_POST['a6'])) {
                $_SESSION['a6'] = $_POST['a6'];
            } else {
                $_SESSION['a6'] = "";
            }
            if (isset($_POST['a7'])) {
                $_SESSION['a7'] = $_POST['a7'];
            } else {
                $_SESSION['a7'] = "";
            }
            if (isset($_POST['a8'])) {
                $_SESSION['a8'] = $_POST['a8'];
            } else {
                $_SESSION['a8'] = "";
            }
            if (isset($_POST['a9'])) {
                $_SESSION['a9'] = $_POST['a9'];
            } else {
                $_SESSION['a9'] = "";
            }
            if (isset($_POST['a10'])) {
                $_SESSION['a10'] = $_POST['a10'];
            } else {
                $_SESSION['a10'] = "";
            }
            if (isset($_POST['a11'])) {
                $_SESSION['a11'] = $_POST['a11'];
            } else {
                $_SESSION['a11'] = "";
            }
            if (isset($_POST['a12'])) {
                $_SESSION['a12'] = $_POST['a12'];
            } else {
                $_SESSION['a12'] = "";
            }
            if (isset($_POST['a13'])) {
                $_SESSION['a13'] = $_POST['a13'];
            } else {
                $_SESSION['a13'] = "";
            }
            if (isset($_POST['a14'])) {
                $_SESSION['a14'] = $_POST['a14'];
            } else {
                $_SESSION['a14'] = "";
            }
            if (isset($_POST['a15'])) {
                $_SESSION['a15'] = $_POST['a15'];
            } else {
                $_SESSION['a15'] = "";
            }
            if (isset($_POST['a16'])) {
                $_SESSION['a16'] = $_POST['a16'];
            } else {
                $_SESSION['a16'] = "";
            }
            if (isset($_POST['a17'])) {
                $_SESSION['a17'] = $_POST['a17'];
            } else {
                $_SESSION['a17'] = "";
            }
            if (isset($_POST['a18'])) {
                $_SESSION['a18'] = $_POST['a18'];
            } else {
                $_SESSION['a18'] = "";
            }

            // if valid is true
            $valid = true;
            if ($valid) {
                //echo '<h1>I made it here with valid data</h1>';
                $a1 = $_SESSION['a1'];
                $a2 = $_SESSION['a2'];
                $a3 = $_SESSION['a3'];
                $a4 = $_SESSION['a4'];
                $a5 = $_SESSION['a5'];
                $a6 = $_SESSION['a6'];
                $a7 = $_SESSION['a7'];
                $a8 = $_SESSION['a8'];
                $a9 = $_SESSION['a9'];
                $a10 = $_SESSION['a10'];
                $a11 = $_SESSION['a11'];
                $a12 = $_SESSION['a12'];
                $a13 = $_SESSION['a13'];
                $a14 = $_SESSION['a14'];
                $a15 = $_SESSION['a15'];
                $a16 = $_SESSION['a16'];
                $a17 = $_SESSION['a17'];
                $a18 = $_SESSION['a18'];
                //$userId = $_SESSION['userId'];
                $userId = $_SESSION['userId'];


                // construct a section1 object
                $section1 = new Section1($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12,
                    $a13, $a14, $a15, $a16, $a17, $a18, $userId);

                $_SESSION['section1'] = $section1;
                //var_dump($section1);

                // add the recipe to the database
                $GLOBALS['db']->addSection1($section1);
                $f3->reroute("results");
            }
        } else {
            $this->checkLogin();
            $view = new Template();
            echo $view->render('views/section1.html');
        }
    }

    /**
     * Display the section2 route
     */
    public function section2($f3)
    {
        //echo "Here with GET";
        $_SESSION['b1'] = "";
        $_SESSION['b2'] = "";
        $_SESSION['b3'] = "";
        $_SESSION['b4'] = "";
        $_SESSION['b5'] = "";
        $_SESSION['b6'] = "";
        $_SESSION['b7'] = "";
        $_SESSION['b8'] = "";
        $_SESSION['b9'] = "";
        $_SESSION['b10'] = "";
        $_SESSION['b11'] = "";
        $_SESSION['b12'] = "";
        $_SESSION['b13'] = "";
        $_SESSION['b14'] = "";
        $_SESSION['b15'] = "";
        $_SESSION['b16'] = "";
        $_SESSION['b17'] = "";
        $_SESSION['b17yn'] = "";
        $_SESSION['b18'] = "";
        $_SESSION['b18yn'] = "";
        $_SESSION['b19'] = "";
        $_SESSION['b19yn'] = "";
        $_SESSION['b20'] = "";
        $_SESSION['b20yn'] = "";
        $_SESSION['b21'] = "";
        $_SESSION['b21yn'] = "";
        $_SESSION['b22'] = "";
        $_SESSION['b22yn'] = "";
        $_SESSION['b23'] = "";
        $_SESSION['b23yn'] = "";
        $_SESSION['b24'] = "";
        $_SESSION['b24yn'] = "";
        $_SESSION['b25'] = "";
        $_SESSION['b25yn'] = "";
        $_SESSION['b26'] = "";
        $_SESSION['b26yn'] = "";
        $_SESSION['b27'] = "";
        $_SESSION['b27yn'] = "";
        $_SESSION['b28'] = "";
        $_SESSION['b28yn'] = "";
        $_SESSION['b29'] = "";

        //echo "Here";
        //var_dump($_SESSION);

        // validate the data
        // TODO really validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['b1'])) {
                $_SESSION['b1'] = $_POST['b1'];
            } else {
                $_SESSION['b1'] = "";
            }
            if (isset($_POST['b2'])) {
                $_SESSION['b2'] = $_POST['b2'];
            }
            if (isset($_POST['b3'])) {
                $_SESSION['b3'] = $_POST['b3'];
            }
            if (isset($_POST['b4'])) {
                $_SESSION['b4'] = $_POST['b4'];
            }
            if (isset($_POST['b5'])) {
                $_SESSION['b5'] = $_POST['b5'];
            }
            if (isset($_POST['b6'])) {
                $_SESSION['b6'] = $_POST['b6'];
            }
            if (isset($_POST['b7'])) {
                $_SESSION['b7'] = $_POST['b7'];
            }
            if (isset($_POST['b8'])) {
                $_SESSION['b8'] = $_POST['b8'];
            }
            if (isset($_POST['b9'])) {
                $_SESSION['b9'] = $_POST['b9'];
            }
            if (isset($_POST['b10'])) {
                $_SESSION['b10'] = $_POST['b10'];
            }
            if (isset($_POST['b11'])) {
                $_SESSION['b11'] = $_POST['b11'];
            }
            if (isset($_POST['b12'])) {
                $_SESSION['b12'] = $_POST['b12'];
            }
            if (isset($_POST['b13'])) {
                $_SESSION['b13'] = $_POST['b13'];
            }
            if (isset($_POST['b14'])) {
                $_SESSION['b14'] = $_POST['b14'];
            }
            if (isset($_POST['b15'])) {
                $_SESSION['b15'] = $_POST['b15'];
            }
            if (isset($_POST['b16'])) {
                $_SESSION['b16'] = $_POST['b16'];
            }
            if (isset($_POST['b17'])) {
                $_SESSION['b17'] = $_POST['b17'];
            }
            if (isset($_POST['b17yn'])) {
                $_SESSION['b17yn'] = $_POST['b17yn'];
            }
            if (isset($_POST['b18'])) {
                $_SESSION['b18'] = $_POST['b18'];
            }
            if (isset($_POST['b18yn'])) {
                $_SESSION['b18yn'] = $_POST['b18yn'];
            }
            if (isset($_POST['b19'])) {
                $_SESSION['b19'] = $_POST['b19'];
            }
            if (isset($_POST['b19yn'])) {
                $_SESSION['b19yn'] = $_POST['b19yn'];
            }
            if (isset($_POST['b20'])) {
                $_SESSION['b20'] = $_POST['b20'];
            }
            if (isset($_POST['b20yn'])) {
                $_SESSION['b20yn'] = $_POST['b20yn'];
            }
            if (isset($_POST['b21'])) {
                $_SESSION['b21'] = $_POST['b21'];
            }
            if (isset($_POST['b21yn'])) {
                $_SESSION['b21yn'] = $_POST['b21yn'];
            }
            if (isset($_POST['b22'])) {
                $_SESSION['b22'] = $_POST['b22'];
            }
            if (isset($_POST['b22yn'])) {
                $_SESSION['b22yn'] = $_POST['b22yn'];
            }
            if (isset($_POST['b23'])) {
                $_SESSION['b23'] = $_POST['b23'];
            }
            if (isset($_POST['b23yn'])) {
                $_SESSION['b23yn'] = $_POST['b23yn'];
            }
            if (isset($_POST['b24'])) {
                $_SESSION['b24'] = $_POST['b24'];
            }
            if (isset($_POST['b24yn'])) {
                $_SESSION['b24yn'] = $_POST['b24yn'];
            }
            if (isset($_POST['b25'])) {
                $_SESSION['b25'] = $_POST['b25'];
            }
            if (isset($_POST['b25yn'])) {
                $_SESSION['b25yn'] = $_POST['b25yn'];
            }
            if (isset($_POST['b26'])) {
                $_SESSION['b26'] = $_POST['b26'];
            }
            if (isset($_POST['b26yn'])) {
                $_SESSION['b26yn'] = $_POST['b26yn'];
            }
            if (isset($_POST['b27'])) {
                $_SESSION['b27'] = $_POST['b27'];
            }
            if (isset($_POST['b27yn'])) {
                $_SESSION['b27yn'] = $_POST['b27yn'];
            }
            if (isset($_POST['b28'])) {
                $_SESSION['b28'] = $_POST['b28'];
            }
            if (isset($_POST['b28yn'])) {
                $_SESSION['b28yn'] = $_POST['b28yn'];
            }
            if (isset($_POST['b29'])) {
                $_SESSION['b29'] = $_POST['b29'];
            }

            //var_dump($_SESSION);


            // if valid is true
            $valid = true;
            if ($valid) {
                //echo '<h1>I made it here with valid data</h1>';
                $b1 = $_SESSION['b1'];
                $b2 = $_SESSION['b2'];
                $b3 = $_SESSION['b3'];
                $b4 = $_SESSION['b4'];
                $b5 = $_SESSION['b5'];
                $b6 = $_SESSION['b6'];
                $b7 = $_SESSION['b7'];
                $b8 = $_SESSION['b8'];
                $b9 = $_SESSION['b9'];
                $b10 = $_SESSION['b10'];
                $b11 = $_SESSION['b11'];
                $b12 = $_SESSION['b12'];
                $b13 = $_SESSION['b13'];
                $b14 = $_SESSION['b14'];
                $b15 = $_SESSION['b15'];
                $b16 = $_SESSION['b16'];
                $b17 = $_SESSION['b17'];
                $b17yn = $_SESSION['b17yn'];
                $b18 = $_SESSION['b18'];
                $b18yn = $_SESSION['b18yn'];
                $b19 = $_SESSION['b19'];
                $b19yn = $_SESSION['b19yn'];
                $b20 = $_SESSION['b20'];
                $b20yn = $_SESSION['b20yn'];
                $b21 = $_SESSION['b21'];
                $b21yn = $_SESSION['b21yn'];
                $b22 = $_SESSION['b22'];
                $b22yn = $_SESSION['b22yn'];
                $b23 = $_SESSION['b23'];
                $b23yn = $_SESSION['b23yn'];
                $b24 = $_SESSION['b24'];
                $b24yn = $_SESSION['b24yn'];
                $b25 = $_SESSION['b25'];
                $b25yn = $_SESSION['b25yn'];
                $b26 = $_SESSION['b26'];
                $b26yn = $_SESSION['b26yn'];
                $b27 = $_SESSION['b27'];
                $b27yn = $_SESSION['b27yn'];
                $b28 = $_SESSION['b28'];
                $b28yn = $_SESSION['b28yn'];
                $b29 = $_SESSION['b29'];
                $userId = $_SESSION['userId'];


                // construct a section1 object
                $section2 = new Section2($b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9, $b10, $b11, $b12,
                    $b13, $b14, $b15, $b16, $b17, $b17yn, $b18, $b18yn, $b19, $b19yn, $b20, $b20yn,
                    $b21, $b21yn, $b22, $b22yn, $b23, $b23yn, $b24, $b24yn, $b25, $b25yn, $b26, $b26yn,
                    $b27, $b27yn, $b28, $b28yn, $b29, $userId);
                //var_dump($_SESSION['b1']);
                //echo $b1;
                $_SESSION['section2'] = $section2;
                var_dump($section2);
                //var_dump($_SESSION);

                // add the section to the database
                $GLOBALS['db']->addSection2($section2);
                $f3->reroute("results");


                //$f3->reroute("results");
            }
        } else {
            $this->checkLogin();
            $view = new Template();
            echo $view->render('views/section2.html');
        }
    }

    /**
     * Display the section1 route
     */
    public function section3($f3)
    {
        //echo "here in section3";
        $_SESSION['c1'] = "";
        $_SESSION['c2'] = "";
        $_SESSION['c3'] = "";
        $_SESSION['c4'] = "";
        $_SESSION['c5'] = "";
        $_SESSION['c6'] = "";
        $_SESSION['c7'] = "";
        $_SESSION['c8'] = "";
        $_SESSION['c9'] = "";
        $_SESSION['c10a'] = "";
        $_SESSION['c10b'] = "";
        $_SESSION['c10c'] = "";
        $_SESSION['c10d'] = "";

        // validate the data
        // TODO really validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['c1'])) {
                $_SESSION['c1'] = $_POST['c1'];
            }
            if (isset($_POST['c2'])) {
                $_SESSION['c2'] = $_POST['c2'];
            }
            if (isset($_POST['c3'])) {
                $_SESSION['c3'] = $_POST['c3'];
            }
            if (isset($_POST['c4'])) {
                $_SESSION['c4'] = $_POST['c4'];
            }
            if (isset($_POST['c5'])) {
                $_SESSION['c5'] = $_POST['c5'];
            }
            if (isset($_POST['c6'])) {
                $_SESSION['c6'] = $_POST['c6'];
            }
            if (isset($_POST['c7'])) {
                $_SESSION['c7'] = $_POST['c7'];
            }
            if (isset($_POST['c8'])) {
                $_SESSION['c8'] = $_POST['c8'];
            }
            if (isset($_POST['c9'])) {
                $_SESSION['c9'] = $_POST['c9'];
            }
            if (isset($_POST['c10a'])) {
                $_SESSION['c10a'] = $_POST['c10a'];
            }
            if (isset($_POST['c10b'])) {
                $_SESSION['c10b'] = $_POST['c10b'];
            }
            if (isset($_POST['c10c'])) {
                $_SESSION['c10c'] = $_POST['c1c'];
            }
            if (isset($_POST['c10d'])) {
                $_SESSION['c10d'] = $_POST['c10d'];
            }
            // if valid is true
            $valid = true;
            if ($valid) {
                //echo '<h1>I made it here with valid data</h1>';
                $c1 = $_SESSION['c1'];
                $c2 = $_SESSION['c2'];
                $c3 = $_SESSION['c3'];
                $c4 = $_SESSION['c4'];
                $c5 = $_SESSION['c5'];
                $c6 = $_SESSION['c6'];
                $c7 = $_SESSION['c7'];
                $c8 = $_SESSION['c8'];
                $c9 = $_SESSION['c9'];
                $c10a = $_SESSION['c10a'];
                $c10b = $_SESSION['c10b'];
                $c10c = $_SESSION['c10c'];
                $c10d = $_SESSION['c10d'];

                //$userId = $_SESSION['userId'];
                $userId = $_SESSION['userId'];


                // construct a section1 object
                $section3 = new Section3($c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10a,
                    $c10b, $c10c, $c10d, $userId);

                $_SESSION['section3'] = $section3;
                //var_dump($section1);

                // add the section to the database
                $GLOBALS['db']->addSection3($section3);
                $f3->reroute("results");
            }
        } else {
            $this->checkLogin();
            $view = new Template();
            echo $view->render('views/section3.html');
        }
    }

    /**
     * Display the section4 route
     */
    /*
    public function section4($f3)
    {
        //echo "here in section3";
        $_SESSION['d1'] = "";
        $_SESSION['d1a'] = "";
        $_SESSION['d2'] = "";
        $_SESSION['d2a'] = "";
        $_SESSION['d3'] = "";
        $_SESSION['d3a'] = "";
        $_SESSION['d4'] = "";
        $_SESSION['d4a'] = "";
        $_SESSION['d5'] = "";
        $_SESSION['d6'] = "";
        $_SESSION['d7'] = "";
        $_SESSION['d8'] = "";
        $_SESSION['d9'] = "";
        $_SESSION['d10'] = "";
        $_SESSION['d11'] = "";
        $_SESSION['d12'] = "";
        $_SESSION['d13'] = "";
        $_SESSION['d14'] = "";
        $_SESSION['d15'] = "";
        $_SESSION['d16'] = "";
        $_SESSION['d17'] = "";
        $_SESSION['d18'] = "";
        $_SESSION['d19'] = "";
        $_SESSION['d20'] = "";
        $_SESSION['d21'] = "";
        $_SESSION['d22'] = "";
        $_SESSION['d23'] = "";
        $_SESSION['d24'] = "";
        $_SESSION['d24'] = "";
        $_SESSION['d25'] = "";
        $_SESSION['d26'] = "";
        $_SESSION['d27a'] = "";
        $_SESSION['d27b'] = "";
        $_SESSION['d27c'] = "";
        $_SESSION['d27d'] = "";


        // validate the data
        // TODO really validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['d1'])) {
                $_SESSION['d1'] = $_POST['d1'];
            }
            if (isset($_POST['d1a'])) {
                $_SESSION['d1a'] = $_POST['d1a'];
            }
            if (isset($_POST['d2'])) {
                $_SESSION['d2'] = $_POST['d2'];
            }
            if (isset($_POST['d2a'])) {
                $_SESSION['d2a'] = $_POST['d2a'];
            }
            if (isset($_POST['d3'])) {
                $_SESSION['d3'] = $_POST['d3'];
            }
            if (isset($_POST['d3a'])) {
                $_SESSION['d3a'] = $_POST['d3a'];
            }
            if (isset($_POST['d4'])) {
                $_SESSION['d4'] = $_POST['d4'];
            }
            if (isset($_POST['d4a'])) {
                $_SESSION['d4a'] = $_POST['d4a'];
            }
            if (isset($_POST['d5'])) {
                $_SESSION['d5'] = $_POST['d5'];
            }
            if (isset($_POST['d6'])) {
                $_SESSION['d6'] = $_POST['d6'];
            }
            if (isset($_POST['d7'])) {
                $_SESSION['d7'] = $_POST['d7'];
            }
            if (isset($_POST['d8'])) {
                $_SESSION['d8'] = $_POST['d8'];
            }
            if (isset($_POST['d9'])) {
                $_SESSION['d9'] = $_POST['d9'];
            }
            if (isset($_POST['d10'])) {
                $_SESSION['d10'] = $_POST['d10'];
            }
            if (isset($_POST['d11'])) {
                $_SESSION['d11'] = $_POST['d11'];
            }
            if (isset($_POST['d12'])) {
                $_SESSION['d12'] = $_POST['d12'];
            }
            if (isset($_POST['d13'])) {
                $_SESSION['d13'] = $_POST['d13'];
            }
            if (isset($_POST['d10'])) {
                $_SESSION['d10'] = $_POST['d10'];
            }
            if (isset($_POST['d11'])) {
                $_SESSION['d11'] = $_POST['d11'];
            }
            if (isset($_POST['d12'])) {
                $_SESSION['d12'] = $_POST['d12'];
            }
            if (isset($_POST['d13'])) {
                $_SESSION['d13'] = $_POST['d13'];
            }
            if (isset($_POST['d14'])) {
                $_SESSION['d14'] = $_POST['d14'];
            }
            if (isset($_POST['d15'])) {
                $_SESSION['d15'] = $_POST['d15'];
            }
            if (isset($_POST['d16'])) {
                $_SESSION['d16'] = $_POST['d16'];
            }
            if (isset($_POST['d17'])) {
                $_SESSION['d17'] = $_POST['d17'];
            }
            if (isset($_POST['d18'])) {
                $_SESSION['d18'] = $_POST['d18'];
            }
            if (isset($_POST['d19'])) {
                $_SESSION['d11'] = $_POST['d11'];
            }
            if (isset($_POST['d19'])) {
                $_SESSION['d19'] = $_POST['d19'];
            }
            if (isset($_POST['d20'])) {
                $_SESSION['d20'] = $_POST['d20'];
            }
            if (isset($_POST['d21'])) {
                $_SESSION['d20'] = $_POST['d20'];
            }
            if (isset($_POST['d20'])) {
                $_SESSION['d20'] = $_POST['d20'];
            }
            if (isset($_POST['d20'])) {
                $_SESSION['d20'] = $_POST['d20'];
            }
            if (isset($_POST['d20'])) {
                $_SESSION['d20'] = $_POST['d20'];
            }
            if (isset($_POST['d20'])) {
                $_SESSION['d20'] = $_POST['d20'];
            }
            if (isset($_POST['d20'])) {
                $_SESSION['d20'] = $_POST['d20'];
            }
            if (isset($_POST['d20'])) {
                $_SESSION['d20'] = $_POST['d20'];
            }
            // if valid is true
            $valid = true;
            if ($valid) {
                //echo '<h1>I made it here with valid data</h1>';
                $c1 = $_SESSION['c1'];
                $c2 = $_SESSION['c2'];
                $c3 = $_SESSION['c3'];
                $c4 = $_SESSION['c4'];
                $c5 = $_SESSION['c5'];
                $c6 = $_SESSION['c6'];
                $c7 = $_SESSION['c7'];
                $c8 = $_SESSION['c8'];
                $c9 = $_SESSION['c9'];
                $c10a = $_SESSION['c10a'];
                $c10b = $_SESSION['c10b'];
                $c10c = $_SESSION['c10c'];
                $c10d = $_SESSION['c10d'];

                //$userId = $_SESSION['userId'];
                $userId = $_SESSION['userId'];


                // construct a section1 object
                $section3 = new Section3($c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10a,
                    $c10b, $c10c, $c10d, $userId);

                $_SESSION['section3'] = $section3;
                //var_dump($section1);

                // add the section to the database
                $GLOBALS['db']->addSection3($section3);
                $f3->reroute("results");
            }
        } else {
            $this->checkLogin();
            $view = new Template();
            echo $view->render('views/section3.html');
        }
    }
*/
    /**
     * Display the results route
     */
    public function results()
    {
        $view = new Template();
        echo $view->render('views/results.html');
    }
    /**
     * Process the view Recipes route
     */
    /*Example for development
    // TODO fix
    public function viewRecipes()
    {
        // get the recipes
        $result = $GLOBALS['db']->getRecipes();

        //var_dump($result);
        // store the recipes in the hive as 'results'
        $this->_f3->set('results', $result);

        // display the recipes page
        $view = new Template();
        echo $view->render('views/recipes.php');
    }
    */


    /**
     *  Provides a login form and validates
     */
    public function login($f3)
    {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // initialize variables
                $username = "";
                $err = false;
                //echo "made it to the post method on login<br>";

                // if the form has been submitted
                if (!empty($_POST)) {
                    // Get the username and password
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $_SESSION['username'] = $username;

                    // get the userId of the user from the database
                    // and set the session variable
                    $userId = $GLOBALS['db']->getUserId($username, $password);

                    // get the userId from the database
                    //$user = 'myuser';
                    //$pass = 'password';
                    if (!empty($userId) && $userId > 0) {
                        // store userId in the session array
                        $_SESSION['userId'] = $userId;

                        // redirect user to either the page they came from or index.php
                        //$page = isset($_SESSION['page']) ? $_SESSION['page'] : "index.php";
                        //var_dump($page);
                        //header("location: " . $page);
                        $view = new Template();
                        echo $view->render('views/home.html');
                    } else {
                        // set error flag to true
                        $_SESSION['err'] = true;
                        $err = true;
                        // display login
                        $view = new Template();
                        echo $view->render
                        ('views/login.php');
                    }
                }
            } else {
            // display login
            $view = new Template();
            echo $view->render
            ('views/login.php');
        }
    }

    /**
     *  Logout function
     */
    public function logout()
    {
        // logout
        $view = new Template();
        echo $view->render
        ('views/logout.php');
    }

    /**
     * view users
     */
    public function viewUsers()
    {
        $users = $GLOBALS['db']->getUser();
        $this->_f3->set('users', $users);
        $template = new Template();
        echo $template->render('views/viewUser.php');
    }

    /**
     * insert a new User
     */
    public function newUser()
    {
        $valid = true;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            /*
            echo $_SESSION['nameAvail'];
            if (($_SESSION['nameAvail'] != 'available')) {
                $valid = false;
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["username"]', "Username not available");
                //echo "username false";
            }
            */
            if (!$this->_validator->validName($_POST['password'])) {
                $valid = false;
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["password"]', "Required");
                //echo "password false";
            }

            if ($_POST['password'] != $_POST['confirm']) {
                $valid = false;
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["confirm"]', "Passwords don't match");
                //echo "confirm password false";
            }
            //echo "I made it here";
            //var_dump($valid);

            $this->_f3->set('username', $_POST['username']);
            $this->_f3->set('password', $_POST['password']);
            $this->_f3->set('confirm', $_POST['confirm']);

            if ($valid) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // create the user object
                $newUser = new User($username, $password);

                // add into it
                $GLOBALS['db']->writeUser($newUser);

                $userId = $GLOBALS['db']->getUserId($username, $password);
                // populate new database tables
                // section1
                // construct a section1 object
                $section1 = new Section1("", "", "","", "","","","","",
                    "","","","","","","","","", $userId);

                $section2 = new Section2("", "", "","", "","","","","",
                    "","","","","","","","","", "", "",
                    "", "", "", "", "", "", "", "", "", "",
                    "", "", "", "", "", "", "", "", "", "",
                    "", $userId);

                $section3 = new Section3("", "", "","", "","","","","",
                    "","","","", $userId);


                $_SESSION['section1'] = $section1;
                $_SESSION['section2'] = $section2;
                $_SESSION['section3'] = $section3;

                //var_dump($section1);

                // add the recipe to the database
                $GLOBALS['db']->addSection1($section1);
                $GLOBALS['db']->addSection2($section2);
                $GLOBALS['db']->addSection3($section3);

                $this->_f3->reroute('home');

            }
        }
        $view = new Template();
        echo $view->render
        ('views/newUser.html');
    }

    /*
     *  display individual user
     */
    /**
     *
     */
    public function userDetail()
    {
        //echo $this->_f3->get('userId');

        $result = $GLOBALS['db']->getUserDetails($this->_f3->get('userId'));

        //var_dump($result);
        $this->_f3->set('results', $result);

        $view = new Template();
        echo $view->render('views/user.html');
    }
}