<?php
/**
 * Created by PhpStorm.
 * User: ans_g
 * Date: 4/20/2018
 * Time: 07:28 PM
 */
require_once "databaseCon.php";
require 'PHPMailer-master/PHPMailerAutoload.php';

if(isset($_POST['submit'])) {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        $str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
        $str = str_shuffle($str);
        $str = substr($str, 0, 10);

        $query = "SELECT fname FROM OWNERS WHERE EMAIL ='" . $email . "'";
        $res = $db->query($query);
        if ($res->num_rows > 0) {
            $row = $res->fetch_row();
            $user = $row[0];

            $db->query("UPDATE OWNERS SET token='$str' WHERE email='$email'");

            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail->CharSet = "text/html; charset=UTF-8;";
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = "ssl";
            $mail ->Host = 'smtp.gmail.com';
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);

            $mail ->Username = "kipper.corporation@gmail.com";
            $mail ->Password = "nizshit666*";
            // DON'T FORGET TO TURN ON THE ACCESS LESS SECURE APPS ON GMAIL
            try {
                $mail->SetFrom("kipper.corporation@gmail.com");
                $mail ->Subject = 'Password Recovery Code | Kipper';
                $mail ->Body = "Hi ".$user.",<br>We received a request to reset your account password.
                        <br>You can enter the following password reset code:<br><h2 style='color: red'>".$str."</h2><br>​Kipper Security Team";
                $mail ->AddAddress($email);

                if(!$mail->Send())
                    echo "failure: ".$mail->ErrorInfo;
                else
                    echo "";
            }catch(Exception $ex){}
        }else {
            echo "Email doesn't exist in the database!";
        }
    }
    unset($_POST['submit']);
}
