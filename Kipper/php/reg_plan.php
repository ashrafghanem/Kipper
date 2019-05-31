<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ans_g
 * Date: 4/28/2018
 * Time: 03:29 AM
 */
if(!isset($_SESSION['plan_chosen'])){
    $_SESSION['plan_chosen']=true;
}