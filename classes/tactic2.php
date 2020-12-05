<?php

/*
 * Analysis class for playbook website
 * stores Tactical tasks
 * 11/30/20
 * @author Lewis Scott
 * @version 1.0
 */

class Tactic2
{
    //Declare instance variables
    private $_tactic2ID;
    private $_goal;
    private $_task;
    private $_quarter;
    private $_date;

    private $_userId;

    // constructor
    function __construct($goal, $task, $quarter, $date, $userId)
    {
        $this->_goal = $goal;
        $this->_task = $task;
        $this->_quarter = $quarter;
        $this->_date = $date;
        $this->_userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getGoal()
    {
        return $this->_goal;
    }

    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->_task;
    }

    /**
     * @return mixed
     */
    public function getQuarter()
    {
        return $this->_quarter;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }


}
