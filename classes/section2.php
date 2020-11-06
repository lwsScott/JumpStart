<?php
/*
 * Analysis class for playbook website
 * 10/28/20
 * filename https://lscott.greenriverdev.com/355/JumpStart/classes/section2.php
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
class Section2
{
    //Declare instance variables
    private $_answerID;
    private $_b1;
    private $_b2;
    private $_b3;
    private $_b4;
    private $_b5;
    private $_b6;
    private $_b7;
    private $_b8;
    private $_b9;
    private $_b10;
    private $_b11;
    private $_b12;
    private $_b13;
    private $_b14;
    private $_b15;
    private $_b16;
    private $_b17;
    private $_b17yn;
    private $_b18;
    private $_b18yn;
    private $_b19;
    private $_b19yn;
    private $_b20;
    private $_b20yn;
    private $_b21;
    private $_b21yn;
    private $_b22;
    private $_b22yn;
    private $_b23;
    private $_b23yn;
    private $_b24;
    private $_b24yn;
    private $_b25;
    private $_b25yn;
    private $_b26;
    private $_b26yn;
    private $_b27;
    private $_b27yn;
    private $_b28;
    private $_b28yn;
    private $_b29;
    private $_userId;


    function __construct($b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9,
                        $b10, $b11, $b12, $b13, $b14, $b15, $b16, $b17, $b17yn,
                        $b18, $b18yn, $b19,  $b19yn, $b20, $b20yn, $b21,
                        $b21yn, $b22, $b22yn, $b23, $b23yn, $b24, $b24yn, $b25,
                        $b25yn, $b26, $b26yn,  $b27, $b27yn, $b28, $b28yn, $b29, $userId)
{
    $this->_b1 = $b1;
    $this->_b2 = $b2;
    $this->_b3 = $b3;
    $this->_b4 = $b4;
    $this->_b5 = $b5;
    $this->_b6 = $b6;
    $this->_b7 = $b7;
    $this->_b8 = $b8;
    $this->_b9 = $b9;
    $this->_b10 = $b10;
    $this->_b11 = $b11;
    $this->_b12 = $b12;
    $this->_b13 = $b13;
    $this->_b14 = $b14;
    $this->_b15 = $b15;
    $this->_b16 = $b16;
    $this->_b17 = $b17;
    $this->_b17yn = $b17yn;
    $this->_b18 = $b18;
    $this->_b18yn = $b18yn;
    $this->_b19 = $b19;
    $this->_b19yn = $b19yn;
    $this->_b20 = $b20;
    $this->_b20yn = $b20yn;
    $this->_b21 = $b21;
    $this->_b21yn = $b21yn;
    $this->_b22 = $b22;
    $this->_b22yn = $b22yn;
    $this->_b23 = $b23;
    $this->_b23yn = $b23yn;
    $this->_b24 = $b24;
    $this->_b24yn = $b24yn;
    $this->_b25 = $b25;
    $this->_b25yn = $b25yn;
    $this->_b26 = $b26;
    $this->_b26yn = $b26yn;
    $this->_b27 = $b27;
    $this->_b27yn = $b27yn;
    $this->_b28 = $b28;
    $this->_b28yn = $b28yn;
    $this->_b29 = $b29;
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
    public function getB1()
    {
        return $this->_b1;
    }

    /**
     * @return mixed
     */
    public function getB2()
    {
        return $this->_b2;
    }

    /**
     * @return mixed
     */
    public function getB3()
    {
        return $this->_b3;
    }

    /**
     * @return mixed
     */
    public function getB4()
    {
        return $this->_b4;
    }

    /**
     * @return mixed
     */
    public function getB5()
    {
        return $this->_b5;
    }

    /**
     * @return mixed
     */
    public function getB6()
    {
        return $this->_b6;
    }

    /**
     * @return mixed
     */
    public function getB7()
    {
        return $this->_b7;
    }

    /**
     * @return mixed
     */
    public function getB8()
    {
        return $this->_b8;
    }

    /**
     * @return mixed
     */
    public function getB9()
    {
        return $this->_b9;
    }

    /**
     * @return mixed
     */
    public function getB10()
    {
        return $this->_b10;
    }

    /**
     * @return mixed
     */
    public function getB11()
    {
        return $this->_b11;
    }

    /**
     * @return mixed
     */
    public function getB12()
    {
        return $this->_b12;
    }

    /**
     * @return mixed
     */
    public function getB13()
    {
        return $this->_b13;
    }

    /**
     * @return mixed
     */
    public function getB14()
    {
        return $this->_b14;
    }

    /**
     * @return mixed
     */
    public function getB15()
    {
        return $this->_b15;
    }

    /**
     * @return mixed
     */
    public function getB16()
    {
        return $this->_b16;
    }

    /**
     * @return mixed
     */
    public function getB17()
    {
        return $this->_b17;
    }

    /**
     * @return mixed
     */
    public function getB17yn()
    {
        return $this->_b17yn;
    }

    /**
     * @return mixed
     */
    public function getB18()
    {
        return $this->_b18;
    }

    /**
     * @return mixed
     */
    public function getB18yn()
    {
        return $this->_b18yn;
    }

    /**
     * @return mixed
     */
    public function getB19()
    {
        return $this->_b19;
    }

    /**
     * @return mixed
     */
    public function getB19yn()
    {
        return $this->_b19yn;
    }

    /**
     * @return mixed
     */
    public function getB20()
    {
        return $this->_b20;
    }

    /**
     * @return mixed
     */
    public function getB20yn()
    {
        return $this->_b20yn;
    }

    /**
     * @return mixed
     */
    public function getB21()
    {
        return $this->_b21;
    }

    /**
     * @return mixed
     */
    public function getB21yn()
    {
        return $this->_b21yn;
    }

    /**
     * @return mixed
     */
    public function getB22()
    {
        return $this->_b22;
    }

    /**
     * @return mixed
     */
    public function getB22yn()
    {
        return $this->_b22yn;
    }

    /**
     * @return mixed
     */
    public function getB23()
    {
        return $this->_b23;
    }

    /**
     * @return mixed
     */
    public function getB23yn()
    {
        return $this->_b23yn;
    }

    /**
     * @return mixed
     */
    public function getB24()
    {
        return $this->_b24;
    }

    /**
     * @return mixed
     */
    public function getB24yn()
    {
        return $this->_b24yn;
    }

    /**
     * @return mixed
     */
    public function getB25()
    {
        return $this->_b25;
    }

    /**
     * @return mixed
     */
    public function getB25yn()
    {
        return $this->_b25yn;
    }

    /**
     * @return mixed
     */
    public function getB26()
    {
        return $this->_b26;
    }

    /**
     * @return mixed
     */
    public function getB26yn()
    {
        return $this->_b26yn;
    }

    /**
     * @return mixed
     */
    public function getB27()
    {
        return $this->_b27;
    }

    /**
     * @return mixed
     */
    public function getB27yn()
    {
        return $this->_b27yn;
    }

    /**
     * @return mixed
     */
    public function getB28()
    {
        return $this->_b28;
    }

    /**
     * @return mixed
     */
    public function getB28yn()
    {
        return $this->_b28yn;
    }

    /**
     * @return mixed
     */
    public function getB29()
    {
        return $this->_b29;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }



}

