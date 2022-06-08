<!DOCTYPE html>
<html>
   
    <title>Register</title>
    <head>
        <!--linking css file -->
        <link rel="stylesheet" href="./signUpPage.css">
       <!-- webpage name--> SIGN UP
    </head>
   <!--  button to go back to the home page--> <p ><a href="./landingPage.html"class="button">Home</a></p>
    <body>
        <div class="container"><!--alternate name for my div-->
        <!--inserting student data-->
        <form action="./insertAdminTable.php" method="post">
            <p>Admin Register</p>
            <hr>
            <label>
                Admin Name
            </label>
            <input type="text" placeholder="Full Name" name="adminName">
        
            <br>
            
            <label>
                Student Number
            </label>
            <input type="number" placeholder="Student Number" name="studentNumber">
            <br>
           
    
            
            <label>
                Email
            </label>
            <input type="email" placeholder="Email" name="email">
            <br>
            <label>
                Password
            </label>
            <input type="password" placeholder="Password"name="password">
            <br>
            <!--a submit button for registering ADMIN-->
            <input type="submit" class = "btn btn-primary">
            <br>
           <p a hr>Already Have An Account?<a href="./loginPage.PHP"class="button">Login</a></p>
 


        </form>
    </div>
    </body>
</html>


