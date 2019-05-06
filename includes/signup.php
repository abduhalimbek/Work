<?php

/*Creating connection to DB*/

$serverName = localhost;
$dbUsername = "root";
$dbPassword = "toor";
$dbName = "SignUp";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['mail'];

    if (empty($firstName) || empty($lastName) || empty($email)){
        header("Location: ../index.php?error=emptyfields&fnm=".$firstName."&lnm=".$lastName."&mail=".$email);
        exit();
    }
    else{
        $sql = "INSERT INTO users (FirstName, LastName, Email) VALUES (?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else{

            mysqli_stmt_bind_param($stmt, "sss", $firstName, $lastName,$email);
            mysqli_stmt_execute($stmt);
            header("Location: ../includes/success.php");
            exit();

        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}else{
    header("Location: ..index.php");
    exit();
}
