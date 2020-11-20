<?php
/*
 * Analysis class for playbook website
 * stores SWOT themes
 * 11/18/20
 * @author Lewis Scott
 * @version 1.0
 */
class Themes
{
    //Declare instance variables
    private $_themeID;
    private $_tName;
    private $_t1;

    private $_userId;

    // constructor

    function __construct($tName, $t1, $userId)
    {
        $this->_tName = $tName;
        $this->_t1 = $t1;
        $this->_userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getThemeID()
    {
        return $this->_themeID;
    }

    /**
     * @return mixed
     */
    public function getTName()
    {
        return $this->_tName;
    }

    /**
     * @return mixed
     */
    public function getT1()
    {
        return $this->_t1;
    }


    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}