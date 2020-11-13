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
    public function checkLogin($f3)
    {
        //var_dump($_SESSION);
        //session_start();
        if(!isset($_SESSION['userId']))
        {
            $_SESSION["page"] = $_SERVER["SCRIPT_URI"];

            $f3->reroute("login");
        }
    }

    /**
     * Display the section1 route
     */
    public function section1($f3)
    {
        // initialize the session variables
        // allows for incomplete submittal

        // validate the data
        // TODO really validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // get the section1 variable names and set hive variables
            $section1 = getSection1();
            foreach ($section1 as $k=>$v)
            {
                //var_dump($_POST[$v]);
                if (isset($_POST[$v])) {
                    $this->_f3->set($v, $_POST[$v]);
                } else {
                    $this->_f3->set($v, "");
                }
            }

            $userId = $_SESSION['userId'];

            // construct a section1 object
            $section1 = new Section1($f3->get('a1'),$f3->get('a2'), $f3->get('a3'), $f3->get('a4'), $f3->get('a5'),
                $f3->get('a6'), $f3->get('a7'), $f3->get('a8'), $f3->get('a9'), $f3->get('a10'), $f3->get('a11'),
                $f3->get('a12'), $f3->get('a13'), $f3->get('a14'), $f3->get('a15'), $f3->get('a16'), $f3->get('a17'),
                $f3->get('a18'), $userId);

            //$_SESSION['section1'] = $section1;
            $this->_f3->set('section1', $section1);
            //var_dump($section1);

            // add the section to the database
            $GLOBALS['db']->addSection1($section1, 'update');
            $f3->reroute("results");
            //echo "before submit";
            //$view = new Template();
            //echo $view->render('views/results.html');
        } else {
            // login
            $this->checkLogin($f3);

            // populate section with user info
            // initialize the user variables
            $resultsSec1 = $GLOBALS['db']->getSection($_SESSION['userId'], "section1");
            foreach ($resultsSec1 as $k=>$v)
            {
                if ($k != 'answerID')
                {
                    $this->_f3->set($k, $v);
                    //echo " k " . $k . " v " . $v;
                }
            }

            $view = new Template();
            echo $view->render('views/section1.html');
        }
    }

    /**
     * Display the section2 route
     */
    public function section2($f3)
    {
        // initialize the session variables
        // allows for incomplete submittal
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

        // validate the data
        // TODO really validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['b1'])) {
                $_SESSION['b1'] = $_POST['b1'];
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

            // if valid is true
            $valid = true;
            if ($valid) {
                //echo '<h1>I made it here with valid data</h1>';
                $b1 = $_SESSION['b1'];  $this->_f3->set('b1', $b1);
                $b2 = $_SESSION['b2'];  $this->_f3->set('b2', $b2);
                $b3 = $_SESSION['b3'];  $this->_f3->set('b3', $b3);
                $b4 = $_SESSION['b4'];  $this->_f3->set('b4', $b4);
                $b5 = $_SESSION['b5'];  $this->_f3->set('b5', $b5);
                $b6 = $_SESSION['b6'];  $this->_f3->set('b6', $b6);
                $b7 = $_SESSION['b7'];  $this->_f3->set('b7', $b7);
                $b8 = $_SESSION['b8'];  $this->_f3->set('b8', $b8);
                $b9 = $_SESSION['b9'];  $this->_f3->set('b9', $b9);
                $b10 = $_SESSION['b10'];  $this->_f3->set('b10', $b10);
                $b11 = $_SESSION['b11'];  $this->_f3->set('b11', $b11);
                $b12 = $_SESSION['b12'];  $this->_f3->set('b12', $b12);
                $b13 = $_SESSION['b13'];  $this->_f3->set('b13', $b13);
                $b14 = $_SESSION['b14'];  $this->_f3->set('b14', $b14);
                $b15 = $_SESSION['b15'];  $this->_f3->set('b15', $b15);
                $b16 = $_SESSION['b16'];  $this->_f3->set('b16', $b16);
                $b17 = $_SESSION['b17'];  $this->_f3->set('b17', $b17);
                $b17yn = $_SESSION['b17yn'];  $this->_f3->set('b17yn', $b17yn);
                $b18 = $_SESSION['b18'];  $this->_f3->set('b18', $b18);
                $b18yn = $_SESSION['b18yn'];  $this->_f3->set('b18yn', $b18yn);
                $b19 = $_SESSION['b19'];  $this->_f3->set('b19', $b19);
                $b19yn = $_SESSION['b19yn'];  $this->_f3->set('b19yn', $b19yn);
                $b20 = $_SESSION['b20'];  $this->_f3->set('b20', $b20);
                $b20yn = $_SESSION['b20yn'];  $this->_f3->set('b20yn', $b20yn);
                $b21 = $_SESSION['b21'];  $this->_f3->set('b21', $b21);
                $b21yn = $_SESSION['b21yn'];  $this->_f3->set('b21yn', $b21yn);
                $b22 = $_SESSION['b22'];  $this->_f3->set('b22', $b22);
                $b22yn = $_SESSION['b22yn'];  $this->_f3->set('b22yn', $b22yn);
                $b23 = $_SESSION['b23'];  $this->_f3->set('b23', $b23);
                $b23yn = $_SESSION['b23yn'];  $this->_f3->set('b23yn', $b23yn);
                $b24 = $_SESSION['b24'];  $this->_f3->set('b24', $b24);
                $b24yn = $_SESSION['b24yn'];  $this->_f3->set('b24yn', $b24yn);
                $b25 = $_SESSION['b25'];  $this->_f3->set('b25', $b25);
                $b25yn = $_SESSION['b25yn'];  $this->_f3->set('b25yn', $b25yn);
                $b26 = $_SESSION['b26'];  $this->_f3->set('b26', $b26);
                $b26yn = $_SESSION['b26yn'];  $this->_f3->set('b26yn', $b26yn);
                $b27 = $_SESSION['b27'];  $this->_f3->set('b27', $b27);
                $b27yn = $_SESSION['b27yn'];  $this->_f3->set('b27yn', $b27yn);
                $b28 = $_SESSION['b28'];  $this->_f3->set('b28', $b28);
                $b28yn = $_SESSION['b28yn'];  $this->_f3->set('b28yn', $b28yn);
                $b29 = $_SESSION['b29'];  $this->_f3->set('b29', $b29);
                $userId = $_SESSION['userId'];  $this->_f3->set('userId', $userId);


                // construct a section1 object
                $section2 = new Section2($b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9, $b10, $b11, $b12,
                    $b13, $b14, $b15, $b16, $b17, $b17yn, $b18, $b18yn, $b19, $b19yn, $b20, $b20yn,
                    $b21, $b21yn, $b22, $b22yn, $b23, $b23yn, $b24, $b24yn, $b25, $b25yn, $b26, $b26yn,
                    $b27, $b27yn, $b28, $b28yn, $b29, $userId);
                //var_dump($_SESSION['b1']);
                //echo $b1;
                $_SESSION['section2'] = $section2;
                //var_dump($_SESSION);

                // add the section to the database
                $GLOBALS['db']->addSection2($section2, 'update');
                $f3->reroute("results");
            }
        } else {
            // check login
            $this->checkLogin($f3);

            // populate section with user info
            $results = $GLOBALS['db']->getSection($_SESSION['userId'], "section2");
            $this->_f3->set('b1', $results['b1']);
            $this->_f3->set('b2', $results['b2']);
            $this->_f3->set('b3', $results['b3']);
            $this->_f3->set('b4', $results['b4']);
            $this->_f3->set('b5', $results['b5']);
            $this->_f3->set('b6', $results['b6']);
            $this->_f3->set('b7', $results['b7']);
            $this->_f3->set('b8', $results['b8']);
            $this->_f3->set('b9', $results['b9']);
            $this->_f3->set('b10', $results['b10']);
            $this->_f3->set('b11', $results['b11']);
            $this->_f3->set('b12', $results['b12']);
            $this->_f3->set('b13', $results['b13']);
            $this->_f3->set('b14', $results['b14']);
            $this->_f3->set('b15', $results['b15']);
            $this->_f3->set('b16', $results['b16']);

            $this->_f3->set('b17', $results['b17']);
            $this->_f3->set('b17yn', $results['b17yn']);

            $this->_f3->set('b18', $results['b18']);
            $this->_f3->set('b18yn', $results['b18yn']);

            $this->_f3->set('b19', $results['b19']);
            $this->_f3->set('b19yn', $results['b19yn']);

            $this->_f3->set('b20', $results['b20']);
            $this->_f3->set('b20yn', $results['b20yn']);

            $this->_f3->set('b21', $results['b21']);
            $this->_f3->set('b21yn', $results['b21yn']);

            $this->_f3->set('b22', $results['b22']);
            $this->_f3->set('b22yn', $results['b22yn']);

            $this->_f3->set('b23', $results['b23']);
            $this->_f3->set('b23yn', $results['b23yn']);

            $this->_f3->set('b24', $results['b24']);
            $this->_f3->set('b24yn', $results['b24yn']);

            $this->_f3->set('b25', $results['b25']);
            $this->_f3->set('b25yn', $results['b25yn']);

            $this->_f3->set('b26', $results['b26']);
            $this->_f3->set('b26yn', $results['b26yn']);

            $this->_f3->set('b27', $results['b27']);
            $this->_f3->set('b27yn', $results['b27yn']);

            $this->_f3->set('b28', $results['b28']);
            $this->_f3->set('b28yn', $results['b28yn']);

            $this->_f3->set('b29', $results['b29']);
            $view = new Template();
            echo $view->render('views/section2.html');
        }
    }

    /**
     * Display the section1 route
     */
    public function section3($f3)
    {
        // initialize the session variables
        // allows for incomplete submittal
        $_SESSION['c1'] = "";
        $_SESSION['c1t'] = "";

        $_SESSION['c2'] = "";
        $_SESSION['c2t'] = "";

        $_SESSION['c3'] = "";
        $_SESSION['c3t'] = "";

        $_SESSION['c4'] = "";
        $_SESSION['c4t'] = "";

        $_SESSION['c5'] = "";

        $_SESSION['c6'] = "";
        $_SESSION['c6t'] = "";

        $_SESSION['c7'] = "";
        $_SESSION['c7t'] = "";

        $_SESSION['c8'] = "";
        $_SESSION['c8t'] = "";

        $_SESSION['c9'] = "";
        $_SESSION['c9t'] = "";

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
            if (isset($_POST['c1t'])) {
                $_SESSION['c1t'] = $_POST['c1t'];
            }
            if (isset($_POST['c2'])) {
                $_SESSION['c2'] = $_POST['c2'];
            }
            if (isset($_POST['c2t'])) {
                $_SESSION['c2t'] = $_POST['c2t'];
            }
            if (isset($_POST['c3'])) {
                $_SESSION['c3'] = $_POST['c3'];
            }
            if (isset($_POST['c3t'])) {
                $_SESSION['c3t'] = $_POST['c3t'];
            }
            if (isset($_POST['c4'])) {
                $_SESSION['c4'] = $_POST['c4'];
            }
            if (isset($_POST['c4t'])) {
                $_SESSION['c4t'] = $_POST['c4t'];
            }
            if (isset($_POST['c5'])) {
                $_SESSION['c5'] = $_POST['c5'];
            }
            if (isset($_POST['c6'])) {
                $_SESSION['c6'] = $_POST['c6'];
            }
            if (isset($_POST['c6t'])) {
                $_SESSION['c6t'] = $_POST['c6t'];
            }
            if (isset($_POST['c7'])) {
                $_SESSION['c7'] = $_POST['c7'];
            }
            if (isset($_POST['c7t'])) {
                $_SESSION['c7t'] = $_POST['c7t'];
            }
            if (isset($_POST['c8'])) {
                $_SESSION['c8'] = $_POST['c8'];
            }
            if (isset($_POST['c8t'])) {
                $_SESSION['c8t'] = $_POST['c8t'];
            }
            if (isset($_POST['c9'])) {
                $_SESSION['c9'] = $_POST['c9'];
            }
            if (isset($_POST['c9t'])) {
                $_SESSION['c9t'] = $_POST['c9t'];
            }
            if (isset($_POST['c10a'])) {
                $_SESSION['c10a'] = $_POST['c10a'];
            }
            if (isset($_POST['c10b'])) {
                $_SESSION['c10b'] = $_POST['c10b'];
            }
            if (isset($_POST['c10c'])) {
                $_SESSION['c10c'] = $_POST['c10c'];
            }
            if (isset($_POST['c10d'])) {
                $_SESSION['c10d'] = $_POST['c10d'];
            }
            // if valid is true
            $valid = true;
            if ($valid) {
                //echo '<h1>I made it here with valid data</h1>';
                $c1 = $_SESSION['c1'];  $this->_f3->set('c1', $c1);
                $c1t = $_SESSION['c1t'];  $this->_f3->set('c1t', $c1t);

                $c2 = $_SESSION['c2'];  $this->_f3->set('c2', $c2);
                $c2t = $_SESSION['c2t'];  $this->_f3->set('c2t', $c2t);

                $c3 = $_SESSION['c3'];  $this->_f3->set('c3', $c3);
                $c3t = $_SESSION['c3t'];  $this->_f3->set('c3t', $c3t);

                $c4 = $_SESSION['c4'];  $this->_f3->set('c4', $c4);
                $c4t = $_SESSION['c4t'];  $this->_f3->set('c4t', $c4t);

                $c5 = $_SESSION['c5'];  $this->_f3->set('c5', $c5);
                $c6 = $_SESSION['c6'];  $this->_f3->set('c6', $c6);
                $c6t = $_SESSION['c6t'];  $this->_f3->set('c6t', $c6t);

                $c7 = $_SESSION['c7'];  $this->_f3->set('c7', $c7);
                $c7t = $_SESSION['c7t'];  $this->_f3->set('c7t', $c7t);

                $c8 = $_SESSION['c8'];  $this->_f3->set('c8', $c8);
                $c8t = $_SESSION['c8t'];  $this->_f3->set('c8t', $c8t);

                $c9 = $_SESSION['c9'];  $this->_f3->set('c9', $c9);
                $c9t = $_SESSION['c9t'];  $this->_f3->set('c9t', $c9t);

                $c10a = $_SESSION['c10a'];  $this->_f3->set('c10a', $c10a);
                $c10b = $_SESSION['c10b'];  $this->_f3->set('c10b', $c10b);
                $c10c = $_SESSION['c10c'];  $this->_f3->set('c10c', $c10c);
                $c10d = $_SESSION['c10d'];  $this->_f3->set('c10d', $c10d);

                $userId = $_SESSION['userId'];

                // construct a section1 object
                $section3 = new Section3($c1, $c1t, $c2, $c2t, $c3, $c3t, $c4, $c4t, $c5, $c6, $c6t, $c7, $c7t, $c8,
                    $c8t, $c9, $c9t, $c10a, $c10b, $c10c, $c10d, $userId);

                $_SESSION['section3'] = $section3;
                //var_dump($section1);

                // add the section to the database
                $GLOBALS['db']->addSection3($section3, 'update');
                $f3->reroute("results");
            }
        } else {
            // check login
            $this->checkLogin($f3);

            // populate section with user info
            $results = $GLOBALS['db']->getSection($_SESSION['userId'], "section3");
            $this->_f3->set('c1', $results['c1']);
            $this->_f3->set('c1t', $results['c1t']);

            $this->_f3->set('c2', $results['c2']);
            $this->_f3->set('c2t', $results['c2t']);

            $this->_f3->set('c3', $results['c3']);
            $this->_f3->set('c3t', $results['c3t']);

            $this->_f3->set('c4', $results['c4']);
            $this->_f3->set('c4t', $results['c4t']);

            $this->_f3->set('c5', $results['c5']);
            $this->_f3->set('c6', $results['c6']);
            $this->_f3->set('c6t', $results['c6t']);

            $this->_f3->set('c7', $results['c7']);
            $this->_f3->set('c7t', $results['c7t']);

            $this->_f3->set('c8', $results['c8']);
            $this->_f3->set('c8t', $results['c8t']);

            $this->_f3->set('c9', $results['c9']);
            $this->_f3->set('c9t', $results['c9t']);

            $this->_f3->set('c10a', $results['c10a']);
            $this->_f3->set('c10b', $results['c10b']);
            $this->_f3->set('c10c', $results['c10c']);
            $this->_f3->set('c10d', $results['c10d']);

            $view = new Template();
            echo $view->render('views/section3.html');
        }
    }

    /**
     * Display the section4 route
     */
    public function section4($f3)
    {
        // initialize the session variables
        // allows for incomplete submittal
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
                $_SESSION['d21'] = $_POST['d21'];
            }
            if (isset($_POST['d22'])) {
                $_SESSION['d22'] = $_POST['d22'];
            }
            if (isset($_POST['d23'])) {
                $_SESSION['d23'] = $_POST['d23'];
            }
            if (isset($_POST['d24'])) {
                $_SESSION['d24'] = $_POST['d24'];
            }
            if (isset($_POST['d25'])) {
                $_SESSION['d25'] = $_POST['d25'];
            }
            if (isset($_POST['d26'])) {
                $_SESSION['d26'] = $_POST['d26'];
            }
            if (isset($_POST['d27a'])) {
                $_SESSION['d27a'] = $_POST['d27a'];
            }
            if (isset($_POST['d27b'])) {
                $_SESSION['d27b'] = $_POST['d27b'];
            }
            if (isset($_POST['d27c'])) {
                $_SESSION['d27c'] = $_POST['d27c'];
            }
            if (isset($_POST['d27d'])) {
                $_SESSION['d27d'] = $_POST['d27d'];
            }
            // if valid is true
            $valid = true;
            if ($valid) {
                //echo '<h1>I made it here with valid data</h1>';
                $d1 = $_SESSION['d1'];
                $d1a = $_SESSION['d1a'];
                $d2 = $_SESSION['d2'];
                $d2a = $_SESSION['d2a'];
                $d3 = $_SESSION['d3'];
                $d3a = $_SESSION['d3a'];
                $d4 = $_SESSION['d4'];
                $d4a = $_SESSION['d4a'];
                $d5 = $_SESSION['d5'];
                $d6 = $_SESSION['d6'];
                $d7 = $_SESSION['d7'];
                $d8 = $_SESSION['d8'];
                $d9 = $_SESSION['d9'];
                $d10 = $_SESSION['d10'];
                $d11 = $_SESSION['d11'];
                $d12 = $_SESSION['d12'];
                $d13 = $_SESSION['d13'];
                $d14 = $_SESSION['d14'];
                $d15 = $_SESSION['d15'];
                $d16 = $_SESSION['d16'];
                $d17 = $_SESSION['d17'];
                $d18 = $_SESSION['d18'];
                $d19 = $_SESSION['d19'];
                $d20 = $_SESSION['d20'];
                $d21 = $_SESSION['d21'];
                $d22 = $_SESSION['d22'];
                $d23 = $_SESSION['d23'];
                $d24 = $_SESSION['d24'];
                $d25 = $_SESSION['d25'];
                $d26 = $_SESSION['d26'];
                $d27a = $_SESSION['d27a'];
                $d27b = $_SESSION['d27b'];
                $d27c = $_SESSION['d27c'];
                $d27d = $_SESSION['d27d'];


                $userId = $_SESSION['userId'];


                // construct a section1 object
                $section4 = new Section4($d1, $d1a, $d2, $d2a, $d3, $d3a, $d4, $d4a, $d5, $d6, $d7, $d8, $d9, $d10,
                    $d11, $d12, $d13, $d14, $d15, $d16, $d17, $d18, $d19, $d20, $d21, $d22, $d23, $d24, $d25, $d26, $d27a,
                    $d27b, $d27c, $d27d, $userId);

                $_SESSION['section4'] = $section4;
                //var_dump($section1);

                // add the section to the database
                $GLOBALS['db']->addSection4($section4, 'update');
                $f3->reroute("results");
            }
        } else {
            // check login
            $this->checkLogin($f3);

            // populate section with user info
            $resultsSec4 = $GLOBALS['db']->getSection($_SESSION['userId'], "section4");
            foreach ($resultsSec4 as $k=>$v) {
                if ($k != 'answerID') {
                    $this->_f3->set($k, $v);
                }
            }
             /*
            $this->_f3->set('d1', $results['d1']);
            $this->_f3->set('d1a', $results['d1a']);

            $this->_f3->set('d2', $results['d2']);
            $this->_f3->set('d2a', $results['d2a']);

            $this->_f3->set('d3', $results['d3']);
            $this->_f3->set('d3a', $results['d3a']);

            $this->_f3->set('d4', $results['d4']);
            $this->_f3->set('d4a', $results['d4a']);

            $this->_f3->set('d5', $results['d5']);
            $this->_f3->set('d6', $results['d6']);
            $this->_f3->set('d7', $results['d7']);
            $this->_f3->set('d8', $results['d8']);
            $this->_f3->set('d9', $results['d9']);
            $this->_f3->set('d10', $results['d10']);
            $this->_f3->set('d11', $results['d11']);
            $this->_f3->set('d12', $results['d12']);
            $this->_f3->set('d13', $results['d13']);
            $this->_f3->set('d14', $results['d14']);
            $this->_f3->set('d15', $results['d15']);
            $this->_f3->set('d16', $results['d16']);
            $this->_f3->set('d17', $results['d17']);
            $this->_f3->set('d18', $results['d18']);
            $this->_f3->set('d19', $results['d19']);
            $this->_f3->set('d20', $results['d20']);
            $this->_f3->set('d21', $results['d21']);
            $this->_f3->set('d22', $results['d22']);
            $this->_f3->set('d23', $results['d23']);
            $this->_f3->set('d24', $results['d24']);
            $this->_f3->set('d25', $results['d25']);
            $this->_f3->set('d26', $results['d26']);

            $this->_f3->set('d27a', $results['d27a']);
            $this->_f3->set('d27b', $results['d27b']);
            $this->_f3->set('d27c', $results['d27c']);
            $this->_f3->set('d27d', $results['d27d']);
             */
            $view = new Template();
            echo $view->render('views/section4.html');
        }
    }

    /**
     * Display the section1 route
     */
    public function section5($f3)
    {
        // initialize the session variables
        // allows for incomplete submittal

        // validate the data
        // TODO really validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // get the section1 variable names and set hive variables
            $section5 = getSection5();
            foreach ($section5 as $k=>$v)
            {
                //var_dump($_POST[$v]);
                if (isset($_POST[$v])) {
                    $this->_f3->set($v, $_POST[$v]);
                } else {
                    $this->_f3->set($v, "");
                }
            }

            $userId = $_SESSION['userId'];

            // construct a section1 object
            $section5 = new Section5($f3->get('e1'), $f3->get('e2'), $f3->get('e3'), $f3->get('e4'), $f3->get('e5'),
                $f3->get('e6'), $f3->get('e7'), $f3->get('e8'), $f3->get('e9'), $f3->get('e10'),  $f3->get('e10t'),
                $f3->get('e11'), $f3->get('e12'), $f3->get('e13'), $f3->get('e14'), $f3->get('e15'), $f3->get('e16'),
                $f3->get('e17'), $f3->get('e18'), $f3->get('e19'), $f3->get('e20'), $f3->get('e21'), $f3->get('e22'),
                $f3->get('e23'), $f3->get('e24'), $f3->get('e25'), $f3->get('e26'), $f3->get('e27'), $f3->get('e28'),
                $f3->get('e29'), $f3->get('e30'), $f3->get('e31'), $f3->get('e32'), $f3->get('e33'), $f3->get('e34'),
                $f3->get('e35'), $f3->get('e36'), $f3->get('e37'), $f3->get('e38'), $f3->get('e39'), $f3->get('e40'),
                $f3->get('e41'), $f3->get('e42'), $f3->get('e43'), $f3->get('e44'), $f3->get('e45'), $f3->get('e46'),
                $f3->get('e47'), $f3->get('e48'), $f3->get('e49'), $f3->get('e50'), $f3->get('e51'), $f3->get('e52a'),
                $f3->get('e52b'), $f3->get('e52c'), $f3->get('e52d'), $userId);


            $this->_f3->set('section5', $section5);

            // add the section to the database
            $GLOBALS['db']->addSection5($section5, 'update');
            $f3->reroute("results");
            //echo "before submit";
            //$view = new Template();
            //echo $view->render('views/results.html');
        } else {
            // login
            $this->checkLogin($f3);

            // populate section with user info
            // initialize the user variables
            $resultsSec5 = $GLOBALS['db']->getSection($_SESSION['userId'], "section5");
            foreach ($resultsSec5 as $k=>$v)
            {
                if ($k != 'answerID')
                {
                    $this->_f3->set($k, $v);
                    //echo " k " . $k . " v " . $v;
                }
            }

            $view = new Template();
            echo $view->render('views/section5.html');
        }
    }

    /**
     * Display the section1 route
     */
    public function section6($f3)
    {
        // initialize the session variables
        // allows for incomplete submittal

        // validate the data
        // TODO really validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // get the section1 variable names and set hive variables
            $section6 = getSection6();
            foreach ($section6 as $k=>$v)
            {
                //var_dump($_POST[$v]);
                if (isset($_POST[$v])) {
                    $this->_f3->set($v, $_POST[$v]);
                } else {
                    $this->_f3->set($v, "");
                }
            }

            $userId = $_SESSION['userId'];

            // construct a section1 object
            $section6 = new Section6($f3->get('f1'), $f3->get('f2'), $f3->get('f3'), $f3->get('f3t'), $f3->get('f4'), $f3->get('f5'),
                $f3->get('f6'), $f3->get('f7'), $f3->get('f8'), $f3->get('f9'), $f3->get('f10'),  $f3->get('f10t'),
                $f3->get('f11'), $f3->get('f12'), $f3->get('f13'), $f3->get('f14'), $f3->get('f15'), $f3->get('f16'),
                $f3->get('f17'), $f3->get('f18'), $f3->get('f19'), $f3->get('f20'), $f3->get('f21'), $f3->get('f22'),
                $f3->get('f23'), $f3->get('f24'), $f3->get('f25'), $f3->get('f26'), $f3->get('f27'), $f3->get('f28'),
                $f3->get('f29'), $f3->get('f30'), $f3->get('f31'), $f3->get('f32'), $f3->get('f33'), $f3->get('f34'),
                $f3->get('f35'), $f3->get('f36'), $f3->get('f37'), $f3->get('f38'), $f3->get('f39'), $f3->get('f40'),
                $f3->get('f41'), $f3->get('f42'), $f3->get('f43'), $f3->get('f44'), $f3->get('f45'), $f3->get('f46'),
                $f3->get('f47a'), $f3->get('f47b'), $f3->get('f47c'), $f3->get('f47d'), $userId);


            $this->_f3->set('section6', $section6);

            // add the section to the database
            $GLOBALS['db']->addSection6($section6, 'update');
            $f3->reroute("results");
            //echo "before submit";
            //$view = new Template();
            //echo $view->render('views/results.html');
        } else {
            // login
            $this->checkLogin($f3);

            // populate section with user info
            // initialize the user variables
            $resultsSec6 = $GLOBALS['db']->getSection($_SESSION['userId'], "section6");
            foreach ($resultsSec6 as $k=>$v)
            {
                if ($k != 'answerID')
                {
                    $this->_f3->set($k, $v);
                    //echo " k " . $k . " v " . $v;
                }
            }

            $view = new Template();
            echo $view->render('views/section6.html');
        }
    }
    /**
     * Display the results route
     */
    public function results($f3)
    {
        $this->checkLogin($f3);

        // initialize the user variables
        $resultsSec1 = $GLOBALS['db']->getSection($_SESSION['userId'], "section1");
        foreach ($resultsSec1 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
                //echo " k " . $k . " v " . $v;
            }
        }

        $resultsSec2 = $GLOBALS['db']->getSection($_SESSION['userId'], "section2");
        foreach ($resultsSec2 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
                //echo " k " . $k . " v " . $v;

            }
        }

        $resultsSec3 = $GLOBALS['db']->getSection($_SESSION['userId'], "section3");
        foreach ($resultsSec3 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
                //echo " k " . $k . " v " . $v;
            }
        }

        $resultsSec4 = $GLOBALS['db']->getSection($_SESSION['userId'], "section4");
        foreach ($resultsSec4 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
            }
        }

        $resultsSec5 = $GLOBALS['db']->getSection($_SESSION['userId'], "section5");
        foreach ($resultsSec5 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
            }
        }

        $resultsSec6 = $GLOBALS['db']->getSection($_SESSION['userId'], "section6");
        foreach ($resultsSec6 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
            }
        }
        $view = new Template();
        echo $view->render('views/results.html');
    }

    /**
     *  Provides a login form and validates
     */
    public function login($f3)
    {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // initialize variables
                $username = "";
                $err = false;

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
                    if (!empty($userId) && $userId > 0) {
                        // store userId in the session array
                        $_SESSION['userId'] = $userId;
                        $_SESSION['err'] = false;
                        $err = false;
                            //var_dump($f3);
                        // redirect user to either the page they came from or index.php
                        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "home";
                        header("location: " . $page);

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
            $_SESSION['err'] = false;
            $view = new Template();
            echo $view->render
            ('views/login.php');
        }
    }

    /**
     *  Logout function
     */
    public function logout($f3)
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
                $_SESSION['userId'] = $userId;

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
                    "","","","", "", "", "", "", "", "", "",
                    "", $userId);

                $section4 = new Section4("", "", "", "", "", "", "", "", "",
                    "", "", "", "", "", "", "", "", "", "", "",
                    "", "", "", "", "", "", "", "", "", "", "",
                    "", "", "", $userId);

                $section5 = new Section5("", "", "", "", "", "", "", "", "",
                    "", "", "", "", "", "", "", "", "", "", "",
                    "", "", "", "", "", "", "", "", "", "", "",
                    "", "", "", "", "", "",  "", "", "", "", "",
                    "", "", "", "", "", "", "", "", "", "", "",
                    "", "", "", $userId);

                $section6 = new Section6("", "", "", "", "", "", "", "", "",
                    "", "", "", "", "", "", "", "", "", "", "",
                    "", "", "", "", "", "", "", "", "", "", "",
                    "", "", "", "", "", "",  "", "", "", "", "",
                    "", "", "", "", "", "", "","", "", $userId);

                $_SESSION['section1'] = $section1;
                $_SESSION['section2'] = $section2;
                $_SESSION['section3'] = $section3;
                $_SESSION['section4'] = $section4;
                $_SESSION['section5'] = $section5;
                $_SESSION['section6'] = $section6;

                //var_dump($section1);

                // add the section to the database
                $GLOBALS['db']->addSection1($section1, 'add');
                $GLOBALS['db']->addSection2($section2, 'add');
                $GLOBALS['db']->addSection3($section3, 'add');
                $GLOBALS['db']->addSection4($section4, 'add');


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