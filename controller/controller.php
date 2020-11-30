<?php
/*
 * Controller page for tumpStart website
 * provides routes to various views and runs fat free
 * 10/13/20
 * filename https://tumpstart.greenriverdev.com/playbook/tumpStart/controller/controller.php
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
            $f3->reroute("section2");
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // get the section2 variable names and set hive variables
            $section2 = getSection2();
            foreach ($section2 as $k=>$v)
            {
                //var_dump($_POST[$v]);
                if (isset($_POST[$v])) {
                    $this->_f3->set($v, $_POST[$v]);
                } else {
                    $this->_f3->set($v, "");
                }
            }

            $userId = $_SESSION['userId'];

            // construct a section2 object
            $section2 = new Section2($f3->get('b1'), $f3->get('b2'), $f3->get('b3'), $f3->get('b4'), $f3->get('b5'),
                $f3->get('b6'), $f3->get('b7'), $f3->get('b8'), $f3->get('b9'), $f3->get('b10'), $f3->get('b11'), $f3->get('b12'),
                $f3->get('b13'), $f3->get('b14'), $f3->get('b15'), $f3->get('b16'), $f3->get('b17'), $f3->get('b17yn'),
                $f3->get('b18'), $f3->get('b18yn'), $f3->get('b19'), $f3->get('b19yn'), $f3->get('b20'), $f3->get('b20yn'),
                $f3->get('b21'), $f3->get('b21yn'), $f3->get('b22'), $f3->get('b22yn'), $f3->get('b23'), $f3->get('b23yn'),
                $f3->get('b24'), $f3->get('b24yn'), $f3->get('b25'), $f3->get('b25yn'), $f3->get('b26'), $f3->get('b26yn'),
                $f3->get('b27'), $f3->get('b27yn'), $f3->get('b28'), $f3->get('b28yn'), $f3->get('b29'), $userId);

            $_SESSION['section2'] = $section2;
            //var_dump($_SESSION);

            // add the section to the database
            $GLOBALS['db']->addSection2($section2, 'update');
            $f3->reroute("section3");
        } else {
            // check login
            $this->checkLogin($f3);

            // populate section with user info
            $resultsSec2 = $GLOBALS['db']->getSection($_SESSION['userId'], "section2");
            foreach ($resultsSec2 as $k=>$v)
            {
                if ($k != 'answerID')
                {
                    $this->_f3->set($k, $v);
                    //echo " k " . $k . " v " . $v;
                }
            }

            $view = new Template();
            echo $view->render('views/section2.html');
        }
    }

    /**
     * Display the section3 route
     */
    public function section3($f3)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // initialize the data
            $section3 = getSection3();
            foreach ($section3 as $k=>$v)
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
            $section3 = new Section3($f3->get('c1'), $f3->get('c1t'), $f3->get('c2'), $f3->get('c2t'), $f3->get('c3'), $f3->get('c3t'),
                $f3->get('c4'), $f3->get('c4t'), $f3->get('c5'), $f3->get('c6'), $f3->get('c6t'), $f3->get('c7'), $f3->get('c7t'),
                $f3->get('c8'), $f3->get('c8t'), $f3->get('c9'), $f3->get('c9t'), $f3->get('c10a'), $f3->get('c10b'), $f3->get('c10c'),
                $f3->get('c10d'), $userId);

                $_SESSION['section3'] = $section3;
                //var_dump($section1);

                // add the section to the database
                $GLOBALS['db']->addSection3($section3, 'update');
                $f3->reroute("section4");
        } else {
            // check login
            $this->checkLogin($f3);

            // populate section with user info
            $resultsSec3 = $GLOBALS['db']->getSection($_SESSION['userId'], "section3");
            foreach ($resultsSec3 as $k=>$v) {
                if ($k != 'answerID') {
                    $this->_f3->set($k, $v);
                }
            }

            $view = new Template();
            echo $view->render('views/section3.html');
        }
    }

    /**
     * Display the section4 route
     */
    public function section4($f3)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // initialize the data
        $section4 = getSection4();
        foreach ($section4 as $k=>$v)
        {
            //var_dump($_POST[$v]);
            if (isset($_POST[$v])) {
                $this->_f3->set($v, $_POST[$v]);
            } else {
                $this->_f3->set($v, "");
            }
        }

        $userId = $_SESSION['userId'];
        // construct a section5 object
        $section4 = new Section4($f3->get('d1'), $f3->get('d2'), $f3->get('d3'), $f3->get('d4'), $f3->get('d5'),
            $f3->get('d5t'), $f3->get('d6'), $f3->get('d6t'),$f3->get('d7'), $f3->get('d8'), $f3->get('d9'), $f3->get('d10'),
            $f3->get('d11'), $f3->get('d12'), $f3->get('d13'), $f3->get('d14'), $f3->get('d15'), $f3->get('d16'),
            $f3->get('d17'), $f3->get('d18'), $f3->get('d19'), $f3->get('d20'), $f3->get('d21'), $f3->get('d22'),
            $f3->get('d23'), $f3->get('d24'), $f3->get('d25'), $f3->get('d26'), $f3->get('d27'), $f3->get('d28'),
            $f3->get('d29a'), $f3->get('d29b'),$f3->get('d29c'), $f3->get('d29d'),$userId);

                $_SESSION['section4'] = $section4;

                // add the section to the database
                $GLOBALS['db']->addSection4($section4, 'update');
                $f3->reroute("section5");
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

            $view = new Template();
            echo $view->render('views/section4.html');
        }
    }

    /**
     * Display the section5 route
     */
    public function section5($f3)
    {
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

            // construct a section5 object
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
            $f3->reroute("section6");
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
                $f3->get('f6'), $f3->get('f7'), $f3->get('f8'), $f3->get('f9'), $f3->get('f10'),  $f3->get('f11'), $f3->get('f12'),
                $f3->get('f13'), $f3->get('f14'), $f3->get('f15'), $f3->get('f16'), $f3->get('f17'), $f3->get('f18'), $f3->get('f19'),
                $f3->get('f20'), $f3->get('f21'), $f3->get('f22'), $f3->get('f23'), $f3->get('f24'), $f3->get('f25'), $f3->get('f26'),
                $f3->get('f27'), $f3->get('f28'), $f3->get('f29'), $f3->get('f30'), $f3->get('f31'), $f3->get('f32'), $f3->get('f33'),
                $f3->get('f34'), $f3->get('f35'), $f3->get('f36'), $f3->get('f37'), $f3->get('f38'), $f3->get('f39'), $f3->get('f40'),
                $f3->get('f41'), $f3->get('f42'), $f3->get('f43'), $f3->get('f44'), $f3->get('f45'), $f3->get('f46'),
                $f3->get('f47a'), $f3->get('f47b'), $f3->get('f47c'), $f3->get('f47d'), $userId);

            $this->_f3->set('section6', $section6);

            // add the section to the database
            $GLOBALS['db']->addSection6($section6, 'update');
            $f3->reroute("section7");
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
     * Display the section7 route
     */
    public function section7($f3)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // get the section1 variable names and set hive variables
            $section7 = getSection7();
            foreach ($section7 as $k=>$v)
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
            $section7 = new Section7($f3->get('g1'),$f3->get('g2'), $f3->get('g3'), $f3->get('g4'), $f3->get('g5'),
                $f3->get('g6'), $f3->get('g7'), $f3->get('g8'), $f3->get('g9'), $f3->get('g10'), $f3->get('g11'),
                $f3->get('g12'),  $f3->get('g13'),$userId);

            $this->_f3->set('section7', $section7);
            //var_dump($section1);

            // add the section to the database
            $GLOBALS['db']->addSection7($section7, 'update');
            $f3->reroute("section8");
            //echo "before submit";
            //$view = new Template();
            //echo $view->render('views/results.html');
        } else {
            // login
            $this->checkLogin($f3);

            // populate section with user info
            // initialize the user variables
            $resultsSec7 = $GLOBALS['db']->getSection($_SESSION['userId'], "section7");
            foreach ($resultsSec7 as $k=>$v)
            {
                if ($k != 'answerID')
                {
                    $this->_f3->set($k, $v);
                    //echo " k " . $k . " v " . $v;
                }
            }

            $view = new Template();
            echo $view->render('views/section7.html');
        }
    }

    /**
     * Display the section8 route
     */
    public function section8($f3)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // get the section1 variable names and set hive variables
            $section8 = getSection8();
            foreach ($section8 as $k=>$v)
            {
                //var_dump($_POST[$v]);
                if (isset($_POST[$v])) {
                    $this->_f3->set($v, $_POST[$v]);
                } else {
                    $this->_f3->set($v, "");
                }
            }

            $userId = $_SESSION['userId'];

            // construct a section8 object
            $section8 = new Section8($f3->get('h1'),$f3->get('h2'), $f3->get('h3'), $f3->get('h4'), $f3->get('h5'),
                $f3->get('h6'), $f3->get('h7'), $f3->get('h8'), $f3->get('h9'), $f3->get('h10'), $f3->get('h11'),
                $f3->get('h12'), $userId);

            $this->_f3->set('section8', $section8);
            //var_dump($section1);

            // add the section to the database
            $GLOBALS['db']->addSection8($section8, 'update');
            $f3->reroute("section9");
            //echo "before submit";
            //$view = new Template();
            //echo $view->render('views/results.html');
        } else {
            // login
            $this->checkLogin($f3);

            // populate section with user info
            // initialize the user variables
            $resultsSec8 = $GLOBALS['db']->getSection($_SESSION['userId'], "section8");
            foreach ($resultsSec8 as $k=>$v)
            {
                if ($k != 'answerID')
                {
                    $this->_f3->set($k, $v);
                    //echo " k " . $k . " v " . $v;
                }
            }

            $view = new Template();
            echo $view->render('views/section8.html');
        }
    }

    /**
     * Display the section9 route
     */
    public function section9($f3)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // get the section1 variable names and set hive variables
            $section9 = getSection9();
            foreach ($section9 as $k=>$v)
            {
                if (isset($_POST[$v])) {
                    $this->_f3->set($v, $_POST[$v]);
                } else {
                    $this->_f3->set($v, "");
                }
            }

            $userId = $_SESSION['userId'];

            // construct a section9 object
            $section9 = new Section9($f3->get('i1'), $f3->get('i2'), $userId);

            $this->_f3->set('section9', $section9);
            //var_dump($section1);

            // add the section to the database
            $GLOBALS['db']->addSection9($section9, 'update');
            $f3->reroute("section10");
            //echo "before submit";
            //$view = new Template();
            //echo $view->render('views/results.html');
        } else {
            // login
            $this->checkLogin($f3);

            // populate section with user info
            // initialize the user variables
            $resultsSec9 = $GLOBALS['db']->getSection($_SESSION['userId'], "section9");
            foreach ($resultsSec9 as $k=>$v)
            {
                if ($k != 'answerID')
                {
                    $this->_f3->set($k, $v);
                    //echo " k " . $k . " v " . $v;
                }
            }

            $view = new Template();
            echo $view->render('views/section9.html');
        }
    }

    /**
     * Display the section10 route
     */
    public function section10($f3)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // get the section1 variable names and set hive variables
            $section10 = getsection10();
            foreach ($section10 as $k=>$v)
            {
                //var_dump($_POST[$v]);
                if (isset($_POST[$v])) {
                    $this->_f3->set($v, $_POST[$v]);
                } else {
                    $this->_f3->set($v, "");
                }
            }

            $userId = $_SESSION['userId'];

            // construct a section10 object
            $section10 = new Section10($f3->get('j1'),$f3->get('j2'), $f3->get('j3'), $f3->get('j4'), $userId);

            $this->_f3->set('section10', $section10);
            //var_dump($section1);

            // add the section to the database
            $GLOBALS['db']->addsection10($section10, 'update');
            $f3->reroute("results");
            //$view = new Template();
            //echo $view->render('views/results.html');
        } else {
            // login
            $this->checkLogin($f3);

            // populate section with user info
            // initialize the user variables
            $resultsSec9 = $GLOBALS['db']->getSection($_SESSION['userId'], "section10");
            foreach ($resultsSec9 as $k=>$v)
            {
                if ($k != 'answerID')
                {
                    $this->_f3->set($k, $v);
                    //echo " k " . $k . " v " . $v;
                }
            }

            $view = new Template();
            echo $view->render('views/section10.html');
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

        $resultsSec7 = $GLOBALS['db']->getSection($_SESSION['userId'], "section7");
        foreach ($resultsSec7 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
            }
        }

        $resultsSec8 = $GLOBALS['db']->getSection($_SESSION['userId'], "section8");
        foreach ($resultsSec8 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
            }
        }

        $resultsSec9 = $GLOBALS['db']->getSection($_SESSION['userId'], "section9");
        foreach ($resultsSec9 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
            }
        }

        $resultsSec10 = $GLOBALS['db']->getSection($_SESSION['userId'], "section10");
        foreach ($resultsSec10 as $k=>$v)
        {
            if ($k != 'answerID')
            {
                $this->_f3->set($k, $v);
            }
        }
        /*
          $themes = $GLOBALS['db']->getThemes($_SESSION['userId']);
          foreach ($themes as $k=>$v)
          {
              if ($k != 'themeID')
              {
                  $this->_f3->set($k, $v);
              }
          }

          // store the themes in the hive as 'results'
          $result = $GLOBALS['db']->getThemes($_SESSION['userId']);
          $this->_f3->set('results', $result);
          // decode the theme and set hive array
          $themeName = $result['themeName'];
          $this->_f3->set('themeName', $themeName);

          $itemArray = json_decode($result['themeList']);
          $this->_f3->set('itemArray', $itemArray);
        */

        // store the themes in the hive as 'results'
        // theme 1
        $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme1');
        //$this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['themeList']);
        $themeName = $result['themeName'];
        $this->_f3->set('itemArray', $itemArray);
        $this->_f3->set('themeName', $themeName);


        // theme 2
        $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme2');
        $this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['themeList']);
        $themeName2 = $result['themeName'];
        $this->_f3->set('itemArray2', $itemArray);
        $this->_f3->set('themeName2', $themeName2);


        // theme 3
        $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme3');
        $this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['themeList']);
        $themeName3 = $result['themeName'];
        $this->_f3->set('itemArray3', $itemArray);
        $this->_f3->set('themeName3', $themeName3);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // validate the data and set hive variables
            $valid = true;
            // validate theme name
            /*
            if (($_POST['items1']) == "") {
                $valid = false;
                $this->_f3->set('errors["name"]', "Please provide items to add");
                //$this->_f3->set('selectedName', $_POST['themeName']);
            } else {
                //$this->_f3->set('selectedName', $_POST['themeName']);
            }
            */

            // if valid data
            if ($valid) {
                $f3->clear('errors["name"]');

                //$themeName = $_POST['themeName'];
                $themeList1 = $_POST['items1'];
                $themeList2 = $_POST['items2'];
                $themeList3 = $_POST['items3'];

                $userId = $_SESSION['userId'];
                //$chooseTheme = $_POST['theme'];

                // construct theme objects
                $theme1 = new Theme1($themeName, $themeList1, $userId);
                $this->_f3->set('themes', $theme1, 'update');
                $theme2 = new Theme1($themeName, $themeList2, $userId);
                $this->_f3->set('themes', $theme2, 'update');
                $theme3 = new Theme1($themeName, $themeList3, $userId);
                $this->_f3->set('themes', $theme3, 'update');

                // add the themse to the database
                $GLOBALS['db']->addThemes($theme1, 'theme1', 'update');
                $GLOBALS['db']->addThemes($theme2, 'theme2', 'update');
                $GLOBALS['db']->addThemes($theme3, 'theme3', 'update');

            }

            // store the themes in the hive as 'results'
            // theme 1
            $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme1');
            $this->_f3->set('results', $result);
            // decode the theme and set hive array
            $itemArray = json_decode($result['themeList']);
            $themeName = $result['themeName'];
            $this->_f3->set('itemArray', $itemArray);
            $this->_f3->set('themeName', $themeName);


            // theme 2
            $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme2');
            $this->_f3->set('results', $result);
            // decode the theme and set hive array
            $itemArray = json_decode($result['themeList']);
            $themeName2 = $result['themeName'];
            $this->_f3->set('itemArray2', $itemArray);
            $this->_f3->set('themeName2', $themeName2);


            // theme 3
            $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme3');
            $this->_f3->set('results', $result);
            // decode the theme and set hive array
            $itemArray = json_decode($result['themeList']);
            $themeName3 = $result['themeName'];
            $this->_f3->set('itemArray3', $itemArray);
            $this->_f3->set('themeName3', $themeName3);


            // clear the item list
            $_POST['items'] = "";

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

                $section7 = new Section7("", "", "","", "","","","","",
                    "","","","", $userId);

                $section8 = new Section8("", "", "","", "","","","","",
                    "","","", $userId);

                $section9 = new Section9("", "", $userId);

                $section10 = new Section10("", "", "","", $userId);

                $theme1 = new Theme1("", "", $userId);
                $theme2 = new Theme2("", "", $userId);
                $theme3 = new Theme3("", "", $userId);

                $strategy1 = new Strategy1("", "", $userId);
                $strategy2 = new Strategy1("", "", $userId);
                $strategy3 = new Strategy1("", "", $userId);


                $_SESSION['section1'] = $section1;
                $_SESSION['section2'] = $section2;
                $_SESSION['section3'] = $section3;
                $_SESSION['section4'] = $section4;
                $_SESSION['section5'] = $section5;
                $_SESSION['section6'] = $section6;
                $_SESSION['section7'] = $section7;
                $_SESSION['section8'] = $section8;
                $_SESSION['section9'] = $section9;
                $_SESSION['section10'] = $section10;
                $_SESSION['theme1'] = $theme1;
                $_SESSION['theme2'] = $theme2;
                $_SESSION['theme3'] = $theme3;
                $_SESSION['strategy1'] = $strategy1;
                $_SESSION['strategy1'] = $strategy1;
                $_SESSION['strategy1'] = $strategy1;


                //var_dump($section1);

                // add the section to the database
                $GLOBALS['db']->addSection1($section1, 'add');
                $GLOBALS['db']->addSection2($section2, 'add');
                $GLOBALS['db']->addSection3($section3, 'add');
                $GLOBALS['db']->addSection4($section4, 'add');
                $GLOBALS['db']->addSection5($section5, 'add');
                $GLOBALS['db']->addSection6($section6, 'add');
                $GLOBALS['db']->addSection7($section7, 'add');
                $GLOBALS['db']->addSection8($section8, 'add');
                $GLOBALS['db']->addSection9($section9, 'add');
                $GLOBALS['db']->addSection10($section10, 'add');
                $GLOBALS['db']->addThemes($theme1, 'theme1', 'add');
                $GLOBALS['db']->addThemes($theme2, 'theme2', 'add');
                $GLOBALS['db']->addThemes($theme3, 'theme3', 'add');
                $GLOBALS['db']->addStrategy($strategy1, 'strategy1', 'add');
                $GLOBALS['db']->addStrategy($strategy2, 'strategy2', 'add');
                $GLOBALS['db']->addStrategy($strategy3, 'strategy3', 'add');


                $this->_f3->reroute('home');

            }
        }
        $view = new Template();
        echo $view->render
        ('views/newUser.html');
    }

    /**
     * Display the tactical route
     */
    public function tactical()
    {
        $view = new Template();
        echo $view->render('views/tactical.html');
    }

    /**
     * Display the strategy route
     */
    public function strategy()
    {
        // store the themes in the hive as 'results'
        // theme 1
        $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme1');
        //$this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['themeList']);
        $themeName = $result['themeName'];
        $this->_f3->set('itemArray', $itemArray);
        $this->_f3->set('themeName', $themeName);


        // theme 2
        $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme2');
        $this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['themeList']);
        $themeName2 = $result['themeName'];
        $this->_f3->set('itemArray2', $itemArray);
        $this->_f3->set('themeName2', $themeName2);


        // theme 3
        $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme3');
        $this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['themeList']);
        $themeName3 = $result['themeName'];
        $this->_f3->set('itemArray3', $itemArray);
        $this->_f3->set('themeName3', $themeName3);

        // store the strategies in the hive as 'results'
        // strategy 1
        $result = $GLOBALS['db']->getStrategies($_SESSION['userId'], 'strategy1');
        //$this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['strategyList']);
        $strategyName = $result['strategyName'];
        $this->_f3->set('strategyArray', $itemArray);
        $this->_f3->set('strategyName', $strategyName);


        // strategy 2
        $result = $GLOBALS['db']->getStrategies($_SESSION['userId'], 'strategy2');
        $this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['strategyList']);
        $strategyName2 = $result['strategyName'];
        $this->_f3->set('strategyArray2', $itemArray);
        $this->_f3->set('strategyName2', $strategyName2);


        // strategy 3
        $result = $GLOBALS['db']->getStrategies($_SESSION['userId'], 'strategy3');
        $this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['strategyList']);
        $strategyName3 = $result['strategyName'];
        $this->_f3->set('strategyArray3', $itemArray);
        $this->_f3->set('strategyName3', $strategyName3);


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // validate the data and set hive variables

            //$themeName = $_POST['themeName'];
            $strategyList1 = $_POST['items1'];
            $strategyList2 = $_POST['items2'];
            $strategyList3 = $_POST['items3'];

            $userId = $_SESSION['userId'];
            //$chooseTheme = $_POST['theme'];

            // construct strategy objects
            $strategy1 = new Strategy1($strategyName, $strategyList1, $userId);
            $this->_f3->set('strategy1', $strategy1, 'update');
            $strategy2 = new Strategy2($strategyName, $strategyList2, $userId);
            $this->_f3->set('strategy2', $strategy2, 'update');
            $strategy3 = new Strategy3($strategyName, $strategyList3, $userId);
            $this->_f3->set('strategy3', $strategy3, 'update');

            // add the strategies to the database
            $GLOBALS['db']->addStrategy($strategy1, 'strategy1', 'update');
            $GLOBALS['db']->addStrategy($strategy2, 'strategy2', 'update');
            $GLOBALS['db']->addStrategy($strategy3, 'strategy3', 'update');
            }

            // store the themes in the hive as 'results'
            // theme 1
            $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme1');
            $this->_f3->set('results', $result);
            // decode the theme and set hive array
            $itemArray = json_decode($result['themeList']);
            $themeName = $result['themeName'];
            $this->_f3->set('itemArray', $itemArray);
            $this->_f3->set('themeName', $themeName);


            // theme 2
            $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme2');
            $this->_f3->set('results', $result);
            // decode the theme and set hive array
            $itemArray = json_decode($result['themeList']);
            $themeName2 = $result['themeName'];
            $this->_f3->set('itemArray2', $itemArray);
            $this->_f3->set('themeName2', $themeName2);


            // theme 3
            $result = $GLOBALS['db']->getThemes($_SESSION['userId'], 'theme3');
            $this->_f3->set('results', $result);
            // decode the theme and set hive array
            $itemArray = json_decode($result['themeList']);
            $themeName3 = $result['themeName'];
            $this->_f3->set('itemArray3', $itemArray);
            $this->_f3->set('themeName3', $themeName3);

        // strategy 1
        $result = $GLOBALS['db']->getStrategies($_SESSION['userId'], 'strategy1');
        //$this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['strategyList']);
        $strategyName = $result['strategyName'];
        $this->_f3->set('strategyArray', $itemArray);
        $this->_f3->set('strategyName', $strategyName);


        // strategy 2
        $result = $GLOBALS['db']->getStrategies($_SESSION['userId'], 'strategy2');
        $this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['strategyList']);
        $strategyName2 = $result['strategyName'];
        $this->_f3->set('strategyArray2', $itemArray);
        $this->_f3->set('strategyName2', $strategyName2);


        // strategy 3
        $result = $GLOBALS['db']->getStrategies($_SESSION['userId'], 'strategy3');
        $this->_f3->set('results', $result);
        // decode the theme and set hive array
        $itemArray = json_decode($result['strategyList']);
        $strategyName3 = $result['strategyName'];
        $this->_f3->set('strategyArray3', $itemArray);
        $this->_f3->set('strategyName3', $strategyName3);

        $view = new Template();
        echo $view->render('views/strategy.html');
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