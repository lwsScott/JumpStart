<?php
/*
 * Database Class for playbook website
 * provides connection to database
 * additional functions will be to store and retrieve from database
 * 10/28/20
 * filename https://jumpstart.greenriverdev.com/355/JumpStart/model/database.php
 * @author Lewis Scott
 * @version 1.0
 */

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
//require '/home2/lscottgr/config.php';


/*
 * Class Database
 * constructs database object
 * additional functions will include storage and retrieval methods
 * 10/28/20
 * @author Lewis Scott
 * @version 1.0
 */
class Database
{
    //PDO object
    private $_dbh;

    function __construct()
    {
        try {
            if ($_SERVER['USER'] == 'lscottgr')
            {
                require_once '/home2/lscottgr/config.php';
            }
            else if ($_SERVER['USER'] == 'dhaasgre')
            {
                require_once '/home2/dhaasgre/config.php';
            }
            else if ($_SERVER['USER'] == 'chyanggr')
            {
                require_once '/home2/chyanggr/config.php';
            }
            else if ($_SERVER['USER'] == 'rbarban1')
            {
                require_once '/home/rbarban1/config.php';
            }

            //Create a new PDO connection
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //echo "Connected!";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    /**
     * Inserts Section 1 answers into the database
     * @param $section1 the section 1 answers to add
     */
    function addSection1($section1)
    {
        //var_dump($section1);

        //var_dump($_SESSION);
        //$userId = $_SESSION['userId'];
        //echo $userId;
        //1. Define the query
        $sql = "INSERT INTO section1 (a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, a11, a12, 
                        a13, a14, a15, a16, a17, a18, userId)
                VALUES (:a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, :a10, :a11, :a12, 
                        :a13, :a14, :a15, :a16, :a17, :a18, :userId)";
        //var_dump($sql);
        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);
        //var_dump($statement);
        $a1 = $section1->getA1();
        $a2 = $section1->getA2();
        $a3 = $section1->getA3();
        $a4 = $section1->getA4();
        $a5 = $section1->getA5();
        $a6 = $section1->getA6();
        $a7 = $section1->getA7();
        $a8 = $section1->getA8();
        $a9 = $section1->getA9();
        $a10 = $section1->getA10();
        $a11 = $section1->getA11();
        $a12 = $section1->getA12();
        $a13 = $section1->getA13();
        $a14 = $section1->getA14();
        $a15 = $section1->getA15();
        $a16 = $section1->getA16();
        $a17 = $section1->getA17();
        $a18 = $section1->getA18();
        $userId = $section1->getUserId();


        //3. Bind the parameters
        $statement->bindParam(':a1',$a1, PDO::PARAM_STR);
        $statement->bindParam(':a2',$a2, PDO::PARAM_STR);
        $statement->bindParam(':a3',$a3, PDO::PARAM_STR);
        $statement->bindParam(':a4',$a4, PDO::PARAM_STR);
        $statement->bindParam(':a5',$a5, PDO::PARAM_STR);
        $statement->bindParam(':a6',$a6, PDO::PARAM_STR);
        $statement->bindParam(':a7',$a7, PDO::PARAM_STR);
        $statement->bindParam(':a8',$a8, PDO::PARAM_STR);
        $statement->bindParam(':a9',$a9, PDO::PARAM_STR);
        $statement->bindParam(':a10',$a10, PDO::PARAM_STR);
        $statement->bindParam(':a11',$a11, PDO::PARAM_STR);
        $statement->bindParam(':a12',$a12, PDO::PARAM_STR);
        $statement->bindParam(':a13',$a13, PDO::PARAM_STR);
        $statement->bindParam(':a14',$a14, PDO::PARAM_STR);
        $statement->bindParam(':a15',$a15, PDO::PARAM_STR);
        $statement->bindParam(':a16',$a16, PDO::PARAM_STR);
        $statement->bindParam(':a17',$a17, PDO::PARAM_STR);
        $statement->bindParam(':a18',$a18, PDO::PARAM_STR);
        $statement->bindParam(':userId',$userId, PDO::PARAM_STR);

        //$statement->bindParam(':image', $recipe->getImage());

        //4. Execute the statement
        $result = $statement->execute();
        echo "Result: " . $result;

        //Get the key of the last inserted row
        $answerID = $this->_dbh->lastInsertId();
        $_SESSION['answerID'] = $answerID;
        //echo $id;
    }

