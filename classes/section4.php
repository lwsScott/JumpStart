<?php

/*
 * Analysis class for playbook website
 * stores SWOT information
 * 11/6/20
 * @author David Haas
 * @version 1.0
 */
class Section4
{
    //Declare instance variables
    private $_answerID;
    private $_d1;
    private $_d2;
    private $_d3;
    private $_d4;
    private $_d5;
    private $_d5t;
    private $_d6;
    private $_d6t;
    private $_d7;
    private $_d8;
    private $_d9;
    private $_d10;
    private $_d11;
    private $_d12;
    private $_d13;
    private $_d14;
    private $_d15;
    private $_d16;
    private $_d17;
    private $_d18;
    private $_d19;
    private $_d20;
    private $_d21;
    private $_d22;
    private $_d23;
    private $_d24;
    private $_d25;
    private $_d26;
    private $_d27;
    private $_d28;
    private $_d29a;
    private $_d29b;
    private $_d29c;
    private $_d29d;
    private $_userId;

    // constructor

    function __construct($d1, $d2, $d3, $d4, $d5, $d5t, $d6, $d6t, $d7, $d8, $d9,
                         $d10, $d11, $d12, $d13, $d14, $d15, $d16, $d17, $d18, $d19, $d20, $d21,
                         $d22, $d23, $d24, $d25, $d26, $d27, $d28, $d29a, $d29b, $d29c, $d29d, $userId)
    {
        $this->_d1 = $d1;
        $this->_d2 = $d2;
        $this->_d3 = $d3;
        $this->_d4 = $d4;
        $this->_d5 = $d5;
        $this->_d5t = $d5t;
        $this->_d6 = $d6;
        $this->_d6t = $d6t;
        $this->_d7 = $d7;
        $this->_d8 = $d8;
        $this->_d9 = $d9;
        $this->_d10 = $d10;
        $this->_d11 = $d11;
        $this->_d12 = $d12;
        $this->_d13 = $d13;
        $this->_d14 = $d14;
        $this->_d15 = $d15;
        $this->_d16 = $d16;
        $this->_d17 = $d17;
        $this->_d18 = $d18;
        $this->_d19 = $d19;
        $this->_d20 = $d20;
        $this->_d21 = $d21;
        $this->_d22 = $d22;
        $this->_d23 = $d23;
        $this->_d24 = $d24;
        $this->_d25 = $d25;
        $this->_d26 = $d26;
        $this->_d25 = $d27;
        $this->_d26 = $d28;
        $this->_d29a = $d29a;
        $this->_d29b = $d29b;
        $this->_d29c = $d29c;
        $this->_d29d = $d29d;
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
    public function getD1()
    {
        return $this->_d1;
    }

    /**
     * @return mixed
     */
    public function getD2()
    {
        return $this->_d2;
    }

    /**
     * @return mixed
     */
    public function getD3()
    {
        return $this->_d3;
    }

    /**
     * @return mixed
     */
    public function getD4()
    {
        return $this->_d4;
    }

    /**
     * @return mixed
     */
    public function getD5()
    {
        return $this->_d5;
    }

    /**
     * @return mixed
     */
    public function getD5t()
    {
        return $this->_d5t;
    }

    /**
     * @return mixed
     */
    public function getD6()
    {
        return $this->_d6;
    }

    /**
     * @return mixed
     */
    public function getD6t()
    {
        return $this->_d6t;
    }

    /**
     * @return mixed
     */
    public function getD7()
    {
        return $this->_d7;
    }

    /**
     * @return mixed
     */
    public function getD8()
    {
        return $this->_d8;
    }

    /**
     * @return mixed
     */
    public function getD9()
    {
        return $this->_d9;
    }

    /**
     * @return mixed
     */
    public function getD10()
    {
        return $this->_d10;
    }

    /**
     * @return mixed
     */
    public function getD11()
    {
        return $this->_d11;
    }

    /**
     * @return mixed
     */
    public function getD12()
    {
        return $this->_d12;
    }

    /**
     * @return mixed
     */
    public function getD13()
    {
        return $this->_d13;
    }

    /**
     * @return mixed
     */
    public function getD14()
    {
        return $this->_d14;
    }

    /**
     * @return mixed
     */
    public function getD15()
    {
        return $this->_d15;
    }

    /**
     * @return mixed
     */
    public function getD16()
    {
        return $this->_d16;
    }

    /**
     * @return mixed
     */
    public function getD17()
    {
        return $this->_d17;
    }

    /**
     * @return mixed
     */
    public function getD18()
    {
        return $this->_d18;
    }

    /**
     * @return mixed
     */
    public function getD19()
    {
        return $this->_d19;
    }

    /**
     * @return mixed
     */
    public function getD20()
    {
        return $this->_d20;
    }

    /**
     * @return mixed
     */
    public function getD21()
    {
        return $this->_d21;
    }

    /**
     * @return mixed
     */
    public function getD22()
    {
        return $this->_d22;
    }

    /**
     * @return mixed
     */
    public function getD23()
    {
        return $this->_d23;
    }

    /**
     * @return mixed
     */
    public function getD24()
    {
        return $this->_d24;
    }

    /**
     * @return mixed
     */
    public function getD25()
    {
        return $this->_d25;
    }

    /**
     * @return mixed
     */
    public function getD26()
    {
        return $this->_d26;
    }

    /**
     * @return mixed
     */
    public function getD27()
    {
        return $this->_d27;
    }

    /**
     * @return mixed
     */
    public function getD28()
    {
        return $this->_d28;
    }

    /**
     * @return mixed
     */
    public function getD29a()
    {
        return $this->_d29a;
    }

    /**
     * @return mixed
     */
    public function getD29b()
    {
        return $this->_d29b;
    }

    /**
     * @return mixed
     */
    public function getD29c()
    {
        return $this->_d29c;
    }

    /**
     * @return mixed
     */
    public function getD29d()
    {
        return $this->_d29d;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}