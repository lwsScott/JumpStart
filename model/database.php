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
     * Inserts a recipe into the database
     * @param $recipe the recipe to add
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



}