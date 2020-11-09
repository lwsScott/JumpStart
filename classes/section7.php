<?php

/*
 * Analysis class for playbook website
 * stores SWOT information
 * 11/8/20
 * @author Roldan Barbante
 * @version 1.0
 */
class Section7
{
    //Declare instance variables
    private $_answerID;
    private $_g1;
    private $_g2;
    private $_g3;
    private $_g4;
    private $_g5;
    private $_g6;
    private $_g7;
    private $_g8;
    private $_g9;
    private $_g9b;
    private $_g10;
    private $_g11;
    private $_g12;
    private $_g13;




    private $_userId;

    // constructor

    function __construct($g1, $g2, $g3, $g4, $g5, $g6, $g7, $g8, $g9, $g10, $g11, $g12, $g13, $userId)
    {
        $this->_g1 = $g1;
        $this->_g2 = $g2;
        $this->_g3 = $g3;
        $this->_g4 = $g4;
        $this->_g5 = $g5;
        $this->_g6 = $g6;
        $this->_g7 = $g7;
        $this->_g8 = $g8;
        $this->_g9 = $g9;
        $this->_g9a =g9a;
        $this->_g10 = $g10;
        $this->_g11 = $g11;
        $this->_g12 = $g12;
        $this->_g13 = $g13;

        $this->_userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getG9a()
    {
        return $this->_g9a;
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
    public function getG1()
    {
        return $this->_g1;
    }

    /**
     * @return mixed
     */
    public function getG2()
    {
        return $this->_g2;
    }

    /**
     * @return mixed
     */
    public function getG3()
    {
        return $this->_g3;
    }

    /**
     * @return mixed
     */
    public function getG4()
    {
        return $this->_g4;
    }

    /**
     * @return mixed
     */
    public function getG5()
    {
        return $this->_g5;
    }

    /**
     * @return mixed
     */
    public function getG6()
    {
        return $this->_g6;
    }

    /**
     * @return mixed
     */
    public function getG7()
    {
        return $this->_g7;
    }

    /**
     * @return mixed
     */
    public function getG8()
    {
        return $this->_g8;
    }

    /**
     * @return mixed
     */
    public function getG9()
    {
        return $this->_g9;
    }

    /**
     * @return mixed
     */
    public function getG9b()
    {
        return $this->_g9b;
    }

    /**
     * @return mixed
     */
    public function getG10()
    {
        return $this->_g10;
    }

    /**
     * @return mixed
     */
    public function getG11()
    {
        return $this->_g11;
    }

    /**
     * @return mixed
     */
    public function getG12()
    {
        return $this->_g12;
    }

    /**
     * @return mixed
     */
    public function getG13()
    {
        return $this->_g13;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}