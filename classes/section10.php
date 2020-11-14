<?php

/*
 * Analysis class for playbook website
 * stores SWOT information
 * 11/8/20
 * @author Roldan Barbante
 * @version 1.0
 */
class Section10
{
    //Declare instance variables
    private $_answerID;
    private $_j1;
    private $_j2;
    private $_j3;
    private $_j4;
   
    private $_userId;

    // constructor

    function __construct($j1, $j2, $j3, $j4, $userId)
    {
        $this->_j1 = $j1;
        $this->_j2 = $j2;
        $this->_j3 = $j3;
        $this->_j4 = $j4;

        $this->_userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getJ1()
    {
        return $this->_j1;
    }

    /**
     * @return mixed
     */
    public function getJ2()
    {
        return $this->_j2;
    }

    /**
     * @return mixed
     */
    public function getJ3()
    {
        return $this->_j3;
    }

    /**
     * @return mixed
     */
    public function getJ4()
    {
        return $this->_j4;
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
    public function getUserId()
    {
        return $this->_userId;
    }
}