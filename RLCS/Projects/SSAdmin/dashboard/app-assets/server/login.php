<?php
session_start();
include "db-connection.php";

$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
debug_to_console("Submit Clicked!");

if (empty($_POST['userEmail']) || empty($_POST['userPassword'])) {
debug_to_console("Empty Fields!");
}
else
{
debug_to_console("Not EmptyFields!");
// Define $UserEmail and $password
$UserEmail=$_POST['userEmail'];
$password=$_POST['userPassword'];

// To protect MySQL injection for Security purpose
$UserEmail = stripslashes($UserEmail);
$password = stripslashes($password);
$UserEmail = mysql_real_escape_string($UserEmail);
$password = mysql_real_escape_string($password);


// SQL query to fetch information of registerd users and finds user match.
$query = $sql = "SELECT tb_users.user_id, tb_users.user_name, tb_users.user_email, tb_users.user_ign, tb_users.user_image, tb_loginauth.user_password 
FROM tb_users 
INNER JOIN tb_loginauth ON tb_users.user_id = tb_loginauth.user_id 
WHERE tb_users.user_email = '$userEmail' AND tb_loginauth.user_password = '$userPassword'";

$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['user_email']=$UserEmail; // Initializing Session
header("location: home.php"); // Redirecting To Other Page
} else {
$error = "Email or Password is invalid";
}
}




}

debug_to_console("End!");
?>