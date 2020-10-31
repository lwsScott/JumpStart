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
     * Display the section1 route
     */
    public function section1($f3)
    {
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
                $userId = "me";


                // construct a section1 object
                $section1 = new Section1($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12,
                    $a13, $a14, $a15, $a16, $a17, $a18, $userId);

                $_SESSION['section1'] = $section1;
                //var_dump($section1);

                // add the recipe to the database
                $GLOBALS['db']->addSection1($section1);
                $f3->reroute("results");


                //$f3->reroute("results");
            }

        } else {
            $view = new Template();
            echo $view->render('views/section1.html');
        }
    }

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
    public function login()
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

                    // get the user permission
                    $permission = $GLOBALS['db']->getPermission($userId);
                    $_SESSION['permission'] = $permission;

                    // redirect user to either the page they came from or index.php
                    $page = isset($_SESSION['page']) ? $_SESSION['page'] : "index.php";
                    header("location: " . $page);
                } else {
                    // set error flag to true
                    $_SESSION['err'] = true;
                    $err = true;
                }
            }
        }
        // display login
        $view = new Template();
        echo $view->render
        ('views/login.php');
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
            //var_dump($_POST);
            if (!$this->_validator->validName($_POST['firstName'])) {

                //Set an error variable in the F3 hive
                $valid = false;
                $this->_f3->set('errors["firstName"]',  "Please provide a first name");
                //echo "firstname no done";
            }

            if (!$this->_validator->validName($_POST['lastName'])) {

                //Set an error variable in the F3 hive
                $valid = false;
                $this->_f3->set('errors["lastName"]',  "Please provide a last name");
                //echo "last name not done";
            }

            if (!$this->_validator->validPhone($_POST['phone'])) {
                $valid = false;
                $this->_f3->set('errors["phone"]', "Please provide a valid phone number");
                //echo "phone not done";
            }

            if (!$this->_validator->validEmail($_POST['email'])) {
                $valid = false;
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["email"]', "Please provide a valid e-mail");
                //echo "email false";
            }

            if (!$this->_validator->validName($_POST['username'])) {
                $valid = false;
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["username"]', "Please provide a valid username");
                //echo "username false";
            }
            //echo $_SESSION['nameAvail'];
            if (($_SESSION['nameAvail'] != 'available')) {
                $valid = false;
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["username"]', "Username not available");
                //echo "username false";
            }

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

            // check if type of user selected
            // not used for now
            if (isset($_POST['membership'])) {
                $this->_f3->set('membership', $_POST['membershi    p']);
                $permission = 'upload';
            }
            //echo "I made it here";
            //var_dump($valid);

            // make the form stick
            $this->_f3->set('firstName', $_POST['firstName']);
            $this->_f3->set('lastName', $_POST['lastName']);
            $this->_f3->set('phone', $_POST['phone']);
            $this->_f3->set('email', $_POST['email']);
            $this->_f3->set('username', $_POST['username']);
            $this->_f3->set('password', $_POST['password']);
            $this->_f3->set('confirm', $_POST['confirm']);

            if ($valid) {
                //echo "I made it here valid";

                //echo "start store datebase";
                $firstName = $_POST['firstName'];

                //echo $firstName;
                $lastName = $_POST['lastName'];
                //echo $lastName;
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                // create the user object
                // premium user if selected, standard user if not selected
                if (isset($_POST['membership'])) {
                    $newUser = new PremiumUser($firstName, $lastName, $email, $phone,
                        $username, $password, $permission);
                }
                else {
                    $newUser = new User($firstName, $lastName, $email, $phone,
                        $username, $password);
                }

                // add into it
                //var_dump($newUser);
                $GLOBALS['db']->writeUser($newUser);
                $this->_f3->reroute('viewUsers');
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