<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Customer_Sign_Up_CSS.css">
    <title>SignUp Page</title>
</head>

<body>
    <center>
    <form action="action_page.php" method="post" class="signup-form">

        <h1 id="main-title">Sign Up</h1>
            <h2>Please fill up this form to create an account</h2>
            <hr>

            <table>


                <tr>
                  <td  ><label for="fname"><b>First Name</b></label></td> 
                    <td><input type="text" placeholder="Enter your First Name" id="fname" name="fname" required><br> </td>

                </tr>
              
                


                <tr>
                    <td><label for="lname"><b>Last Name</b></label></td>
                    <td><input type="text" placeholder="Enter your Last Name" id="lname" name="lname" required></td>
                </tr>
               



                <tr>
                    <td><label for="uname"><b>User Name</b></label></td>
                    <td><input type="text" placeholder="Enter your User Name" id="uname" name="uname" required></td>
                </tr>
              

                 
           <tr>
            <td><label for="gender"><B>Gender</B></label></td>
            <td><input type="radio" id="male" name="gender" required ><B>Male</B></td>
            <td><input type="radio" id="female" name="gender" required ><B>Female</B></td>
           </tr>
        




                <tr>
                    <td><label for="dob"><b>Birth Date</b></label></td>
                    <td><input type="date" id="dob" name="dob" required></td>
                </tr>
                



                <tr>
                    <td><label for="email"><b>Email</b></label></td>
                    <td><input type="email" placeholder="Enter your mail" id="mail" name="mail" required></td>
                </tr>
               



                <tr>
                    <td><label for="password"><b>Password</b></label></td>
                    <td><input type="password" placeholder="Enter your password" id="pass" name="pass" required></td>
                </tr>

               



                <tr>
                    <td><label for="cnf"><b>Password</b></label></td>
                    <td><input type="password" placeholder="Confirm your password" id="cnfpass" name="cnfpass" required></td>
                </tr>
            
          

            </table>
            <button type="reset"><b>Reset</b></button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      
        
       <button type="submit"><b>Submit</b></button>
    
   
        </form>
    </center>
</body>

</html>