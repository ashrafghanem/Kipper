<?php
/**
 * Created by PhpStorm.
 * User: ans_g
 * Date: 4/14/2018
 * Time: 05:45 PM
 */
$server="localhost";
$dbuser="ashraf";
$password="ashraf1998";
$dbname="kipper";

try {
    mysqli_report(MYSQLI_REPORT_ALL);
    $db = new mysqli($server, $dbuser, $password, $dbname);
    mysqli_report(null);
}catch (mysqli_sql_exception $ex){
    die("Could not connect to the database successfully!");
}