<?php

/*
 * Analysis class for playbook website
 * stores SWOT information
 * 11/8/20
 * @author Roldan Barbante
 * @version 1.0
 */
class Section9
{
    //Declare instance variables
    private $_answerID;
    private $_i1;
    private $_i2;

    private $_userId;

    // constructor

    function __construct($i1, $i2, $userId)
    {
        $this->_i1 = $i1;
        $this->_i2 = $i2;
        
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
    public function getI1()
    {
        return $this->_i1;
    }

    /**
     * @return mixed
     */
    public function getI2()
    {
        return $this->_i2;
    }


    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}