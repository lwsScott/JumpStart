<?php
/*
 * Analysis class for playbook website
 * 10/28/20
 * filename https://lscott.greenriverdev.com/355/JumpStart/classes/analysis.php
 * @author Lewis Scott
 * @version 1.0
 */

/*
 * Analysis class for playbook website
 * stores SWOT information
 * 10/28/20
 * @author Lewis Scott
 * @version 1.0
 */
class Analysis
{
    //Declare instance variables
    private $_swot_name;
    private $_userId;
    private $_swotId;

    // constructor

    function __construct($name, $userId, $swotID)
    {
        $this->_swot_name = $name;
        $this->_userId = $userId;
        $this->_swotId = $swotID;
    }

    /**
     * get the user id
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }

}
