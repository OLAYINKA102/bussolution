<!DOCTYPE html>
<html>
    <head>
    <a href="./LandingPage.html" class="button">HOME </a>
</head>

<body>
    <center>
    

<?php


//inserting data

$studentName = $_POST['studentName'];
$studenNumber = $_POST['studentNumber'];
$campusName = $_POST['campusName'];
$RegistrationDate = $_POST['RegistrationDate'];
$email = $_POST['email'];
$password = $_POST['password'];


//connecting and testing my localhost conection 
$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
    die('connection Failed  :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(studentName,studentNumber,campusName,
    RegistrationDate,email,password) values(?,?,?,?,?,?)");
    $stmt->bind_param("sissss",$studentName,$studenNumber,$campusName,
    $RegistrationDate,$email,$password);
    $stmt->execute();
    echo "registration successful....";
    $stmt->close();
    $conn->close();
}

?>
<!--for student to enter student number for barcode-->
<form action="./createBarcode.php"><br>
<input type="" name = "studentNumber"><br>
 <input type = "submit" value = "Enter student number to create barcode ">
</form>
<center>
</body>


</HTML>