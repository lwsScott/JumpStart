<?php
/*
 * Analysis class for playbook website
 * 10/28/20
 * filename https://lscott.greenriverdev.com/355/JumpStart/classes/section1.php
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
class Section1
{
    //Declare instance variables
    private $_answerID;
    private $_a1;
    private $_a2;
    private $_a3;
    private $_a4;
    private $_a5;
    private $_a6;
    private $_a7;
    private $_a8;
    private $_a9;
    private $_a10;
    private $_a11;
    private $_a12;
    private $_a13;
    private $_a14;
    private $_a15;
    private $_a16;
    private $_a17;
    private $_a18;
    private $_userId;

    // constructor

    function __construct($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9,
                         $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $userId)
    {
        $this->_a1 = $a1;
        $this->_a2 = $a2;
        $this->_a3 = $a3;
        $this->_a4 = $a4;
        $this->_a5 = $a5;
        $this->_a6 = $a6;
        $this->_a7 = $a7;
        $this->_a8 = $a8;
        $this->_a9 = $a9;
        $this->_a10 = $a10;
        $this->_a11 = $a11;
        $this->_a12 = $a12;
        $this->_a13 = $a13;
        $this->_a14 = $a14;
        $this->_a15 = $a15;
        $this->_a16 = $a16;
        $this->_a17 = $a17;
        $this->_a18 = $a18;
        $this->_userId = $userId;

    }

    /**
     * @return mixed
     */
    public function getA1()
    {
        return $this->_a1;
    }

    /**
     * @return mixed
     */
    public function getA2()
    {
        return $this->_a2;
    }

    /**
     * @return mixed
     */
    public function getA3()
    {
        return $this->_a3;
    }

    /**
     * @return mixed
     */
    public function getA4()
    {
        return $this->_a4;
    }

    /**
     * @return mixed
     */
    public function getA5()
    {
        return $this->_a5;
    }

    /**
     * @return mixed
     */
    public function getA6()
    {
        return $this->_a6;
    }

    /**
     * @return mixed
     */
    public function getA7()
    {
        return $this->_a7;
    }

    /**
     * @return mixed
     */
    public function getA8()
    {
        return $this->_a8;
    }

    /**
     * @return mixed
     */
    public function getA9()
    {
        return $this->_a9;
    }

    /**
     * @return mixed
     */
    public function getA10()
    {
        return $this->_a10;
    }

    /**
     * @return mixed
     */
    public function getA11()
    {
        return $this->_a11;
    }

    /**
     * @return mixed
     */
    public function getA12()
    {
        return $this->_a12;
    }

    /**
     * @return mixed
     */
    public function getA13()
    {
        return $this->_a13;
    }

    /**
     * @return mixed
     */
    public function getA14()
    {
        return $this->_a14;
    }

    /**
     * @return mixed
     */
    public function getA15()
    {
        return $this->_a15;
    }

    /**
     * @return mixed
     */
    public function getA16()
    {
        return $this->_a16;
    }

    /**
     * @return mixed
     */
    public function getA17()
    {
        return $this->_a17;
    }

    /**
     * @return mixed
     */
    public function getA18()
    {
        return $this->_a18;
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
