<!DOCTYPE html>
<html>
    <body>
        <center>
    <head>
        do not lose your barcode
</head>


<?php
//VALIDATING STUDENTNUMER
if(isset($_GET['studentNumber'])){
    $studentNumber=$_GET['studentNumber'];
    include 'barcode128.PHP';
    ECHO bar128($studentNumber);
}



?>
<a href="./LandingPage.html" class="button">HOME </a>
<br>
</center>
</body>
</html>