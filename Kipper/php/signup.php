<?php
/**
 * Created by PhpStorm.
 * User: ans_g
 * Date: 4/28/2018
 * Time: 09:46 PM
 */
require_once "databaseCon.php";

if(isset($_POST['submitReg'])) {
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];
    $bdate = $_POST['bdate'];
    $planNum = $_POST['planNum'];
    $gender = $_POST['gender'];

    $sex = '';
    if ($gender == 'Male')
        $sex = 'M';
    else if ($gender == 'Female')
        $sex = 'F';
    else if ($gender == 'Prefer not to say')
        $sex = '-';

    $plan='';
    if ($planNum == 1)
        $plan="1-month trial";
    else if ($planNum == 2)
        $plan= "6-month plan";
    else if ($planNum == 3)
        $plan= "12-month plan";
    else if ($planNum == 4)
        $plan= "36-month plan";

    $hashedPass = hash('sha256', $password);
    $query = "INSERT INTO OWNERS(fname, lname, email, password,gender,username,plan,bdate)
                  VALUES ('$fname','$lname','$email','$hashedPass','$sex','$username','$plan','$bdate')";

    $res = $db->query($query);
    if ($res == true) {
        echo "You have registered successfully!";
        //header("Location,kipper/console.php");
    } else {
        echo "Something wrong occurred! Please try again later.";
        //header('Refresh:1; url=kipper/registration.php');
    }
}