<!DOCTYPE html>
<html>
   
    <title>Book A Bus</title>
    <head>
        <!--linking css file -->
        <link rel="stylesheet" href="./signUpPage.css">
       <!-- webpage name--> SIGN UP
    </head>
   <!--  button to go back to the home page--> <p ><a href="./landingPage.html"class="button">Home</a></p>
    <body>
        <div class="container"><!--alternate name for my div-->
        <!--inserting student data-->
        <form action="./insertP.php" method="post">
            <p>Please Fill This Form Below To Book A Bus</p>
            <hr>
            <label>
                Student Name
            </label>
            <input type="text" placeholder="Student Name" name="studentName">
        
            <br>
            
            <label>
                Student Number
            </label>
            <input type="number" placeholder="Student Number" name="studentNumber">
            <br>
            <label>
                Campus
            </label>
            <input type="text" placeholder="Campus"name="campusName">
            <br>
            <label>
                Date
            </label>
            <input type="date" placeholder="#" name="RegistrationDate">
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
            <!--a submit button for registering student-->
            <input type="submit" class = "btn btn-primary">
            <br>

            <!--<p a hr>Already Have An Account?<a href="./loginPage.html"class="button">Login</a></p>-->
 


        </form>
    </div>
    </body>
</html>


