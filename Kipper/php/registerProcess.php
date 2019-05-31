<?php
/**
 * Created by PhpStorm.
 * User: ans_g
 * Date: 4/13/2018
 * Time: 09:56 AM
 */

require_once "databaseCon.php";

if(isset($_POST['submitReg'])){
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];
    $bdate = $_POST['bdate'];
    $planNum = $_POST['planNum'];
    $gender = $_POST['gender'];

    if(isset($username)&&isset($fname)&&isset($lname)&& isset($email) &&isset($password)&&
        isset($confirmPass)&& isset($bdate) && isset($gender) ) {

        if (preg_match("/^[a-z0-9_.]{3,15}$/", $username) &&
            preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/", $email) &&
            preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/",$password) &&
            $password==$confirmPass) {

            $query = "SELECT USERNAME,EMAIL FROM OWNERS WHERE 1";
            $res = $db->query($query);
            for ($i = 0; $i < $res->num_rows; $i++) {
                $row = $res->fetch_row();
                if ($row[0] == $username) {
                    //header('Refresh:1; url=../kipper/registration.php');
                    echo "Username already exists!";
                    exit(0);
                }
                if($row[1] == $email) {
                    echo "Email already exists!";
                    exit(0);
                }
            }
            echo "";
        } else {
            echo "Check your inputs again!";
            //header('Refresh:1; url=kipper/registration.php');
        }
    }
}
