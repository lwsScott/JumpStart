<?php
/*
 * Unused
 * Validation functions for dating website
 * provides validation functions
 * 5/30/20
 * filename https://lscott.greenriverdev.com/328/dating/model/validate.php
 * @author Lewis Scott
 * @version 1.0
 */
/* Define functions to validate data */
function validName($name)
{
    return !empty($name);
}

function validPhone($phoneNum)
{
    //echo $phoneNum;
    return (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phoneNum) ||
        preg_match("/^[0-9]{10}$/", $phoneNum));
}

function validEMail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return false;
    }
    return true;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
