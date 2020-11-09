<?php

/*
 * Analysis class for playbook website
 * stores SWOT information
 * 11/8/20
 * @author Roldan Barbante
 * @version 1.0
 */
class Section8
{
    //Declare instance variables
    private $_answerID;
    private $_h1;
    private $_h2;
    private $_h3;
    private $_h4;
    private $_h5;
    private $_h6;
    private $_h7;
    private $_h8;
    private $_h9;
    private $_h10;
    private $_h11;
    private $_h12;




    private $_userId;

    // constructor

    function __construct($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8, $h9, $h10, $h11, $h12, $userId)
    {
        $this->_h1 = $h1;
        $this->_h2 = $h2;
        $this->_h3 = $h3;
        $this->_h4 = $h4;
        $this->_h5 = $h5;
        $this->_h6 = $h6;
        $this->_h7 = $h7;
        $this->_h8 = $h8;
        $this->_h9 = $h9;
        $this->_h10 = $h10;
        $this->_h11 = $h11;
        $this->_h12 = $h12;

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
    public function getH1()
    {
        return $this->_h1;
    }

    /**
     * @return mixed
     */
    public function getH2()
    {
        return $this->_h2;
    }

    /**
     * @return mixed
     */
    public function getH3()
    {
        return $this->_h3;
    }

    /**
     * @return mixed
     */
    public function getH4()
    {
        return $this->_h4;
    }

    /**
     * @return mixed
     */
    public function getH5()
    {
        return $this->_h5;
    }

    /**
     * @return mixed
     */
    public function getH6()
    {
        return $this->_h6;
    }

    /**
     * @return mixed
     */
    public function getH7()
    {
        return $this->_h7;
    }

    /**
     * @return mixed
     */
    public function getH8()
    {
        return $this->_h8;
    }

    /**
     * @return mixed
     */
    public function getH9()
    {
        return $this->_h9;
    }

    /**
     * @return mixed
     */
    public function getH10()
    {
        return $this->_h10;
    }

    /**
     * @return mixed
     */
    public function getH11()
    {
        return $this->_h11;
    }

    /**
     * @return mixed
     */
    public function getH12()
    {
        return $this->_h12;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}