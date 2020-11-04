<?php
/*
 * User class page for dating website
 * 5/30/20
 * filename https://lscott.greenriverdev.com/328/recipes/classes/user.php
 * @author Qinghang Zhang
 * @version 1.0
 */

/*
 * User class for recipe website
 * stores user information
 * 5/30/20
 * @author Qinghang Zhang
 * @version 1.0
 */

/**
 * Class User
 */
class User
{
    private $_username;
    private $_password;
    private $_userId;

    public function __construct($username, $password)
    {
        //$this->_sid = $sid;
        $this->_username = $username;
        $this->_password=$password;
    }

    /**
     * @return mixed as the username
     */
    public function getUsername()
    {
        return $this->_username;
    }


    /**
     * @param $username as the username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * @return mixed as the password
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param $password as password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }



}