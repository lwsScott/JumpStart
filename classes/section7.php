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
    private $_g1a;
    private $_g1b;
    private $_g2;
    private $_g2a;
    private $_g2b;
    private $_g3;
    private $_g3a;
    private $_g3b;
    private $_g4;
    private $_g4a;
    private $_g4b;
    private $_g5;
    private $_g5a;
    private $_g5b;
    private $_g6;
    private $_g6a;
    private $_g6b;
    private $_g7;
    private $_g7a;
    private $_g7b;
    private $_g8;
    private $_g8a;
    private $_g8b;
    private $_g9;
    private $_g9a;
    private $_g9b;
    private $_g10;
    private $_g10a;
    private $_g10b;
    private $_g11;
    private $_g11a;
    private $_g11b;
    private $_g12;
    private $_g12a;
    private $_g12b;




    private $_userId;

    // constructor

    function __construct($g1, $g1a, $g1b, $g2, $g2a, $g2b, $g3, $g3a, $g3b, $g4, $g4a, $g4b,
                         $g5, $g5a, $g5b, $g6, $g6a, $g6b, $g7, $g7a, $g7b, $g8, $g8a, $g8b,
                         $g9, $g9a, $g9b, $g10, $g10a, $g10b, $g11, $g11a, $g11b, $g12, $g12a, $g12b, $userId)
    {
        $this->_g1 = $g1;
        $this->_g1a = $g1a;
        $this->_g1b = $g1b;
        $this->_g2 = $g2;
        $this->_g2a = $g2a;
        $this->_g2b = $g2b;
        $this->_g3 = $g3;
        $this->_g3a = $g3a;
        $this->_g3b = $g3b;
        $this->_g4 = $g4;
        $this->_g4a = $g4a;
        $this->_g4b = $g4b;
        $this->_g5 = $g5;
        $this->_g5a = $g5a;
        $this->_g5b = $g5b;
        $this->_g6 = $g6;
        $this->_g6a = $g6a;
        $this->_g6b = $g6b;
        $this->_g7 = $g7;
        $this->_g7a = $g7a;
        $this->_g7b = $g7b;
        $this->_g8 = $g8;
        $this->_g8a = $g8a;
        $this->_g8b = $g8b;
        $this->_g9 = $g9;
        $this->_g9a =g9a;
        $this->_g9b = $g9b;
        $this->_g10 = $g10;
        $this->_g10a = $g10a;
        $this->_g10b = $g10b;
        $this->_g11 = $g11;
        $this->_g11a = $g11a;
        $this->_g11b = $g11b;
        $this->_g12 = $g12;
        $this->_g12a = $g12a;
        $this->_g12b = $g12b;

        $this->_userId = $userId;
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
    public function getG1a()
    {
        return $this->_g1a;
    }

    /**
     * @return mixed
     */
    public function getG1b()
    {
        return $this->_g1b;
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
    public function getG2a()
    {
        return $this->_g2a;
    }

    /**
     * @return mixed
     */
    public function getG2b()
    {
        return $this->_g2b;
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
    public function getG3a()
    {
        return $this->_g3a;
    }

    /**
     * @return mixed
     */
    public function getG3b()
    {
        return $this->_g3b;
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
    public function getG4a()
    {
        return $this->_g4a;
    }

    /**
     * @return mixed
     */
    public function getG4b()
    {
        return $this->_g4b;
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
    public function getG5a()
    {
        return $this->_g5a;
    }

    /**
     * @return mixed
     */
    public function get5b()
    {
        return $this->_g5b;
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
    public function getG6a()
    {
        return $this->_g6a;
    }

    /**
     * @return mixed
     */
    public function getG6b()
    {
        return $this->_g6b;
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
    public function getG7a()
    {
        return $this->_g7a;
    }

    /**
     * @return mixed
     */
    public function getG7b()
    {
        return $this->_g7b;
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
    public function getG8a()
    {
        return $this->_g8a;
    }

    /**
     * @return mixed
     */
    public function getG8b()
    {
        return $this->_g8b;
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
    public function getG9a()
    {
        return $this->_g9a;
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
    public function getG10a()
    {
        return $this->_g10a;
    }

    /**
     * @return mixed
     */
    public function getG10b()
    {
        return $this->_g10b;
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
    public function getG11a()
    {
        return $this->_g11a;
    }

    /**
     * @return mixed
     */
    public function getG11b()
    {
        return $this->_g11b;
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
    public function getG12a()
    {
        return $this->_g12a;
    }

    /**
     * @return mixed
     */
    public function getG12b()
    {
        return $this->_g12b;
    }



    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}