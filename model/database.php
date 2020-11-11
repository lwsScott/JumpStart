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
 * additional functions include storage and retrieval methods
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
            if ($_SERVER['USER'] == 'jumpstar')
            {
                require_once '/home/jumpstar/config.php';
            }
            elseif ($_SERVER['USER'] == 'lscottgr') {

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
    function addSection1($section1, $change)
    {
        //var_dump($section1);

        //var_dump($_SESSION);
        $userId = $_SESSION['userId'];
        //1. Define the query
        if ($change == 'add') {
            $sql = "INSERT INTO section1 (a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, a11, a12, 
                        a13, a14, a15, a16, a17, a18, userId)
                VALUES (:a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, :a10, :a11, :a12, 
                        :a13, :a14, :a15, :a16, :a17, :a18, :userId)";
        } elseif ($change == 'update') {
            $sql = "UPDATE section1 SET a1 = :a1, a2 = :a2, a3 = :a3, a4 = :a4, a5 = :a5, a6 = :a6, a7 = :a7,
                                        a8 = :a8, a9 = :a9, a10 = :a10, a11 = :a11, a12 = :a12, a13 = :a13, a14 = :a14, 
                                        a15 = :a15, a16 = :a16, a17 = :a17, a18 = :a18
                                        WHERE userId = :userId";

        }
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
        //$userId = $_SESSION['userId'];


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

        //echo $sql;
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
     * Get a section to add to the database
     * @param $userId the user id to get the section for
     * @param $section the section to get
     * @return the section
     */
    function getSection($userId, $section)
    {
        //1. Define the query
        $sql = "SELECT * 
                FROM $section
                WHERE userId = $userId";
        //echo $sql;
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

    /**
     * Inserts Section 2 answers into the database
     * @param $section1 the section 1 answers to add
     */
    function addSection2($section2, $change)
    {
        //var_dump($section1);

        //var_dump($_SESSION);
        $userId = $_SESSION['userId'];
        //echo $userId;
        //1. Define the query
        if ($change == 'add') {
            $sql = "INSERT INTO section2 (b1, b2, b3, b4, b5, b6, b7, b8, b9, b10, b11, b12, 
                        b13, b14, b15, b16, b17, b17yn, b18, b18yn, b19, b19yn, b20, b20yn,
                        b21, b21yn, b22, b22yn, b23, b23yn, b24, b24yn, b25, b25yn, b26, 
                        b26yn, b27, b27yn, b28, b28yn, b29, userId)
                VALUES (:b1, :b2, :b3, :b4, :b5, :b6, :b7, :b8, :b9, :b10, :b11, :b12, 
                        :b13, :b14, :b15, :b16, :b17, :b17yn, :b18, :b18yn, :b19, :b19yn, :b20, :b20yn,
                        :b21, :b21yn, :b22, :b22yn, :b23, :b23yn, :b24, :b24yn, :b25, :b25yn, :b26, 
                        :b26yn, :b27, :b27yn, :b28, :b28yn, :b29, :userId)";
        } elseif ($change == 'update') {
            $sql = "UPDATE section2 SET b1 = :b1, b2 = :b2, b3 = :b3, b4 = :b4, b5 = :b5, b6 = :b6, b7 = :b7,
                                        b8 = :b8, b9 = :b9, b10 = :b10, b11 = :b11, b12 = :b12, b13 = :b13, b14 = :b14, 
                                        b15 = :b15, b16 = :b16, b17 = :b17, b17yn = :b17yn , b18 = :b18, b18yn = :b18yn,
                                        b19 = :b19, b19yn = :b19yn, b20 = :b20, b20yn = :b20yn, b21 = :b21, b21yn = :b21yn,
                                        b22 = :b22, b22yn = :b22yn, b23 = :b23, b23yn = :b23yn, b24 = :b24, b24yn = :b24yn,
                                        b25 = :b25, b25yn = :b25yn, b26 = :b26, b26yn = :b26yn, b27 = :b27, b27yn = :b27yn,
                                        b28 = :b28, b28yn = :b28yn, b29 = :b29
                                        WHERE userId = :userId";
        }
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
        $b20 = $section2->getB20();
        $b20yn = $section2->getB20yn();
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
        //$userId = $section2->getUserId();


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
        echo "Result: " . $result;

        //Get the key of the last inserted row
        $answerID = $this->_dbh->lastInsertId();
        $_SESSION['answerID'] = $answerID;
        //echo $id;
    }

    /**
     * Inserts Section 3 answers into the database
     * @param $section3 the section 3 answers to add
     */
    function addSection3($section3, $change)
    {
        //var_dump($section1);

        //var_dump($_SESSION);
        $userId = $_SESSION['userId'];
        //echo $userId;
        //1. Define the query
        if ($change == 'add') {
            $sql = "INSERT INTO section3(c1, c1t, c2, c2t, c3, c3t, c4, c4t, c5, c6, c6t, c7, c7t, c8, c8t, 
                    c9, c9t, c10a, c10b, c10c, c10d, userId)
                VALUES (:c1, :c1t, :c2, :c2t, :c3, :c3t, :c4, :c4t, :c5, :c6, :c6t, :c7, :c7t, :c8, :c8t, :c9, :c9t, 
                :c10a, :c10b, :c10c, :c10d, :userId)";
        } elseif ($change == 'update') {
            $sql = "UPDATE section3 SET c1 = :c1, c1t = :c1t, c2 = :c2, c2t = :c2t, c3 = :c3, c3t = :c3t, c4 = :c4, c4t = :c4t, 
                            c5 = :c5, c6 = :c6, c6t = :c6t, c7 = :c7, c7t = :c7t, c8 = :c8, c8t = :c8t, c9 = :c9, c9t = :c9t, 
                            c10a = :c10a, c10b = :c10b, c10c = :c10c, c10d = :c10d
                            WHERE userId = :userId";

    }
        //var_dump($sql);
        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);
        //var_dump($statement);
        $c1 = $section3->getC1();
        $c1t = $section3->getC1t();

        $c2 = $section3->getC2();
        $c2t = $section3->getC2t();

        $c3 = $section3->getC3();
        $c3t = $section3->getC3t();

        $c4 = $section3->getC4();
        $c4t = $section3->getC4t();

        $c5 = $section3->getC5();
        $c6 = $section3->getC6();
        $c6t = $section3->getC6t();

        $c7 = $section3->getC7();
        $c7t = $section3->getC7t();

        $c8 = $section3->getC8();
        $c8t = $section3->getC8t();

        $c9 = $section3->getC9();
        $c9t = $section3->getC9t();

        $c10a = $section3->getC10a();
        $c10b = $section3->getC10b();
        $c10c = $section3->getC10c();
        $c10d = $section3->getC10d();
        //$userId = $section3->getUserId();


        //3. Bind the parameters
        $statement->bindParam(':c1',$c1, PDO::PARAM_STR);
        $statement->bindParam(':c1t',$c1t, PDO::PARAM_STR);

        $statement->bindParam(':c2',$c2, PDO::PARAM_STR);
        $statement->bindParam(':c2t',$c2t, PDO::PARAM_STR);

        $statement->bindParam(':c3',$c3, PDO::PARAM_STR);
        $statement->bindParam(':c3t',$c3t, PDO::PARAM_STR);

        $statement->bindParam(':c4',$c4, PDO::PARAM_STR);
        $statement->bindParam(':c4t',$c4t, PDO::PARAM_STR);

        $statement->bindParam(':c5',$c5, PDO::PARAM_STR);
        $statement->bindParam(':c6',$c6, PDO::PARAM_STR);
        $statement->bindParam(':c6t',$c6t, PDO::PARAM_STR);

        $statement->bindParam(':c7',$c7, PDO::PARAM_STR);
        $statement->bindParam(':c7t',$c7t, PDO::PARAM_STR);

        $statement->bindParam(':c8',$c8, PDO::PARAM_STR);
        $statement->bindParam(':c8t',$c8t, PDO::PARAM_STR);

        $statement->bindParam(':c9',$c9, PDO::PARAM_STR);
        $statement->bindParam(':c9t',$c9t, PDO::PARAM_STR);

        $statement->bindParam(':c10a',$c10a, PDO::PARAM_STR);
        $statement->bindParam(':c10b',$c10b, PDO::PARAM_STR);
        $statement->bindParam(':c10c',$c10c, PDO::PARAM_STR);
        $statement->bindParam(':c10d',$c10d, PDO::PARAM_STR);
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
     * Inserts Section 4 answers into the datadase
     * @param $section4 the section 4 answers to add
     */
    function addSection4($section4, $change)
    {
        $userId = $_SESSION['userId'];
        //echo $userId;
        //1. Define the query
        if ($change == 'add') {
            $sql = "INSERT INTO section4(d1, d2, d3, d4, d5, d5t, d6, d6t, d7, d8, d9, d10, d11, d12, 
                    d13, d14, d15, d16, d17, d18, d19, d20, d21, d22, d23, d24, d25, d26, d27, d28, d29a,
                     d29b, d29c, d29d, userId)
                    VALUES (:d1, :d2, :d3, :d4, :d5, :d5t, :d6, :d6t, :d7, :d8, :d9, :d10, :d11, :d12, 
                    :d13, :d14, :d15, :d16, :d17, :d18, :d19, :d20, :d21, :d22, :d23, :d24, :d25, :d26, :d27,
                    :d28, :d29a, :d29b, :d29c, :d29d, :userId)";
        } elseif ($change == 'update') {
                $sql = "UPDATE section4 SET d1 = :d1, d2 = :d2, d3 = :d3, d4 = :d4,  
                            d5 = :d5, d5t = :d5t, d6 = :d6, d6t = :d6t, d7 = :d7, d8 = :d8, d9 = :d9, d10 = :d10, d11 = :d11, d12 = :d12, 
                            d13 = :d13, d14 = :d14, d15 = :d15, d16 = :d16, d17 = :d17, d18 = :d18, d19 = :d19, d20 = :d20,
                            d21 = :d21, d22 = :d22, d23 = :d23, d24 = :d24, d25 = :d25, d26 = :d26, d27 = :d27, d28 = :d28, 
                            d29a = :d29a, d29b = :d29b, d29c = :d29c, d29d = :d29d
                            WHERE userId = :userId";
    }
        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);
        //var_dump($statement);
        $d1 = $section4->getD1();
        $d2 = $section4->getD2();
        $d3 = $section4->getD3();
        $d4 = $section4->getD4();
        $d5 = $section4->getD5();
        $d5t = $section4->getD5t();
        $d6 = $section4->getD6();
        $d6t = $section4->getD6t();
        $d7 = $section4->getD7();
        $d8 = $section4->getD8();
        $d9 = $section4->getD9();
        $d10 = $section4->getD10();
        $d11 = $section4->getD11();
        $d12 = $section4->getD12();
        $d13 = $section4->getD13();
        $d14 = $section4->getD14();
        $d15 = $section4->getD15();
        $d16 = $section4->getD16();
        $d17 = $section4->getD17();
        $d18 = $section4->getD18();
        $d19 = $section4->getD19();
        $d20 = $section4->getD20();
        $d21 = $section4->getD21();
        $d22 = $section4->getD22();
        $d23 = $section4->getD23();
        $d24 = $section4->getD24();
        $d25 = $section4->getD25();
        $d26 = $section4->getD26();
        $d27 = $section4->getD27();
        $d28 = $section4->getD28();
        $d29a = $section4->getD29a();
        $d29b = $section4->getD29b();
        $d29c = $section4->getD29c();
        $d29d = $section4->getD29d();

        //$userId = $section4->getUserId();


        //3. Bind the parameters
        $statement->bindParam(':d1',$d1, PDO::PARAM_STR);
        $statement->bindParam(':d2',$d2, PDO::PARAM_STR);
        $statement->bindParam(':d3',$d3, PDO::PARAM_STR);
        $statement->bindParam(':d4',$d4, PDO::PARAM_STR);
        $statement->bindParam(':d5',$d5, PDO::PARAM_STR);
        $statement->bindParam(':d5t',$d5t, PDO::PARAM_STR);
        $statement->bindParam(':d6',$d6, PDO::PARAM_STR);
        $statement->bindParam(':d6t',$d6t, PDO::PARAM_STR);
        $statement->bindParam(':d7',$d7, PDO::PARAM_STR);
        $statement->bindParam(':d8',$d8, PDO::PARAM_STR);
        $statement->bindParam(':d9',$d9, PDO::PARAM_STR);
        $statement->bindParam(':d10',$d10, PDO::PARAM_STR);
        $statement->bindParam(':d11',$d11, PDO::PARAM_STR);
        $statement->bindParam(':d12',$d12, PDO::PARAM_STR);
        $statement->bindParam(':d13',$d13, PDO::PARAM_STR);
        $statement->bindParam(':d14',$d14, PDO::PARAM_STR);
        $statement->bindParam(':d15',$d15, PDO::PARAM_STR);
        $statement->bindParam(':d16',$d16, PDO::PARAM_STR);
        $statement->bindParam(':d17',$d17, PDO::PARAM_STR);
        $statement->bindParam(':d18',$d18, PDO::PARAM_STR);
        $statement->bindParam(':d19',$d19, PDO::PARAM_STR);
        $statement->bindParam(':d20',$d20, PDO::PARAM_STR);
        $statement->bindParam(':d21',$d21, PDO::PARAM_STR);
        $statement->bindParam(':d22',$d22, PDO::PARAM_STR);
        $statement->bindParam(':d23',$d23, PDO::PARAM_STR);
        $statement->bindParam(':d24',$d24, PDO::PARAM_STR);
        $statement->bindParam(':d25',$d25, PDO::PARAM_STR);
        $statement->bindParam(':d26',$d26, PDO::PARAM_STR);
        $statement->bindParam(':d27',$d27, PDO::PARAM_STR);
        $statement->bindParam(':d28',$d28, PDO::PARAM_STR);
        $statement->bindParam(':d29a',$d29a, PDO::PARAM_STR);
        $statement->bindParam(':d29b',$d29b, PDO::PARAM_STR);
        $statement->bindParam(':d29c',$d29c, PDO::PARAM_STR);
        $statement->bindParam(':d29d',$d29d, PDO::PARAM_STR);
        $statement->bindParam(':userId',$userId, PDO::PARAM_STR);

        //4. Execute the statement
        $result = $statement->execute();
        //echo "Result: " . $result;

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