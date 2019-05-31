<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ans_g
 * Date: 4/28/2018
 * Time: 02:06 AM
 */
if(isset($_SESSION['loggedin'])){
    unset($_SESSION['loggedin']);
    unset($_SESSION['email_user']);
    session_destroy();
}