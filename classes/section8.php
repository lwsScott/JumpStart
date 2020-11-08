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
    private $_h1a;
    private $_h1b;
    private $_h2;
    private $_h2a;
    private $_h2b;
    private $_h3;
    private $_h3a;
    private $_h3b;
    private $_h4;
    private $_h4a;
    private $_h4b;
    private $_h5;
    private $_h5a;
    private $_h5b;
    private $_h6;
    private $_h6a;
    private $_h6b;
    private $_h7;
    private $_h7a;
    private $_h7b;
    private $_h8;
    private $_h8a;
    private $_h8b;
    private $_h9;
    private $_h9a;
    private $_h9b;
    private $_h10;
    private $_h10a;
    private $_h10b;
    private $_h11;
    private $_h11a;
    private $_h11b;
    private $_h12;
    private $_h12a;
    private $_h12b;




    private $_userId;

    // constructor

    function __construct($h1, $h1a, $h1b, $h2, $h2a, $h2b, $h3, $h3a, $h3b, $h4, $h4a, $h4b,
                         $h5, $h5a, $h5b, $h6, $h6a, $h6b, $h7, $h7a, $h7b, $h8, $h8a, $h8b,
                         $h9, $h9a, $h9b, $h10, $h10a, $h10b, $h11, $h11a, $h11b, $h12, $h12a, $h12b, $userId)
    {
        $this->_h1 = $h1;
        $this->_h1a = $h1a;
        $this->_h1b = $h1b;
        $this->_h2 = $h2;
        $this->_h2a = $h2a;
        $this->_h2b = $h2b;
        $this->_h3 = $h3;
        $this->_h3a = $h3a;
        $this->_h3b = $h3b;
        $this->_h4 = $h4;
        $this->_h4a = $h4a;
        $this->_h4b = $h4b;
        $this->_h5 = $h5;
        $this->_h5a = $h5a;
        $this->_h5b = $h5b;
        $this->_h6 = $h6;
        $this->_h6a = $h6a;
        $this->_h6b = $h6b;
        $this->_h7 = $h7;
        $this->_h7a = $h7a;
        $this->_h7b = $h7b;
        $this->_h8 = $h8;
        $this->_h8a = $h8a;
        $this->_h8b = $h8b;
        $this->_h9 = $h9;
        $this->_h9a =$h9a;
        $this->_h9b = $h9b;
        $this->_h10 = $h10;
        $this->_h10a = $h10a;
        $this->_h10b = $h10b;
        $this->_h11 = $h11;
        $this->_h11a = $h11a;
        $this->_h11b = $h11b;
        $this->_h12 = $h12;
        $this->_h12a = $h12a;
        $this->_h12b = $h12b;

        $this->_userId = $userId;
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
    public function getH1a()
    {
        return $this->_h1a;
    }

    /**
     * @return mixed
     */
    public function getH1b()
    {
        return $this->_h1b;
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
    public function getH2a()
    {
        return $this->_h2a;
    }

    /**
     * @return mixed
     */
    public function getH2b()
    {
        return $this->_h2b;
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
    public function getH3a()
    {
        return $this->_h3a;
    }

    /**
     * @return mixed
     */
    public function getH3b()
    {
        return $this->_h3b;
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
    public function getH4a()
    {
        return $this->_h4a;
    }

    /**
     * @return mixed
     */
    public function getH4b()
    {
        return $this->_h4b;
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
    public function getH5a()
    {
        return $this->_h5a;
    }

    /**
     * @return mixed
     */
    public function getH5b()
    {
        return $this->_h5b;
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
    public function getH6a()
    {
        return $this->_h6a;
    }

    /**
     * @return mixed
     */
    public function getH6b()
    {
        return $this->_h6b;
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
    public function getH7a()
    {
        return $this->_h7a;
    }

    /**
     * @return mixed
     */
    public function getH7b()
    {
        return $this->_h7b;
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
    public function getH8a()
    {
        return $this->_h8a;
    }

    /**
     * @return mixed
     */
    public function getH8b()
    {
        return $this->_h8b;
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
    public function getH9a()
    {
        return $this->_h9a;
    }

    /**
     * @return mixed
     */
    public function getH9b()
    {
        return $this->_h9b;
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
    public function getH10a()
    {
        return $this->_h10a;
    }

    /**
     * @return mixed
     */
    public function getH10b()
    {
        return $this->_h10b;
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
    public function getH11a()
    {
        return $this->_h11a;
    }

    /**
     * @return mixed
     */
    public function getH11b()
    {
        return $this->_h11b;
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
    public function getH12a()
    {
        return $this->_h12a;
    }

    /**
     * @return mixed
     */
    public function getH12b()
    {
        return $this->_h12b;
    }



    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }
}