<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ans_g
 * Date: 4/15/2018
 * Time: 12:16 AM
 */
require_once "databaseCon.php";

if(isset($_POST['loginBtn'])){
    if(isset($_POST['email_user']))
        $email_user = $_POST['email_user'];
    if(isset($_POST['password']))
        $password = $_POST['password'];
    if(isset($_POST['remember']))
        $remember = $_POST['remember'];

    if(!empty($email_user) && !empty($password)) {
        if(isset($remember) and $remember=="on"){
            setcookie('user', $email_user, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('pass', $password, time() + (86400 * 30), "/"); // 86400 = 1 day
        }
        $hashedPass = hash('sha256', $password);
        $query = "SELECT username FROM OWNERS WHERE (USERNAME ='" . $email_user . "'OR EMAIL ='" . $email_user . "') AND PASSWORD = '" . $hashedPass . "'";
        $res = $db->query($query);
        if ($res->num_rows > 0) {
        $username = $res->fetch_row()[0];
        $_SESSION['username']=$username;
        $_SESSION['loggedin']=true;

        //header("Location: ../kipper/console.php");
            echo "";
        } else {
            echo "Your email/username or password are wrong!";
        }
    }
    else
        echo "You must fill all the fields!";
}