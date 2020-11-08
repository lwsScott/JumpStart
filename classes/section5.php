<?php


class Section5
{
    //Declare instance variables
    private $_answerID;
    private $_e1;
    private $_e1a;
    private $_e1b;
    private $_e2;
    private $_e2a;
    private $_e2b;
    private $_e3;
    private $_e3a;
    private $_e3b;
    private $_e4;
    private $_e4a;
    private $_e4b;
    private $_e4c;
    private $_e5;
    private $_e5a;
    private $_e5b;
    private $_e6;
    private $_e6a;
    private $_e6b;
    private $_e6c;
    private $_e7;
    private $_e7a;
    private $_e7b;
    private $_e7c;
    private $_e8;
    private $_e8a;
    private $_e8b;
    private $_e9;
    private $_e9a;
    private $_e9b;
    private $_e9c;
    private $_e10;
    private $_e10a;
    private $_e10b;
    private $_e10c;
    private $_e11;
    private $_e11a;
    private $_e11b;
    private $_e11c;
    private $_e12;
    private $_e12a;
    private $_e12b;
    private $_e12c;
    private $_e13;
    private $_e13a;
    private $_e13b;
    private $_e13c;
    private $_e14;
    private $_e14a;
    private $_e14b;
    private $_e15;
    private $_e15a;
    private $_e16;
    private $_e16a;
    private $_e16b;
    private $_e17;
    private $_e17a;
    private $_e17b;
    private $_e18;
    private $_e18a;
    private $_e18b;
    private $_e19;
    private $_e19a;
    private $_e19b;
    private $_e20;
    private $_e20a;
    private $_e20b;
    private $_e21;
    private $_e21a;
    private $_e21b;
    private $_e22;
    private $_e22a;
    private $_e22b;
    private $_e22c;
    private $_e23;
    private $_e23a;
    private $_e23b;
    private $_e23c;
    private $_e24;
    private $_e24a;
    private $_e24b;
    private $_e24c;
    private $_e25;
    private $_e25a;
    private $_e25b;
    private $_e26;
    private $_e26a;
    private $_e26b;
    private $_e26c;
    private $_e27;
    private $_e27a;
    private $_e27b;
    private $_e27c;
    private $_e28;
    private $_e28a;
    private $_e28b;
    private $_e28c;
    private $_e29;
    private $_e29a;
    private $_e29b;
    private $_e29c;
    private $_e30;
    private $_e30a;
    private $_e30b;
    private $_e30c;
    private $_e31;
    private $_e31a;
    private $_e32;
    private $_e32a;
    private $_e32b;
    private $_e32c;
    private $_e33;
    private $_e33a;
    private $_e33b;
    private $_e34;
    private $_e34a;
    private $_e34b;
    private $_e35;
    private $_e35a;
    private $_e35b;
    private $_e36;
    private $_e36a;
    private $_e36b;
    private $_e36c;
    private $_e37;
    private $_e37a;
    private $_e37b;
    private $_e37c;
    private $_e38;
    private $_e38a;
    private $_e38b;
    private $_e39;
    private $_e39a;
    private $_e39b;
    private $_e40;
    private $_e40a;
    private $_e40b;
    private $_e41;
    private $_e41a;
    private $_e41b;
    private $_e42;
    private $_e42a;
    private $_e42b;
    private $_e43;
    private $_e44;
    private $_e44a;
    private $_e44b;
    private $_e45;
    private $_e45a;
    private $_e45b;
    private $_e46;
    private $_e46a;
    private $_e46b;
    private $_e47;
    private $_e47a;
    private $_e47b;
    private $_e48;
    private $_e48a;
    private $_e48b;
    private $_e49;
    private $_e49a;
    private $_e49b;
    private $_e50;
    private $_e50a;
    private $_e50b;
    private $_e51;
    private $_e51a;
    private $_e52;
    private $_e52a;
    private $_e52b;
    private $_e52c;
    private $_e52d;






    private $_userId;