    /**
     * Inserts Section 1 answers into the database
     * @param $section1 the section 1 answers to add
     */
    function addSection2($section2)
    {
        //var_dump($section1);

        //var_dump($_SESSION);
        //$userId = $_SESSION['userId'];
        //echo $userId;
        //1. Define the query
        $sql = "INSERT INTO section2 (b1, b2, b3, b4, b5, b6, b7, b8, b9, b10, b11, b12, 
                        b13, b14, b15, b16, b17, b17yn, b18, b18yn, b19, b19yn, b20, b20yn,
                        b21, b21yn, b22, b22yn, b23, b23yn, b24, b24yn, b25, b25yn, b26, 
                        b26yn, b27, b27yn, b28, b28yn, b29, userId)
                VALUES (:b1, :b2, :b3, :b4, :b5, :b6, :b7, :b8, :b9, :b10, :b11, :b12, 
                        :b13, :b14, :b15, :b16, :b17, :b17yn, :b18, :b18yn, :b19, :b19yn, :b20, :b20yn,
                        :b21, :b21yn, :b22, :b22yn, :b23, :b23yn, :b24, :b24yn, :b25, :b25yn, :b26, 
                        :b26yn, :b27, :b27yn, :b28, :b28yn, :b29, :userId)";
        //var_dump($sql);
        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);
        //var_dump($statement);
        $b1 = $section2->getB1();
        $b2 = $section2->getB2();
        $b3 = $section2->getB3();
        $b4 = $section2->getB4();
        $b5 = $section2->getB5();
        $b6 = $section2->getB6();
        $b7 = $section2->getB7();
        $b8 = $section2->getB8();
        $b9 = $section2->getb9();
        $b10 = $section2->getB10();
        $b11 = $section2->getB11();
        $b12 = $section2->getB12();
        $b13 = $section2->getB13();
        $b14 = $section2->getB14();
        $b15 = $section2->getB15();
        $b16 = $section2->getB16();
        $b17 = $section2->getB17();
        $b17yn = $section2->getB17yn();
        $b18 = $section2->getB18();
        $b18yn = $section2->getB18yn();
        $b19 = $section2->getB19();
        $b19yn = $section2->getB19yn();
        $b21 = $section2->getB21();
        $b21yn = $section2->getB21yn();
        $b22 = $section2->getB22();
        $b22yn = $section2->getB22yn();
        $b23 = $section2->getB23();
        $b23yn = $section2->getB23yn();
        $b24 = $section2->getB24();
        $b24yn = $section2->getB24yn();
        $b25 = $section2->getB25();
        $b25yn = $section2->getB25yn();
        $b26 = $section2->getB26();
        $b26yn = $section2->getB26yn();
        $b27 = $section2->getB27();
        $b27yn = $section2->getB27yn();
        $b28 = $section2->getB28();
        $b28yn = $section2->getB28yn();
        $b29 = $section2->getB29();
        $userId = $section2->getUserId();


        //3. Bind the parameters
        $statement->bindParam(':b1',$b1, PDO::PARAM_STR);
        $statement->bindParam(':b2',$b2, PDO::PARAM_STR);
        $statement->bindParam(':b3',$b3, PDO::PARAM_STR);
        $statement->bindParam(':b4',$b4, PDO::PARAM_STR);
        $statement->bindParam(':b5',$b5, PDO::PARAM_STR);
        $statement->bindParam(':b6',$b6, PDO::PARAM_STR);
        $statement->bindParam(':b7',$b7, PDO::PARAM_STR);
        $statement->bindParam(':b8',$b8, PDO::PARAM_STR);
        $statement->bindParam(':b9',$b9, PDO::PARAM_STR);
        $statement->bindParam(':b10',$b10, PDO::PARAM_STR);
        $statement->bindParam(':b11',$b11, PDO::PARAM_STR);
        $statement->bindParam(':b12',$b12, PDO::PARAM_STR);
        $statement->bindParam(':b13',$b13, PDO::PARAM_STR);
        $statement->bindParam(':b14',$b14, PDO::PARAM_STR);
        $statement->bindParam(':b15',$b15, PDO::PARAM_STR);
        $statement->bindParam(':b16',$b16, PDO::PARAM_STR);
        $statement->bindParam(':b17',$b17, PDO::PARAM_STR);
        $statement->bindParam(':b17yn',$b17yn, PDO::PARAM_STR);
        $statement->bindParam(':b18',$b18, PDO::PARAM_STR);
        $statement->bindParam(':b18yn',$b18yn, PDO::PARAM_STR);
        $statement->bindParam(':b19',$b19, PDO::PARAM_STR);
        $statement->bindParam(':b19yn',$b19yn, PDO::PARAM_STR);
        $statement->bindParam(':b20',$b20, PDO::PARAM_STR);
        $statement->bindParam(':b20yn',$b20yn, PDO::PARAM_STR);
        $statement->bindParam(':b21',$b21, PDO::PARAM_STR);
        $statement->bindParam(':b21yn',$b21yn, PDO::PARAM_STR);
        $statement->bindParam(':b22',$b22, PDO::PARAM_STR);
        $statement->bindParam(':b22yn',$b22yn, PDO::PARAM_STR);
        $statement->bindParam(':b23',$b23, PDO::PARAM_STR);
        $statement->bindParam(':b23yn',$b23yn, PDO::PARAM_STR);
        $statement->bindParam(':b24',$b24, PDO::PARAM_STR);
        $statement->bindParam(':b24yn',$b24yn, PDO::PARAM_STR);
        $statement->bindParam(':b25',$b25, PDO::PARAM_STR);
        $statement->bindParam(':b25yn',$b25yn, PDO::PARAM_STR);
        $statement->bindParam(':b26',$b26, PDO::PARAM_STR);
        $statement->bindParam(':b26yn',$b26yn, PDO::PARAM_STR);
        $statement->bindParam(':b27',$b27, PDO::PARAM_STR);
        $statement->bindParam(':b27yn',$b27yn, PDO::PARAM_STR);
        $statement->bindParam(':b28',$b28, PDO::PARAM_STR);
        $statement->bindParam(':b28yn',$b28yn, PDO::PARAM_STR);
        $statement->bindParam(':b29',$b29, PDO::PARAM_STR);
        $statement->bindParam(':userId',$userId, PDO::PARAM_STR);

        //$statement->bindParam(':image', $recipe->getImage());

        //4. Execute the statement
        $result = $statement->execute();
        //echo "Result: " . $result;

        //Get the key of the last inserted row
        $answerID = $this->_dbh->lastInsertId();
        $_SESSION['answerID'] = $answerID;
        //echo $id;
    }

    /**
     * Inserts Section 3 answers into the database
     * @param $section3 the section 3 answers to add
     */
    function addSection3($section3)
    {
        //var_dump($section1);

        //var_dump($_SESSION);
        //$userId = $_SESSION['userId'];
        //echo $userId;
        //1. Define the query
        $sql = "INSERT INTO section3(c1, c2, c3, c4, c5, c6, c7, c8, c9, c10a, 
                   c10b, c10c, c10d, userId)
                VALUES (:c1, :c2, :c3, :c4, :c5, :c6, :c7, :c8, :c9, :c10a, :c10b, :c10c, :c10d, :userId)";
        //var_dump($sql);
        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);
        //var_dump($statement);
        $c1 = $section3->getC1();
        $c2 = $section3->getC2();
        $c3 = $section3->getC3();
        $c4 = $section3->getC4();
        $c5 = $section3->getC5();
        $c6 = $section3->getC6();
        $c7 = $section3->getC7();
        $c8 = $section3->getC8();
        $c9 = $section3->getC9();
        $c10a = $section3->getC10a();
        $c10b = $section3->getC10b();
        $c10c = $section3->getC10c();
        $c10d = $section3->getC10d();
        $userId = $section3->getUserId();


        //3. Bind the parameters
        $statement->bindParam(':c1',$c1, PDO::PARAM_STR);
        $statement->bindParam(':c2',$c2, PDO::PARAM_STR);
        $statement->bindParam(':c3',$c3, PDO::PARAM_STR);
        $statement->bindParam(':c4',$c4, PDO::PARAM_STR);
        $statement->bindParam(':c5',$c5, PDO::PARAM_STR);
        $statement->bindParam(':c6',$c6, PDO::PARAM_STR);
        $statement->bindParam(':c7',$c7, PDO::PARAM_STR);
        $statement->bindParam(':c8',$c8, PDO::PARAM_STR);
        $statement->bindParam(':c9',$c9, PDO::PARAM_STR);
        $statement->bindParam(':c10a',$c10a, PDO::PARAM_STR);
        $statement->bindParam(':c10b',$c10b, PDO::PARAM_STR);
        $statement->bindParam(':c10c',$c10c, PDO::PARAM_STR);
        $statement->bindParam(':c10d',$c10d, PDO::PARAM_STR);
        $statement->bindParam(':userId',$userId, PDO::PARAM_STR);

        //$statement->bindParam(':image', $recipe->getImage());

        //4. Execute the statement
        $result = $statement->execute();
        echo "Result: " . $result;

        //Get the key of the last inserted row
        $answerID = $this->_dbh->lastInsertId();
        $_SESSION['answerID'] = $answerID;
        //echo $id;
    }

    /**
     * Insert a new user into the database
     * @param $newUser the user to add
     */
    function writeUser($newUser)
    {
        //1. Define the query
        $sql = "INSERT INTO playbookUsers (username, password)
                VALUES (:username, :password)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);


        $userName = $newUser->getUsername();
        $password = $newUser->getPassword();


        //3. Bind the parameters
        // $statement->bindParam(':sid', $user->get());
        $statement->bindParam(':username', $userName, PDO::PARAM_STR);
        $statement->bindParam(':password', $password, PDO::PARAM_STR);


        //4. Execute the statement
        $statement->execute();

        //Get the key of the last inserted row
        $id = $this->_dbh->lastInsertId();
    }
    /*
     * The user's database
     */
    function getUser()
    {
        //1. Define the query
        $sql = "SELECT * FROM playbookUsers";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        //4. Execute the statement
        $statement->execute();

        //5. Get the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * Get the User ID given a username and password
     * @param $username the username
     * @param $password the password
     * @return mixed|string the userId if true, else an error message
     */
    function getUserId($username, $password)
    {
        //echo $username . "and" . $password. "<br>";

        //1. Define the query
        $sql = "SELECT userId FROM playbookUsers
                WHERE username = '$username' && password = '$password'";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);
        //var_dump($statement);
        //3. Bind the parameters

        //4. Execute the statement
        $statement->execute();

        //5. Get the result
        $result = $statement->fetchColumn();
        //var_dump($result);
        //foreach ($result as $row) {
        //    echo $row;
        //}
        if ($result) {
            return $result;
        } else {
            return "Incorrect login credentials provided";
        }
    }


    /**
     * Get user details
     * @param $userId the user to get details
     * @return mixed the details
     */
    function getUserDetails($userId)
    {
        //1. Define the query
        $sql = "SELECT * 
                FROM playbookUsers
                WHERE userId = $userId";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':userId', $userId);

        //4. Execute the statement
        $statement->execute();

        //5. Get the result
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


}