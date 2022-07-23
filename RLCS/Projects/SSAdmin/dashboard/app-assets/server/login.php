<?php
include 'app-assets/server/db-connection.php';

if(isset($_POST['userEmailAddress'])){
	if(!isset($_SESSION)) { 
		debug_to_console("Session Not Available");
		session_start(); 
		debug_to_console("Session Started");
	}else{
		debug_to_console("Session Available");
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
	$_SESSION['userPermissions'] = $row['user_permissions'];

	if(mysqli_num_rows($result)==1){

		if (isset($_SESSION['username'])) {
			debug_to_console("Session not Empty");
			header("Location: home.php");
			//echo "Welcome ".$_SESSION['username'];
		}
		
		exit();
	}
	else{
		echo "You cant login - bad login credentials.";
		exit();
	}
}
?>