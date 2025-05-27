<?php

function createCon()
{
    return mysqli_connect("localhost", "root", "","projectdata");
}

function insertData($conn, $FirstName, $LastName, $UserName, $Password, $CNFPass, $Email, $Phone, $DataOfBirth, $Gender, $Picture)
{
    $sql = "INSERT INTO data (FirstName, LastName, UserName, Password, CNFPass, Email, Phone, DataOfBirth, Gender, Picture)
            VALUES ('$FirstName', '$LastName', '$UserName', '$Password', '$CNFPass', '$Email', '$Phone', '$DataOfBirth', '$Gender', '$Picture' )";
    
    return mysqli_query($conn, $sql);
}

$conobj = createCon();

function closeConn( $conn)
{
    return mysqli_close($conn);
}


?>