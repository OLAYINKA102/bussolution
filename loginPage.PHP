<?php

//if(!empty($_POST['save']))
//
include 'connection.php';
$conn = new mysqli('localhost','root','','admintable');
SESSION_START();
if (isset($_POST['submit'])){
    $studentNumber=$_POST['studentNumber'];
    $password=md5($_POST['password']);
    $sql="Select * FROM admintable WHERE studentNumber='$studentNumber'
    AND password='$password'";
    $result=mysqli_query($conn,$sql);

    if($result->num_rows >0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['studentNumber'] =$row['studentNumber'];
    }else{
        echo "<script>alert('emailorpassword is wrong')</script>";
    }
}



?>
<!DOCTYPE html>
<html>
<head>
</head>

    
    <link rel="stylesheet" href="./loginPage.css">
<body>
    <title>Login</title>
    <head>
        Login
        <link rel="stylesheet" href="./loginPage.css">
    </head>
    <p ><a href="./landingPage.html"class="button">Home</a></p>
</body>
   <form action="" method="Post">
       <div class="loginP">
<label>
    StudentNumber
</label>
<input type="text" placeholder="studentNumber"value<?php echo $studentNumber;?>
<br>
<br>
<label>
    Password
</label>
<br>
<input type="password" placeholder="password"value<?php echo $studentNumber; ?>
<br>
<br>
<input type="checkbox" />Remember me
<br>
<button name="submit" class="btn">login</button>
<label>
    <p>forget <a href="a">Password</a></p>
</label>
<label>
    <p>No account?<a href="./adminReg.php" class="button">Click To Sign Up </a>
    </body>
</label>
</div>
</form>

</html>