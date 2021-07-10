<?php

include "connection.php";


$usernames = mysqli_real_escape_string($con, $_POST['usernames']);
$passwords = $_POST['passwords'];



$sql = "SELECT * FROM admin where username='{$usernames}' AND password ='{$passwords}'";

$result = mysqli_query($con, $sql) or die("Query Failed!!");

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        session_start();
        $_SESSION["username"] = $row['username'];
        $_SESSION["user_id"] = $row['user_id'];
        $_SESSION["user_role"] = $row['role'];


        //note that you can just log in by that much of code...
        // no need of above session() and user id parts and the while parts
        header("Location: dashboard.php");
    }
}else{
    echo "Check Your Username and Password Correctly !!";
}
?>