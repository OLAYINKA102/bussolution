<?php

$SERVER="localhost";
$username="root";
$password ="";
$database="admintable";
//CREATE SESSION VARIABLES
echo ($_SERVER['REQUEST_URI']); //The reason why I did this echo was to test if the $_SERVER['REQUEST_URI']; works
$conn =mysqli_connect($SERVER,$username,$password,$database)


?>