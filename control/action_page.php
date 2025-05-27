<?php 
include "../database/data.php";
?>
<?php
$fnameErr = $lnameErr = $usrnErr = $passErr = $confpassErr = $emailErr = $phErr = $DOBErr = $gdrErr = $pictureError = "";
$fname = $lname = $usrn = $pass = $confpass = $email = $ph = $DOB = $gdr = $hasError= "";
$outputMessage = "";

$errors = [];
 

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // First Name
    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
        $errors[] = $fnameErr;
        $hasError=1;
    } else {
        $fname = test_input($_POST["fname"]);
    }

    // Last Name
    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
        $errors[] = $lnameErr;
         $hasError=1;
    } else {
        $lname = test_input($_POST["lname"]);
    }

    // Username
    if (empty($_POST["usrname"])) {
        $usrnErr = "Username is required";
        $errors[] = $usrnErr;
         $hasError=1;
    } else {
        $usrn = test_input($_POST["usrname"]);
    }

    // Password
    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
        $errors[] = $passErr;
         $hasError=1;
    } else {
        $pass = test_input($_POST["pass"]);
    }

    // Confirm Password
    if (empty($_POST["confirmpass"])) {
        $confpassErr = "Confirm your password";
        $errors[] = $confpassErr;
         $hasError=1;
    } else {
        $confpass = test_input($_POST["confirmpass"]);
        if ($confpass !== $pass) {
            $confpassErr = "Passwords do not match";
            $errors[] = $confpassErr;
        }
    }

    // Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $errors[] = $emailErr;
         $hasError=1;
    } else {
        $email = test_input($_POST["email"]);
    }

    // Phone Number
    if (empty($_POST["phnum"])) {
        $phErr = "Phone number is required";
        $errors[] = $phErr;
         $hasError=1;
    } else {
        $ph = test_input($_POST["phnum"]);
    }

    // Date of Birth
    if (empty($_POST["DOB"])) {
        $DOBErr = "Date of birth is required";
        $errors[] = $DOBErr;
         $hasError=1;
    } else {
        $DOB = test_input($_POST["DOB"]);
    }

    // Gender
    if (empty($_POST["gender"])) {
        $gdrErr = "Gender is required";
        $errors[] = $gdrErr;
         $hasError=1;
    } else {
        $gdr = test_input($_POST["gender"]);
    }

    // Picture Upload
    if (empty($_FILES["myfile"]["name"])) {
        $pictureError = "Picture is required.";
        $errors[] = $pictureError;
         $hasError=1;
    } else {
        $fileName = $_FILES["myfile"]["name"];
        $fileSize = $_FILES["myfile"]["size"];
     
     

      if ($fileSize > 2 * 1024 * 1024) {
            $pictureError = "File size must be less than 2MB.";
            $errors[] = $pictureError;
        } 
        else {
          if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_REQUEST["usrname"]."--".$_FILES["myfile"]["name"]))
          {
            echo "File Uploaded";
          }
            else {
                $pictureError = "File upload failed.";
                $errors[] = $pictureError;
                 $hasError=1;
            }
        }
    }

    // Final output
if (!empty($errors)) {
    $outputMessage .= "<div class='error-box'>";

    $outputMessage .= "<ol>";
    foreach ($errors as $error) {
        $outputMessage .= "<li>$error</li>";
    }
    $outputMessage .= "</ol></div><br>";
} else {
   $outputMessage .= "<div class='success-box'>";

    $outputMessage .= "<h2>Registration Successful!</h2>";
    $outputMessage .= "<p><strong>First Name:</strong> $fname</p>";
    $outputMessage .= "<p><strong>Last Name:</strong> $lname</p>";
    $outputMessage .= "<p><strong>Username:</strong> $usrn</p>";
    $outputMessage .= "<p><strong>Email:</strong> $email</p>";
    $outputMessage .= "<p><strong>Phone:</strong> $ph</p>";
    $outputMessage .= "<p><strong>Birth Date:</strong> $DOB</p>";
    $outputMessage .= "<p><strong>Gender:</strong> $gdr</p>";
    $outputMessage .= "<p><strong>Picture:</strong> $fileName</p>";
    $outputMessage .= "</div><br>";
}








  $connobj=createCon();
if($hasError=="")
{
  
    if(insertData($connobj,$_POST["fname"],$_POST["lname"], 
    $_POST["usrname"], $_POST["pass"],$_POST["confirmpass"],$_POST["email"]
    ,$_POST["phnum"],$_POST["DOB"],$_POST["gender"],"../uploads/".$_REQUEST["usrname"]."--".$_FILES["myfile"]["name"]))
    {
        header("Location: ../view/login.php");

    }
    else 
    {
        echo"Failed";
    }
    closeConn($conobj);
}



}
?>
