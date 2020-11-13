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
        $this->_g10 = $g10;
        $this->_g11 = $g11;
        $this->_g12 = $g12;
        $this->_g13 = $g13;

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
    public function getG1()
    {
        return $this->_g1;
    }

    /**
     * @param mixed $g1
     */
    public function setG1($g1)
    {
        $this->_g1 = $g1;
    }

    /**
     * @return mixed
     */
    public function getG2()
    {
        return $this->_g2;
    }

    /**
     * @param mixed $g2
     */
    public function setG2($g2)
    {
        $this->_g2 = $g2;
    }

    /**
     * @return mixed
     */
    public function getG3()
    {
        return $this->_g3;
    }

    /**
     * @param mixed $g3
     */
    public function setG3($g3)
    {
        $this->_g3 = $g3;
    }

    /**
     * @return mixed
     */
    public function getG4()
    {
        return $this->_g4;
    }

    /**
     * @param mixed $g4
     */
    public function setG4($g4)
    {
        $this->_g4 = $g4;
    }

    /**
     * @return mixed
     */
    public function getG5()
    {
        return $this->_g5;
    }

    /**
     * @param mixed $g5
     */
    public function setG5($g5)
    {
        $this->_g5 = $g5;
    }

    /**
     * @return mixed
     */
    public function getG6()
    {
        return $this->_g6;
    }

    /**
     * @param mixed $g6
     */
    public function setG6($g6)
    {
        $this->_g6 = $g6;
    }

    /**
     * @return mixed
     */
    public function getG7()
    {
        return $this->_g7;
    }

    /**
     * @param mixed $g7
     */
    public function setG7($g7)
    {
        $this->_g7 = $g7;
    }

    /**
     * @return mixed
     */
    public function getG8()
    {
        return $this->_g8;
    }

    /**
     * @param mixed $g8
     */
    public function setG8($g8)
    {
        $this->_g8 = $g8;
    }

    /**
     * @return mixed
     */
    public function getG9()
    {
        return $this->_g9;
    }

    /**
     * @param mixed $g9
     */
    public function setG9($g9)
    {
        $this->_g9 = $g9;
    }

    /**
     * @return mixed
     */
    public function getG10()
    {
        return $this->_g10;
    }

    /**
     * @param mixed $g10
     */
    public function setG10($g10)
    {
        $this->_g10 = $g10;
    }

    /**
     * @return mixed
     */
    public function getG11()
    {
        return $this->_g11;
    }

    /**
     * @param mixed $g11
     */
    public function setG11($g11)
    {
        $this->_g11 = $g11;
    }

    /**
     * @return mixed
     */
    public function getG12()
    {
        return $this->_g12;
    }

    /**
     * @param mixed $g12
     */
    public function setG12($g12)
    {
        $this->_g12 = $g12;
    }

    /**
     * @return mixed
     */
    public function getG13()
    {
        return $this->_g13;
    }

    /**
     * @param mixed $g13
     */
    public function setG13($g13)
    {
        $this->_g13 = $g13;
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