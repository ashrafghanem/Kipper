<?php
/**
 * Created by PhpStorm.
 * User: ans_g
 * Date: 4/20/2018
 * Time: 10:19 PM
 */
require_once "databaseCon.php";

if(isset($_POST['submitCode'])) {
    if (isset($_POST['email']) && isset($_POST['code'])){
        $email = $_POST['email'];
        $code = $_POST['code'];

        $query = "SELECT token FROM OWNERS WHERE EMAIL ='" . $email . "'";
        $res = $db->query($query);
        if ($res->num_rows > 0) {
            $row = $res->fetch_row();
            $token = $row[0];
            if($token==$code){
                $newPassword = hash('sha256',$token);
                $db->query("UPDATE OWNERS SET password='$newPassword' WHERE email='$email'");
                echo "This code is the new password for your account";
            }
            else{
                echo "The inserted recovery code is wrong. Please try again!";
            }
        }
    }
}