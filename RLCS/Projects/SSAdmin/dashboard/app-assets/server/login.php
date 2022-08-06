<?php
include 'app-assets/server/db-connection.php';

if(isset($_POST['userEmailAddress'])){
	if(!isset($_SESSION)) { 
		session_start(); 
	}else{
		debug_to_console("Active Session Detected");
	}
	
	$email = $_POST['userEmailAddress'];
	$password = $_POST['userPassword'];

	$sql = "SELECT *
			FROM tb_users 
			INNER JOIN tb_loginauth ON tb_users.user_id = tb_loginauth.user_id 
			WHERE tb_users.user_email = '$email' AND tb_loginauth.user_password = '$password'";

	$result = mysqli_query($Conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$_SESSION['username'] = $row['user_name'];
	$_SESSION['userProfilePicture'] = $row['user_image'];
	$_SESSION['userPermissions'] = $row['access_id'];

	if(mysqli_num_rows($result)==1){
		if (isset($_SESSION['username'])) {
			header("Location: home.php");
		}
		exit();
	}
	else{
		echo "You cant login - bad login credentials.";
		exit();
	}
}
?>