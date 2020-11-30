<?php
/*
 * Analysis class for playbook website
 * stores SWOT themes
 * 11/18/20
 * @author Lewis Scott
 * @version 1.0
 */
class Strategy3
{
    //Declare instance variables
    private $_strategyID;
    private $_strategyName;
    private $_strategyList;

    private $_userId;

    // constructor

    function __construct($strategyName, $strategyList, $userId)
    {
        $this->_strategyName = $strategyName;
        $this->_strategyList = $strategyList;
        $this->_userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getStrategyName()
    {
        return $this->_strategyName;
    }

    /**
     * @return mixed
     */
    public function getStrategyList()
    {
        return $this->_strategyList;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }

}