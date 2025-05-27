<?php
include "../control/action_page.php";
?>
<html>
<head>    
    <title>Online shoping</title>
    <link rel="stylesheet" type="text/css" href="../css/Customer_Sign_Up_CSS.css">
</head>
<body>
    
 



<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="onSubmit" enctype="multipart/form-data">
<div class="firstdiv">
<h2>Register</h2>
 
<fieldset>
<legend>User Information</legend>
<table>
    <tr>
        <td><label for="fname">First Name: </label></td>
        <td>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name" value="<?php echo $fname; ?>">
            <span class="error"><?php echo $fnameErr; ?></span><br>
        </td>
    </tr>
    <tr>
        <td><label for="lname">Last Name: </label></td>
        <td>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name" value="<?php echo $lname; ?>">
            <span class="error"><?php echo $lnameErr; ?></span><br>
        </td>
    </tr>
    <tr>
        <td><label for="usrname">Username: </label></td>
        <td>
            <input type="text" id="usrname" name="usrname" placeholder="Enter your user name" value="<?php echo $usrn; ?>">
            <span class="error"> <?php echo $usrnErr; ?></span><br>
        </td>
    </tr>
    <tr>
        <td><label for="pass">Password: </label></td>
        <td>
            <input type="password" id="pass" name="pass" placeholder="**************">
            <span class="error"> <?php echo $passErr; ?></span><br>
        </td>
    </tr>
    <tr>
        <td><label for="confirmpass">Confirm Password: </label></td>
        <td>
            <input type="password" id="confirmpass" name="confirmpass" placeholder="**************">
            <span class="error"><?php echo $confpassErr; ?></span><br>
        </td>
    </tr>
    <tr>
        <td><label for="email">Email: </label></td>
        <td>
            <input type="text" id="email" name="email" placeholder="Enter you mail" value="<?php echo $email; ?>">
            <span class="error"> <?php echo $emailErr; ?></span><br>
        </td>
    </tr>
    <tr>
        <td><label for="Phone">Phone: </label></td>
        <td>
            <input type="text" id="Phone" name="phnum" value="<?php echo $ph; ?>">
            <span class="error"> <?php echo $phErr; ?></span><br>
        </td>
    </tr>
    <tr>
        <td><label for="DOB">Date of Birth: </label></td>
        <td>
            <input type="date" id="DOB" name="DOB" value="<?php echo $DOB; ?>">
            <span class="error"> <?php echo $DOBErr; ?></span><br>
        </td>
    </tr>
    <tr>
        <td><label>Gender: </label></td>
        <td>
            <input type="radio" id="male" name="gender" value="male" <?php if ($gdr == "male") echo "checked"; ?>>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" <?php if ($gdr == "female") echo "checked"; ?>>
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other" <?php if ($gdr == "other") echo "checked"; ?>>
            <label for="other">Other</label>
            <span class="error"> <?php echo $gdrErr; ?></span>
        </td>
    </tr>

    <tr>
        <td><label>Select your picture: </label> </td>
        <td><input type="file" name="myfile" ></td>
    <td> <span class="error"><?php echo $pictureError;?></span></td>

        </td>

       
    </tr>
    <tr>
        <td><input id="button" type="submit" value="Submit"><br></td>
       <td><input id="reset" type="reset" value="Reset" onclick="window.location.href=window.location.href"></td> 
   

        
    </tr>
</table>
</fieldset>
</div>
</div>
</form>
<?php
if (!empty($outputMessage)) {
    echo $outputMessage;
}
?>


</body>
</html>
