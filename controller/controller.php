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
     * Process the view Recipes route
     */
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
                $this->_f3->set('errors["firstName"]', "cant be empty");
                //echo "firstname no done";
            }

            if (!$this->_validator->validName($_POST['lastName'])) {

                //Set an error variable in the F3 hive
                $valid = false;
                $this->_f3->set('errors["lastName"]', "cant be empty");
                //echo "last name not done";
            }

            if (!$this->_validator->validPhone($_POST['phone'])) {
                $valid = false;
                $this->_f3->set('errors["phone"]', "must be a number");
                //echo "phone not done";
            }

            if (!$this->_validator->validEmail($_POST['email'])) {
                $valid = false;
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["email"]', "must be a correct format");
                //echo "email false";
            }

            if (!$this->_validator->validName($_POST['username'])) {
                $valid = false;
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["username"]', "cant be empty");
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
                $this->_f3->set('errors["confirm"]', "need the same as password");
                //echo "confirm password false";
            }

            // check if premium user selected
            if (isset($_POST['membership'])) {
                $this->_f3->set('membership', $_POST['membership']);
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