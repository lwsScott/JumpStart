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
    private $_c1a;
    private $_c1b;
    private $_c2;
    private $_c2a;
    private $_c3;
    private $_c3a;
    private $_c4;
    private $_c4a;
    private $_c5;
    private $_c6;
    private $_c6a;
    private $_c7;
    private $_c7a;
    private $_c8;
    private $_c8a;
    private $_c9;
    private $_c9a;
    private $_c10a;
    private $_c10b;
    private $_c10c;
    private $_c10d;
    private $_userId;

    // constructor

    function __construct($c1, $c1a, $c1b, $c2, $c2a, $c3, $c3a, $c4, $c4a, $c5, $c6, $c6a, $c7, $c7a,
                         $c8, $c8a, $c9, $c9a, $c10a, $c10b, $c10c, $c10d, $userId)
    {
        $this->_c1 = $c1;
        $this->_c1a = $c1a;
        $this->_c1b = $c1b;
        $this->_c2 = $c2;
        $this->_c2a = $c2a;
        $this->_c3 = $c3;
        $this->_c3a = $c3a;
        $this->_c4 = $c4;
        $this->_c4a = $c4a;
        $this->_c5 = $c5;
        $this->_c6 = $c6;
        $this->_c6a = $c6a;
        $this->_c7 = $c7;
        $this->_c7a = $c7a;
        $this->_c8 = $c8;
        $this->_c8a = $c8a;
        $this->_c9 = $c9;
        $this->_c9a = $c9a;
        $this->_c10a = $c10a;
        $this->_c10b = $c10b;
        $this->_c10c = $c10c;
        $this->_c10d = $c10d;
        $this->_userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getC1a()
    {
        return $this->_c1a;
    }

    /**
     * @return mixed
     */
    public function getC1b()
    {
        return $this->_c1b;
    }

    /**
     * @return mixed
     */
    public function getC2a()
    {
        return $this->_c2a;
    }

    /**
     * @return mixed
     */
    public function getC3a()
    {
        return $this->_c3a;
    }

    /**
     * @return mixed
     */
    public function getC4a()
    {
        return $this->_c4a;
    }

    /**
     * @return mixed
     */
    public function getC6a()
    {
        return $this->_c6a;
    }

    /**
     * @return mixed
     */
    public function getC7a()
    {
        return $this->_c7a;
    }

    /**
     * @return mixed
     */
    public function getC8a()
    {
        return $this->_c8a;
    }

    /**
     * @return mixed
     */
    public function getC9a()
    {
        return $this->_c9a;
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
    public function getC1()
    {
        return $this->_c1;
    }

    /**
     * @return mixed
     */
    public function getC2()
    {
        return $this->_c2;
    }

    /**
     * @return mixed
     */
    public function getC3()
    {
        return $this->_c3;
    }

    /**
     * @return mixed
     */
    public function getC4()
    {
        return $this->_c4;
    }

    /**
     * @return mixed
     */
    public function getC5()
    {
        return $this->_c5;
    }

    /**
     * @return mixed
     */
    public function getC6()
    {
        return $this->_c6;
    }

    /**
     * @return mixed
     */
    public function getC7()
    {
        return $this->_c7;
    }

    /**
     * @return mixed
     */
    public function getC8()
    {
        return $this->_c8;
    }

    /**
     * @return mixed
     */
    public function getC9()
    {
        return $this->_c9;
    }

    /**
     * @return mixed
     */
    public function getC10a()
    {
        return $this->_c10a;
    }

    /**
     * @return mixed
     */
    public function getC10b()
    {
        return $this->_c10b;
    }

    /**
     * @return mixed
     */
    public function getC10c()
    {
        return $this->_c10c;
    }

    /**
     * @return mixed
     */
    public function getC10d()
    {
        return $this->_c10d;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}