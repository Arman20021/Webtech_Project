<?php 
include "../database/data.php";
?>
<?php
$fnameErr = $lnameErr = $usrnErr = $passErr = $confpassErr = $emailErr = $phErr = $DOBErr = $gdrErr = $pictureError ="";
$fname = $lname = $usrn = $pass = $confpass = $email = $ph = $DOB = $gdr = $fileName = "";
$hasError = false;
$errors = [];
$picturePath =  "";

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
        $hasError = true;
    } else {
        $fname = test_input($_POST["fname"]);
    }

    // Last Name
    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
        $errors[] = $lnameErr;
        $hasError = true;
    } else {
        $lname = test_input($_POST["lname"]);
    }

    // Username
    if (empty($_POST["usrname"])) {
        $usrnErr = "Username is required";
        $errors[] = $usrnErr;
        $hasError = true;
    } else {
        $usrn = test_input($_POST["usrname"]);
    }

    // Password
    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
        $errors[] = $passErr;
        $hasError = true;
    } else {
        $pass = test_input($_POST["pass"]);
    }

    // Confirm Password
    if (empty($_POST["confirmpass"])) {
        $confpassErr = "Confirm your password";
        $errors[] = $confpassErr;
        $hasError = true;
    } else {
        $confpass = test_input($_POST["confirmpass"]);
        if ($confpass !== $pass) {
            $confpassErr = "Passwords do not match";
            $errors[] = $confpassErr;
            $hasError = true;
        }
    }

    // Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $errors[] = $emailErr;
        $hasError = true;
    } else {
        $email = test_input($_POST["email"]);
    }

    // Phone Number
    if (empty($_POST["phnum"])) {
        $phErr = "Phone number is required";
        $errors[] = $phErr;
        $hasError = true;
    } else {
        $ph = test_input($_POST["phnum"]);
    }

    // Date of Birth
    if (empty($_POST["DOB"])) {
        $DOBErr = "Date of birth is required";
        $errors[] = $DOBErr;
        $hasError = true;
    } else {
        $DOB = test_input($_POST["DOB"]);
    }

    // Gender
    if (empty($_POST["gender"])) {
        $gdrErr = "Gender is required";
        $errors[] = $gdrErr;
        $hasError = true;
    } else {
        $gdr = test_input($_POST["gender"]);
    }

    // Picture Upload
    if (empty($_FILES["myfile"]["name"])) {
        $pictureError = "Picture is required.";
        $errors[] = $pictureError;
        $hasError = true;
    } else {
        $fileName = $usrn . "--" . basename($_FILES["myfile"]["name"]);
        $picturePath = "../uploads/" . $fileName;
        $fileSize = $_FILES["myfile"]["size"];

        if ($fileSize > 2 * 1024 * 1024) {
            $pictureError = "Picture must be less than 2MB.";
            $errors[] = $pictureError;
            $hasError = true;
        } elseif (!move_uploaded_file($_FILES["myfile"]["tmp_name"], $picturePath)) {
            $pictureError = "Failed to upload picture.";
            $errors[] = $pictureError;
            $hasError = true;
        }
    }

         

    // Display result
    if (!empty($errors)) {
        echo "<div style='color: red; text-align: left; width: 60%; margin: 0 auto;'>";
        echo "<ol>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ol></div><br>";
    } else {
        echo "<div style='width: 60%; margin: 0 auto; padding: 20px; background: #dff0d8; border: 1px solid #3c763d; color: #3c763d; border-radius: 5px;'>";
        echo "<h2>Registration Successful!</h2>";
        echo "<p><strong>First Name:</strong> $fname</p>";
        echo "<p><strong>Last Name:</strong> $lname</p>";
        echo "<p><strong>Username:</strong> $usrn</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone:</strong> $ph</p>";
        echo "<p><strong>Birth Date:</strong> $DOB</p>";
        echo "<p><strong>Gender:</strong> $gdr</p>";
        echo "<p><strong>Picture:</strong> $fileName</p>";
        echo "</div><br>";

        // Insert into database
        $connobj = createCon();
        if (insertData($connobj, $fname, $lname, $usrn, $pass, $confpass, $email, $ph, $DOB, $gdr, $picturePath)) {
            echo "<p style='color: green;'>Data inserted successfully.</p>";
            // header("Location: ../view/login.php");
        } else {
            echo "<p style='color: red;'>Failed to insert data.</p>";
        }
        closeConn($connobj);
    }
}
?>
