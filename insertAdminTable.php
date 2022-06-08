<!DOCTYPE html>
<html>
    <head>
       
</head>

<body>
    <center>


<?php

//inserting data for admin table

$adminName = $_POST['adminName'];
$studentNumber = $_POST['studentNumber'];
$email = $_POST['email'];
$password = $_POST['password'];


//connecting and testing my localhost conection 
$conn= new mysqli('localhost','root','','admintable');
if($conn->connect_error){
    die('connection Failed  :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into admintable(adminName,studentNumber,
    email,password) values(?,?,?,?)");
    $stmt->bind_param("ssss",$adminName,$studentNumber,
    $email,$password);
    $stmt->execute();
    echo "registration successful....";
    $stmt->close();
    $conn->close();
}

?>
<a href="./loginPage.php" class="button">login</a>

<center>
</body>
</HTML>