    // constructor

    function __construct($e1, $e1a, $e1b, $e2, $e2a, $e2b, $e3, $e3a, $e3b, $e4, $e4a, $e4b, $e4c,
                         $e5, $e5a, $e5b, $e6, $e6a, $e6b, $e6c, $e7, $e7a, $e7b, $e7c, $e8,
                         $e8a, $e8b, $e9, $e9a, $e9b, $e9c, $e10, $e10a, $e10b, $e10c, $e11,
                         $e11a, $e11b, $e11c, $e12, $e12a, $e12b, $e12c, $e13, $e13a, $e13b, $e13c,
                         $e14, $e14a, $e14b, $e15, $e15a, $e16, $e16a, $e16b, $e17, $e17a, $e17b,
                         $e18, $e18a, $e18b, $e19, $e19a, $e19b, $e20, $e20a, $e20b, $e21, $e21a, $e21b,
                         $e22, $e22a, $e22b, $e22c, $e23, $e23a, $e23b, $e23c, $e24, $e24a, $e24b, $e24c,
                         $e25, $e25a, $e25b, $e26, $e26a, $e26b, $e26c, $e27, $e27a, $e27b, $e27c,
                         $e28, $e28a, $e28b, $e28c, $e29, $e29a, $e29b, $e29c, $e30, $e30a, $e30b, $e30c,
                         $e31, $e31a, $e32, $e32a, $e32b, $e32c, $e33, $e33a, $e33b, $e34, $e34a, $e34b,
                         $e35, $e35a, $e35b, $e36, $e36a, $e36b, $e36c, $e37, $e37a, $e37b, $e37c, $e38,
                         $e38a, $e38b, $e39, $e39a, $e39b, $e40, $e40a, $e40b, $e41, $e41a, $e41b, $e42,
                         $e42a, $e42b, $e43, $e44, $e44a, $e44b,  $e45, $e45a, $e45b, $e46, $e46a, $e46b,
                         $e47, $e47a, $e47b, $e48, $e48a, $e48b, $e49, $e49a, $e49b, $e50, $e50a, $e50b,
                         $e51, $e51a, $e52, $e52a, $e52b, $e52c, $e52c, $e52d ,$userId)
    {
        $this->_e1 = $e1;
        $this->_e1a = $e1a;
        $this->_e1b = $e1b;
        $this->_e2 = $e2;
        $this->_e2a = $e2a;
        $this->_e2b = $e2b;
        $this->_e3 = $e3;
        $this->_e3a = $e3a;
        $this->_e3b = $e3b;
        $this->_e4 = $e4;
        $this->_e4a = $e4a;
        $this->_e4b = $e4b;
        $this->_e4c = $e4c;
        $this->_e5 = $e5;
        $this->_e5a = $e5a;
        $this->_e5b = $e5b;
        $this->_e6 = $e6;
        $this->_e6a = $e6a;
        $this->_e6b = $e6b;
        $this->_e6c = $e6c;
        $this->_e7 = $e7;
        $this->_e7a = $e7a;
        $this->_e7b = $e7b;
        $this->_e7c = $e7c;
        $this->_e8 = $e8;
        $this->_e8a = $e8a;
        $this->_e8b = $e8b;
        $this->_e9 = $e9;
        $this->_e9a = $e9a;
        $this->_e9b = $e9b;
        $this->_e9c = $e9c;
        $this->_e10 = $e10;
        $this->_e10a = $e10a;
        $this->_e10b = $e10b;
        $this->_e10c = $e10c;
        $this->_e11 = $e11;
        $this->_e11a = $e11a;
        $this->_e11b = $e11b;
        $this->_e11c = $e11c;
        $this->_e12 = $e12;
        $this->_e12a = $e12a;
        $this->_e12b = $e12b;
        $this->_e12c = $e12c;
        $this->_e13 = $e13;
        $this->_e13a = $e13a;
        $this->_e13b = $e13b;
        $this->_e13c = $e13c;
        $this->_e14 = $e14;
        $this->_e14a = $e14a;
        $this->_e14b = $e14b;
        $this->_e15 = $e15;
        $this->_e15a = $e15a;
        $this->_e16 = $e16;
        $this->_e16a = $e16a;
        $this->_e16b = $e16b;
        $this->_e17 = $e17;
        $this->_e17a = $e17a;
        $this->_e17b = $e17b;
        $this->_e18 = $e18;
        $this->_e18a = $e18a;
        $this->_e18b = $e18b;
        $this->_e19 = $e19;
        $this->_e19a = $e19a;
        $this->_e19b = $e19b;
        $this->_e20 = $e20;
        $this->_e20a = $e20a;
        $this->_e20b = $e20b;
        $this->_e21 = $e21;
        $this->_e21a = $e21a;
        $this->_e21b = $e21b;
        $this->_e22 = $e22;
        $this->_e22a = $e22a;
        $this->_e22b = $e22b;
        $this->_e22c = $e22c;
        $this->_e23 = $e23;
        $this->_e23a = $e23a;
        $this->_e23b = $e23b;
        $this->_e23c = $e23c;
        $this->_e24 = $e24;
        $this->_e24a = $e24a;
        $this->_e24b = $e24b;
        $this->_e24c = $e24c;
        $this->_e25 = $e25;
        $this->_e25a = $e25a;
        $this->_e25b = $e25b;
        $this->_e26 = $e26;
        $this->_e26a = $e26a;
        $this->_e26b = $e26b;
        $this->_e26c = $e26c;
        $this->_e27 = $e27;
        $this->_e27a = $e27a;
        $this->_e27b = $e27b;
        $this->_e27c = $e27c;
        $this->_e28 = $e28;
        $this->_e28a = $e28a;
        $this->_e28b = $e28b;
        $this->_e28c = $e28c;
        $this->_e29 = $e29;
        $this->_e29a = $e29a;
        $this->_e29b = $e29b;
        $this->_e29c = $e29c;
        $this->_e30 = $e30;
        $this->_e30a = $e30a;
        $this->_e30b = $e30b;
        $this->_e30c = $e30c;
        $this->_e31 = $e31;
        $this->_e31a = $e31a;
        $this->_e32 = $e32;
        $this->_e32a = $e32a;
        $this->_e32b = $e32b;
        $this->_e32c = $e32c;
        $this->_e33 = $e33;
        $this->_e33a = $e33a;
        $this->_e33b = $e33b;
        $this->_e34 = $e34;
        $this->_e34a = $e34a;
        $this->_e34b = $e34b;
        $this->_e35 = $e35;
        $this->_e35a = $e35a;
        $this->_e35b = $e35b;
        $this->_e36 = $e36;
        $this->_e36a = $e36a;
        $this->_e36b = $e36b;
        $this->_e36c = $e36c;
        $this->_e37 = $e37;
        $this->_e37a = $e37a;
        $this->_e37b = $e37b;
        $this->_e37c = $e37c;
        $this->_e38 = $e38;
        $this->_e38a = $e38a;
        $this->_e38b = $e38b;
        $this->_e39 = $e39;
        $this->_e39a = $e39a;
        $this->_e39b = $e39b;
        $this->_e40 = $e40;
        $this->_e40a = $e40a;
        $this->_e40b = $e40b;
        $this->_e41 = $e41;
        $this->_e41a = $e41a;
        $this->_e41b = $e41b;
        $this->_e42 = $e42;
        $this->_e42a = $e42a;
        $this->_e42b = $e42b;
        $this->_e43 = $e43;
        $this->_e44 = $e44;
        $this->_e44a = $e44a;
        $this->_e44b = $e44b;
        $this->_e45 = $e45;
        $this->_e45a = $e45a;
        $this->_e45b = $e45b;
        $this->_e46 = $e46;
        $this->_e46a = $e46a;
        $this->_e46b = $e46b;
        $this->_e47 = $e47;
        $this->_e47a = $e47a;
        $this->_e47b = $e47b;
        $this->_e48 = $e48;
        $this->_e48a = $e48a;
        $this->_e48b = $e48b;
        $this->_e49 = $e49;
        $this->_e49a = $e49a;
        $this->_e49b = $e49b;
        $this->_e50 =  $e50;
        $this->_e50a = $e50a;
        $this->_e50b = $e50b;
        $this->_e51 = $e51;
        $this->_e51a = $e51a;
        $this->_e52 = $e52;
        $this->_e52a = $e52a;
        $this->_e52b = $e52b;
        $this->_e52c = $e52c;
        $this->_e52d = $e52d;


        $this->_userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getAnswerID()
    {
        return $this->_answerID;
    }

    /**
     * @return mixed
     */
    public function getE1()
    {
        return $this->_e1;
    }

    /**
     * @return mixed
     */
    public function getE1a()
    {
        return $this->_E1a;
    }

    /**
     * @return mixed
     */
    public function getE1b()
    {
        return $this->_e1b;
    }

    /**
     * @return mixed
     */
    public function getE2()
    {
        return $this->_E2;
    }

    /**
     * @return mixed
     */
    public function getE3()
    {
        return $this->_e3;
    }

    /**
     * @return mixed
     */
    public function getE4()
    {
        return $this->_e4;
    }

    /**
     * @return mixed
     */
    public function getE5()
    {
        return $this->_e5;
    }

    /**
     * @return mixed
     */
    public function getE6()
    {
        return $this->_e6;
    }

    /**
     * @return mixed
     */
    public function getE7()
    {
        return $this->_e7;
    }

    /**
     * @return mixed
     */
    public function getE8()
    {
        return $this->_e8;
    }

    /**
     * @return mixed
     */
    public function getE9()
    {
        return $this->_e9;
    }

    /**
     * @return mixed
     */
    public function getE10()
    {
        return $this->_e10;
    }

    /**
     * @return mixed
     */
    public function getE11()
    {
        return $this->_e11;
    }

    /**
     * @return mixed
     */
    public function getE11a()
    {
        return $this->_e11a;
    }

    /**
     * @return mixed
     */
    public function getE11b()
    {
        return $this->_e11b;
    }

    /**
     * @return mixed
     */
    public function getE12()
    {
        return $this->_e12;
    }

    /**
     * @return mixed
     */
    public function getE12a()
    {
        return $this->_e12a;
    }

    /**
     * @return mixed
     */
    public function getE12b()
    {
        return $this->_e12b;
    }

    /**
     * @return mixed
     */
    public function getE12c()
    {
        return $this->_e12c;
    }

    /**
     * @return mixed
     */
    public function getE13()
    {
        return $this->_e13;
    }

    /**
     * @return mixed
     */
    public function getE13a()
    {
        return $this->_e13a;
    }

    /**
     * @return mixed
     */
    public function getE13b()
    {
        return $this->_e13b;
    }

    /**
     * @return mixed
     */
    public function getE13c()
    {
        return $this->_e13c;
    }

    /**
     * @return mixed
     */
    public function getE14()
    {
        return $this->_e14;
    }

    /**
     * @return mixed
     */
    public function getE14a()
    {
        return $this->_e14a;
    }

    /**
     * @return mixed
     */
    public function getE14b()
    {
        return $this->_e14b;
    }

    /**
     * @return mixed
     */
    public function getE15()
    {
        return $this->_e15;
    }

    /**
     * @return mixed
     */
    public function getE15a()
    {
        return $this->_e15a;
    }

    /**
     * @return mixed
     */
    public function getE15b()
    {
        return $this->_e15b;
    }

    /**
     * @return mixed
     */
    public function getE16()
    {
        return $this->_e16;
    }

    /**
     * @return mixed
     */
    public function getE16a()
    {
        return $this->_e16a;
    }

    /**
     * @return mixed
     */
    public function getE16b()
    {
        return $this->_e16b;
    }

    /**
     * @return mixed
     */
    public function getE17()
    {
        return $this->_e17;
    }

    /**
     * @return mixed
     */
    public function getE17a()
    {
        return $this->_e17a;
    }

    /**
     * @return mixed
     */
    public function getE17b()
    {
        return $this->_e17b;
    }

    /**
     * @return mixed
     */
    public function getE18()
    {
        return $this->_e18;
    }

    /**
     * @return mixed
     */
    public function getE18a()
    {
        return $this->_e18a;
    }

    /**
     * @return mixed
     */
    public function getE18b()
    {
        return $this->_e18b;
    }


    /**
     * @return mixed
     */
    public function getE19()
    {
        return $this->_e19;
    }

    /**
     * @return mixed
     */
    public function getE19a()
    {
        return $this->_e19a;
    }

    /**
     * @return mixed
     */
    public function getE19b()
    {
        return $this->_e19b;
    }

    /**
     * @return mixed
     */
    public function getE20()
    {
        return $this->_e20;
    }

    /**
     * @return mixed
     */
    public function getE20a()
    {
        return $this->_e20a;
    }

    /**
     * @return mixed
     */
    public function getE20b()
    {
        return $this->_e20b;
    }

    /**
     * @return mixed
     */
    public function getE21()
    {
        return $this->_e21;
    }

    /**
     * @return mixed
     */
    public function getE21a()
    {
        return $this->_e21a;
    }

    /**
     * @return mixed
     */
    public function getE21b()
    {
        return $this->_e21b;
    }

    /**
     * @return mixed
     */
    public function getE22()
    {
        return $this->_e22;
    }

    /**
     * @return mixed
     */
    public function getE22a()
    {
        return $this->_e22a;
    }

    /**
     * @return mixed
     */
    public function getE22b()
    {
        return $this->_e22b;
    }

    /**
     * @return mixed
     */
    public function getE22c()
    {
        return $this->_e22c;
    }

    /**
     * @return mixed
     */
    public function getE23()
    {
        return $this->_e23;
    }

    /**
     * @return mixed
     */
    public function getE23a()
    {
        return $this->_e23a;
    }

    /**
     * @return mixed
     */
    public function getE23b()
    {
        return $this->_e23b;
    }

    /**
     * @return mixed
     */
    public function getE23c()
    {
        return $this->_e23c;
    }

    /**
     * @return mixed
     */
    public function getE24()
    {
        return $this->_e24;
    }

    /**
     * @return mixed
     */
    public function getE24a()
    {
        return $this->_e24a;
    }

    /**
     * @return mixed
     */
    public function getE24b()
    {
        return $this->_e24b;
    }

    /**
     * @return mixed
     */
    public function getE24c()
    {
        return $this->_e24c;
    }

    /**
     * @return mixed
     */
    public function getE25()
    {
        return $this->_e25;
    }

    /**
     * @return mixed
     */
    public function getE25a()
    {
        return $this->_e25a;
    }

    /**
     * @return mixed
     */
    public function getE25b()
    {
        return $this->_e25b;
    }

    /**
     * @return mixed
     */
    public function getE26()
    {
        return $this->_e26;
    }

    /**
     * @return mixed
     */
    public function getE26a()
    {
        return $this->_e26a;
    }

    /**
     * @return mixed
     */
    public function getE26b()
    {
        return $this->_e26b;
    }

    /**
     * @return mixed
     */
    public function getE26c()
    {
        return $this->_e26c;
    }

    /**
     * @return mixed
     */
    public function getE27()
    {
        return $this->_e27;
    }

    /**
     * @return mixed
     */
    public function getE27a()
    {
        return $this->_e27a;
    }

    /**
     * @return mixed
     */
    public function getE27b()
    {
        return $this->_e27b;
    }

    /**
     * @return mixed
     */
    public function getE27c()
    {
        return $this->_e27c;
    }

    /**
     * @return mixed
     */
    public function getE28()
    {
        return $this->_e28;
    }

    /**
     * @return mixed
     */
    public function getE28a()
    {
        return $this->_e28a;
    }

    /**
     * @return mixed
     */
    public function getE28b()
    {
        return $this->_e28b;
    }

    /**
     * @return mixed
     */
    public function getE28c()
    {
        return $this->_e28c;
    }

    /**
     * @return mixed
     */
    public function getE29()
    {
        return $this->_e29;
    }

    /**
     * @return mixed
     */
    public function getE29a()
    {
        return $this->_e29a;
    }

    /**
     * @return mixed
     */
    public function getE29b()
    {
        return $this->_e29b;
    }

    /**
     * @return mixed
     */
    public function getE29c()
    {
        return $this->_e29c;
    }

    /**
     * @return mixed
     */
    public function getE30()
    {
        return $this->_e30;
    }

    /**
     * @return mixed
     */
    public function getE30a()
    {
        return $this->_e30a;
    }

    /**
     * @return mixed
     */
    public function getE30b()
    {
        return $this->_e30b;
    }

    /**
     * @return mixed
     */
    public function getE30c()
    {
        return $this->_e30c;
    }

    /**
     * @return mixed
     */
    public function getE31()
    {
        return $this->_e31;
    }

    /**
     * @return mixed
     */
    public function getE31a()
    {
        return $this->_e31a;
    }

    /**
     * @return mixed
     */
    public function getE31b()
    {
        return $this->_e31b;
    }

    /**
     * @return mixed
     */
    public function getE31c()
    {
        return $this->_e31c;
    }

    /**
     * @return mixed
     */
    public function getE32()
    {
        return $this->_e32;
    }

    /**
     * @return mixed
     */
    public function getE32a()
    {
        return $this->_e32a;
    }

    /**
     * @return mixed
     */
    public function getE32b()
    {
        return $this->_e32b;
    }

    /**
     * @return mixed
     */
    public function getE32c()
    {
        return $this->_e32c;
    }

    /**
     * @return mixed
     */
    public function getE33()
    {
        return $this->_e33;
    }

    /**
     * @return mixed
     */
    public function getE33a()
    {
        return $this->_e33a;
    }

    /**
     * @return mixed
     */
    public function getE33b()
    {
        return $this->_e33b;
    }

    /**
     * @return mixed
     */
    public function getE34()
    {
        return $this->_e34;
    }

    /**
     * @return mixed
     */
    public function getE34a()
    {
        return $this->_e34a;
    }

    /**
     * @return mixed
     */
    public function getE35()
    {
        return $this->_e35;
    }

    /**
     * @return mixed
     */
    public function getE35a()
    {
        return $this->_e35a;
    }

    /**
     * @return mixed
     */
    public function getE35b()
    {
        return $this->_e35b;
    }

    /**
     * @return mixed
     */
    public function getE36()
    {
        return $this->_e36;
    }

    /**
     * @return mixed
     */
    public function getE36a()
    {
        return $this->_e36a;
    }

    /**
     * @return mixed
     */
    public function getE36b()
    {
        return $this->_e36b;
    }

    /**
     * @return mixed
     */
    public function getE36c()
    {
        return $this->_e36c;
    }

    /**
     * @return mixed
     */
    public function getE37()
    {
        return $this->_e37;
    }

    /**
     * @return mixed
     */
    public function getE37a()
    {
        return $this->_e37a;
    }

    /**
     * @return mixed
     */
    public function getE37b()
    {
        return $this->_e37b;
    }

    /**
     * @return mixed
     */
    public function getE37c()
    {
        return $this->_e37c;
    }

    /**
     * @return mixed
     */
    public function getE38()
    {
        return $this->_e38;
    }

    /**
     * @return mixed
     */
    public function getE38a()
    {
        return $this->_e38a;
    }

    /**
     * @return mixed
     */
    public function getE38b()
    {
        return $this->_e38b;
    }

    /**
     * @return mixed
     */
    public function getE39()
    {
        return $this->_e39;
    }

    /**
     * @return mixed
     */
    public function getE39a()
    {
        return $this->_e39a;
    }

    /**
     * @return mixed
     */
    public function getE39b()
    {
        return $this->_e39b;
    }

    /**
     * @return mixed
     */
    public function getE40()
    {
        return $this->_e40;
    }

    /**
     * @return mixed
     */
    public function getE40a()
    {
        return $this->_e40a;
    }

    /**
     * @return mixed
     */
    public function getE40b()
    {
        return $this->_e40b;
    }

    /**
     * @return mixed
     */
    public function getE41()
    {
        return $this->_e41;
    }

    /**
     * @return mixed
     */
    public function getE41a()
    {
        return $this->_e41a;
    }

    /**
     * @return mixed
     */
    public function getE41b()
    {
        return $this->_e41b;
    }

    /**
     * @return mixed
     */
    public function getE42()
    {
        return $this->_e42;
    }

    /**
     * @return mixed
     */
    public function getE42a()
    {
        return $this->_e42a;
    }

    /**
     * @return mixed
     */
    public function getE42b()
    {
        return $this->_e42b;
    }

    /**
     * @return mixed
     */
    public function getE43()
    {
        return $this->_e43;
    }

    /**
     * @return mixed
     */
    public function getE44()
    {
        return $this->_e44;
    }

    /**
     * @return mixed
     */
    public function getE44a()
    {
        return $this->_e44a;
    }

    /**
     * @return mixed
     */
    public function getE44b()
    {
        return $this->_e44b;
    }

    /**
     * @return mixed
     */
    public function getE45()
    {
        return $this->_e45;
    }

    /**
     * @return mixed
     */
    public function getE45a()
    {
        return $this->_e45a;
    }

    /**
     * @return mixed
     */
    public function getE45b()
    {
        return $this->_e45b;
    }

    /**
     * @return mixed
     */
    public function getE46()
    {
        return $this->_e46;
    }

    /**
     * @return mixed
     */
    public function getE46a()
    {
        return $this->_e46a;
    }

    /**
     * @return mixed
     */
    public function getE46b()
    {
        return $this->_e46b;
    }

    /**
     * @return mixed
     */
    public function getE47()
    {
        return $this->_e47;
    }

    /**
     * @return mixed
     */
    public function getE47a()
    {
        return $this->_e47a;
    }

    /**
     * @return mixed
     */
    public function getE47b()
    {
        return $this->_e47b;
    }

    /**
     * @return mixed
     */
    public function getE48()
    {
        return $this->_e48;
    }

    /**
     * @return mixed
     */
    public function getE48a()
    {
        return $this->_e48a;
    }

    /**
     * @return mixed
     */
    public function getE48b()
    {
        return $this->_e48b;
    }

    /**
     * @return mixed
     */
    public function getE49()
    {
        return $this->_e49;
    }

    /**
     * @return mixed
     */
    public function getE49a()
    {
        return $this->_e49a;
    }

    /**
     * @return mixed
     */
    public function getE49b()
    {
        return $this->_e49b;
    }

    /**
     * @return mixed
     */
    public function getE50()
    {
        return $this->_e50;
    }

    /**
     * @return mixed
     */
    public function getE50a()
    {
        return $this->_e50a;
    }

    /**
     * @return mixed
     */
    public function getE50b()
    {
        return $this->_e50b;
    }

    /**
     * @return mixed
     */
    public function getE51()
    {
        return $this->_e51;
    }

    /**
     * @return mixed
     */
    public function getE51a()
    {
        return $this->_e51a;
    }

    /**
     * @return mixed
     */
    public function getE51b()
    {
        return $this->_e51b;
    }

    /**
     * @return mixed
     */
    public function getE51c()
    {
        return $this->_e51c;
    }

    /**
     * @return mixed
     */
    public function getE51d()
    {
        return $this->_e51d;
    }




    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}