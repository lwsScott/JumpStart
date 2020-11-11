<?php

/*
 * Analysis class for playbook website
 * stores SWOT information
 * 11/6/20
 * @author David Haas
 * @version 1.0
 */
class Section3
{
    //Declare instance variables
    private $_answerID;
    private $_c1;
    private $_c1t;
    private $_c2;
    private $_c2t;
    private $_c3;
    private $_c3t;
    private $_c4;
    private $_c4t;
    private $_c5;
    private $_c6;
    private $_c6t;
    private $_c7;
    private $_c7t;
    private $_c8;
    private $_c8t;
    private $_c9;
    private $_c9t;
    private $_c10a;
    private $_c10b;
    private $_c10c;
    private $_c10d;
    private $_userId;

    // constructor

    function __construct($c1, $c1t, $c2, $c2t, $c3, $c3t, $c4, $c4t, $c5, $c6, $c6t, $c7, $c7t,
                         $c8, $c8t, $c9, $c9t, $c10a, $c10b, $c10c, $c10d, $userId)
    {
        $this->_c1 = $c1;
        $this->_c1t = $c1t;
        $this->_c2 = $c2;
        $this->_c2t = $c2t;
        $this->_c3 = $c3;
        $this->_c3t = $c3t;
        $this->_c4 = $c4;
        $this->_c4t = $c4t;
        $this->_c5 = $c5;
        $this->_c6 = $c6;
        $this->_c6t = $c6t;
        $this->_c7 = $c7;
        $this->_c7t = $c7t;
        $this->_c8 = $c8;
        $this->_c8t = $c8t;
        $this->_c9 = $c9;
        $this->_c9t = $c9t;
        $this->_c10a = $c10a;
        $this->_c10b = $c10b;
        $this->_c10c = $c10c;
        $this->_c10d = $c10d;
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
     * @param mixed $answerID
     */
    public function setAnswerID($answerID)
    {
        $this->_answerID = $answerID;
    }

    /**
     * @return mixed
     */
    public function getC1()
    {
        return $this->_c1;
    }

    /**
     * @param mixed $c1
     */
    public function setC1($c1)
    {
        $this->_c1 = $c1;
    }

    /**
     * @return mixed
     */
    public function getC1t()
    {
        return $this->_c1t;
    }

    /**
     * @param mixed $c1t
     */
    public function setC1t($c1t)
    {
        $this->_c1t = $c1t;
    }

    /**
     * @return mixed
     */
    public function getC2()
    {
        return $this->_c2;
    }

    /**
     * @param mixed $c2
     */
    public function setC2($c2)
    {
        $this->_c2 = $c2;
    }

    /**
     * @return mixed
     */
    public function getC2t()
    {
        return $this->_c2t;
    }

    /**
     * @param mixed $c2t
     */
    public function setC2t($c2t)
    {
        $this->_c2t = $c2t;
    }

    /**
     * @return mixed
     */
    public function getC3()
    {
        return $this->_c3;
    }

    /**
     * @param mixed $c3
     */
    public function setC3($c3)
    {
        $this->_c3 = $c3;
    }

    /**
     * @return mixed
     */
    public function getC3t()
    {
        return $this->_c3t;
    }

    /**
     * @param mixed $c3t
     */
    public function setC3t($c3t)
    {
        $this->_c3t = $c3t;
    }

    /**
     * @return mixed
     */
    public function getC4()
    {
        return $this->_c4;
    }

    /**
     * @param mixed $c4
     */
    public function setC4($c4)
    {
        $this->_c4 = $c4;
    }

    /**
     * @return mixed
     */
    public function getC4t()
    {
        return $this->_c4t;
    }

    /**
     * @param mixed $c4t
     */
    public function setC4t($c4t)
    {
        $this->_c4t = $c4t;
    }

    /**
     * @return mixed
     */
    public function getC5()
    {
        return $this->_c5;
    }

    /**
     * @param mixed $c5
     */
    public function setC5($c5)
    {
        $this->_c5 = $c5;
    }

    /**
     * @return mixed
     */
    public function getC6()
    {
        return $this->_c6;
    }

    /**
     * @param mixed $c6
     */
    public function setC6($c6)
    {
        $this->_c6 = $c6;
    }

    /**
     * @return mixed
     */
    public function getC6t()
    {
        return $this->_c6t;
    }

    /**
     * @param mixed $c6t
     */
    public function setC6t($c6t)
    {
        $this->_c6t = $c6t;
    }

    /**
     * @return mixed
     */
    public function getC7()
    {
        return $this->_c7;
    }

    /**
     * @param mixed $c7
     */
    public function setC7($c7)
    {
        $this->_c7 = $c7;
    }

    /**
     * @return mixed
     */
    public function getC7t()
    {
        return $this->_c7t;
    }

    /**
     * @param mixed $c7t
     */
    public function setC7t($c7t)
    {
        $this->_c7t = $c7t;
    }

    /**
     * @return mixed
     */
    public function getC8()
    {
        return $this->_c8;
    }

    /**
     * @param mixed $c8
     */
    public function setC8($c8)
    {
        $this->_c8 = $c8;
    }

    /**
     * @return mixed
     */
    public function getC8t()
    {
        return $this->_c8t;
    }

    /**
     * @param mixed $c8t
     */
    public function setC8t($c8t)
    {
        $this->_c8t = $c8t;
    }

    /**
     * @return mixed
     */
    public function getC9()
    {
        return $this->_c9;
    }

    /**
     * @param mixed $c9
     */
    public function setC9($c9)
    {
        $this->_c9 = $c9;
    }

    /**
     * @return mixed
     */
    public function getC9t()
    {
        return $this->_c9t;
    }

    /**
     * @param mixed $c9t
     */
    public function setC9t($c9t)
    {
        $this->_c9t = $c9t;
    }

    /**
     * @return mixed
     */
    public function getC10a()
    {
        return $this->_c10a;
    }

    /**
     * @param mixed $c10a
     */
    public function setC10a($c10a)
    {
        $this->_c10a = $c10a;
    }

    /**
     * @return mixed
     */
    public function getC10b()
    {
        return $this->_c10b;
    }

    /**
     * @param mixed $c10b
     */
    public function setC10b($c10b)
    {
        $this->_c10b = $c10b;
    }

    /**
     * @return mixed
     */
    public function getC10c()
    {
        return $this->_c10c;
    }

    /**
     * @param mixed $c10c
     */
    public function setC10c($c10c)
    {
        $this->_c10c = $c10c;
    }

    /**
     * @return mixed
     */
    public function getC10d()
    {
        return $this->_c10d;
    }

    /**
     * @param mixed $c10d
     */
    public function setC10d($c10d)
    {
        $this->_c10d = $c10d;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->_userId = $userId;
    }

}