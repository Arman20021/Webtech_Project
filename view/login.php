<?php
$outputMessage = ""; // Initialize to avoid undefined warning
$usrn = $pass = "";
$usrnErr = $passErr = "";

include "../control/loginvalidation.php";
?>
<html>
<head>    
    <title>Online shopping</title>
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
                    <td><input id="submit-btn" type="submit" value="Login"><br></td>
                   
                    <td><input id="reset" type="reset" value="Reset" onclick="window.location.href=window.location.href"></td>
                     <!-- <input id="back-btn" type="button" value="Back" onclick="..."> -->

                </tr>
            </table>
        </fieldset>
    </div>
</form>

<?php
if (!empty($outputMessage)) {
    echo $outputMessage;
}
?>

</body>
</html>
