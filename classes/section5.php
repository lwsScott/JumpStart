<?php

/*
 * Analysis class for playbook website
 * stores SWOT information
 * 11/7/20
 * @author Roldan Barbante
 * @version 1.0
 */


class Section5
{
    //Declare instance variables
    private $_answerID;
    private $_e1;
    private $_e2;
    private $_e3;
    private $_e4;
    private $_e5;
    private $_e6;
    private $_e7;
    private $_e8;
    private $_e9;
    private $_e10;
    private $_e10a;
    private $_e11;
    private $_e12;
    private $_e13;
    private $_e14;
    private $_e15;
    private $_e16;
    private $_e17;
    private $_e18;
    private $_e19;
    private $_e20;
    private $_e21;
    private $_e22;
    private $_e23;
    private $_e24;
    private $_e25;
    private $_e26;
    private $_e27;
    private $_e28;
    private $_e29;
    private $_e30;
    private $_e31;
    private $_e32;
    private $_e33;
    private $_e34;
    private $_e35;
    private $_e36;
    private $_e37;
    private $_e38;
    private $_e39;
    private $_e40;
    private $_e41;
    private $_e42;
    private $_e43;
    private $_e44;
    private $_e45;
    private $_e46;
    private $_e47;
    private $_e48;
    private $_e49;
    private $_e50;
    private $_e51;
    private $_e52a;
    private $_e52b;
    private $_e52c;
    private $_e52d;






    private $_userId;

    // constructor

    function __construct($e1, $e2, $e3, $e3a, $e4, $e5, $e6, $e7, $e8, $e9, $e10, $e10a,$e11,
                         $e12, $e13, $e14, $e15, $e16, $e17, $e18, $e19, $e20, $e21, $e22,
                         $e23, $e24, $e25, $e26, $e27, $e28, $e29, $e30, $e31, $e32, $e33, $e34,
                         $e35, $e36, $e37, $e38, $e39, $e40, $e41, $e42, $e43, $e44, $e45, $e46,
                         $e47, $e48, $e49, $e50, $e51, $e52a, $e52b, $e52c, $e52c, $e52d ,$userId)
    {
        $this->_e1 = $e1;
        $this->_e2 = $e2;
        $this->_e3 = $e3;
        $this->_e4 = $e4;
        $this->_e5 = $e5;
        $this->_e6 = $e6;
        $this->_e7 = $e7;
        $this->_e8 = $e8;
        $this->_e9 = $e9;
        $this->_e10 = $e10;
        $this->_e10a = $e10a;
        $this->_e11 = $e11;
        $this->_e12 = $e12;
        $this->_e13 = $e13;
        $this->_e14 = $e14;
        $this->_e15 = $e15;
        $this->_e16 = $e16;
        $this->_e17 = $e17;
        $this->_e18 = $e18;
        $this->_e19 = $e19;
        $this->_e20 = $e20;
        $this->_e21 = $e21;
        $this->_e22 = $e22;
        $this->_e23 = $e23;
        $this->_e24 = $e24;
        $this->_e25 = $e25;
        $this->_e26 = $e26;
        $this->_e27 = $e27;
        $this->_e28 = $e28;
        $this->_e29 = $e29;
        $this->_e30 = $e30;
        $this->_e31 = $e31;
        $this->_e32 = $e32;
        $this->_e33 = $e33;
        $this->_e34 = $e34;
        $this->_e35 = $e35;
        $this->_e36 = $e36;
        $this->_e37 = $e37;
        $this->_e38 = $e38;
        $this->_e39 = $e39;
        $this->_e40 = $e40;
        $this->_e41 = $e41;
        $this->_e42 = $e42;
        $this->_e43 = $e43;
        $this->_e44 = $e44;
        $this->_e45 = $e45;
        $this->_e46 = $e46;
        $this->_e47 = $e47;
        $this->_e48 = $e48;
        $this->_e49 = $e49;
        $this->_e50 =  $e50;
        $this->_e51 = $e51;
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
    public function getE2()
    {
        return $this->_e2;
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
    public function getE10a()
    {
        return $this->_e10a;
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
    public function getE12()
    {
        return $this->_e12;
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
    public function getE14()
    {
        return $this->_e14;
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
    public function getE16()
    {
        return $this->_e16;
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
    public function getE18()
    {
        return $this->_e18;
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
    public function getE20()
    {
        return $this->_e20;
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
    public function getE22()
    {
        return $this->_e22;
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
    public function getE24()
    {
        return $this->_e24;
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
    public function getE26()
    {
        return $this->_e26;
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
    public function getE28()
    {
        return $this->_e28;
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
    public function getE30()
    {
        return $this->_e30;
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
    public function getE32()
    {
        return $this->_e32;
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
    public function getE34()
    {
        return $this->_e34;
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
    public function getE36()
    {
        return $this->_e36;
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
    public function getE38()
    {
        return $this->_e38;
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
    public function getE40()
    {
        return $this->_e40;
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
    public function getE42()
    {
        return $this->_e42;
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
    public function getE45()
    {
        return $this->_e45;
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
    public function getE47()
    {
        return $this->_e47;
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
    public function getE49()
    {
        return $this->_e49;
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
    public function getE51()
    {
        return $this->_e51;
    }

    /**
     * @return mixed
     */
    public function getE52a()
    {
        return $this->_e52a;
    }

    /**
     * @return mixed
     */
    public function getE52b()
    {
        return $this->_e52b;
    }

    /**
     * @return mixed
     */
    public function getE52c()
    {
        return $this->_e52c;
    }

    /**
     * @return mixed
     */
    public function getE52d()
    {
        return $this->_e52d;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}