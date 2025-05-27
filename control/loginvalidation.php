<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usrn = $_POST["usrname"];
    $pass = $_POST["pass"];

    if (empty($usrn)) {
        $usrnErr = "Username is required";
    }

    if (empty($pass)) {
        $passErr = "Password is required";
    }

    if (empty($usrnErr) && empty($passErr)) {
        $conn = mysqli_connect("localhost", "root", "", "projectdata");

        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $usrn = mysqli_real_escape_string($conn, $usrn);
        $pass = mysqli_real_escape_string($conn, $pass);

        $sql = "SELECT * FROM data WHERE UserName='$usrn' AND Password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            header("Location: ../view/Customer_Sign_Up.php");
            exit();
        } else {
            $outputMessage = "<span class='error'>Invalid username or password.</span>";
        }

        mysqli_close($conn);
    }
}
?>



