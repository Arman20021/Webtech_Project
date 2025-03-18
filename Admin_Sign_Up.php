<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Sign Up</title>
</head>
<body>
    <center>
    <h1>Admin Sign Up</h1>
     <h4>Please take a moment to fill out this form to create your account</h4>
    <hr>
   
    <form action="/submit.php">
        <div>
            <level for="name"><b>First Name :</b></level>
            <input id="name" type="text" placeholder="Enter first name">
        </div>
       
        <div>
            <level for="name"><b>Last Name :</b></level>
            <input id="name" type="text" placeholder="Enter last name">
        </div>
       
        <div>
            <level for="id"><b>Admin id :</b></level>
            <input id="id" type="num" placeholder="Enter your id">
        </div>
     
        <div>
            <level for="phone"><b>Phone :</b></level>
            <input id="phone" type="tel" placeholder="Enter your Phone">
        </div>
   
        <div>
            <level for="email"><b>E-mail :</b></level>
            <input id="email" type="mail" placeholder="Enter your mail">
        </div>
      
        <div>
            <level for="dob"><b>Date of Birth :</b></level>
            <input id="dob" type="date" required>
        </div>
    

        <div>
            <level for="gender"><b>Gender :</b></level>
            <select id="gender" required>
            <option value =""disabled selected>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
            </select>
        </div>

        <!-- radio button -->
        <div>
<p><b>Working Hour :</b></p>

            <input id="04" type="radio" name="Sub"
            value="04">
            <level for="04">4 Hour</level>

            <input id="05" type="radio" name="Sub"
            value="05">
            <level for="05">5 Hour</level>
            
            <input id="06" type="radio" name="Sub"
            value="06">
            <level for="06">6 Hour</level>

        </div>

      

<div>
            <level for="pass"><b>Password :</b></level>
            <input id="pass" type="num" placeholder="Enter your password">
        </div>
        <br>
        <div>
            <level for="pass1"><b> Confirm Password :</b></level>
            <input id="pass1" type="num" placeholder="Enter your password">
        </div>
        <br>
          <!-- check box -->
          <div>
            <input id="term" type="Checkbox" required>
            <level for="term">I agree to the terms and conditions</level>
        </div>
        <br>
        <!-- submit button -->
        <div>
           <button type="submit"><b>Submit</b></button>
        </div>

    </form>
    </center>
</body>
</html>