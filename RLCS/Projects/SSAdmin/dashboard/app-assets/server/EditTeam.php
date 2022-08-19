<?php
include 'db-connection.php';

$teamSmashID = $_POST['teamSmashIDEdit'];
$teamName = $_POST['teamNameEdit'];
$teamTag = $_POST['teamTagEdit'];

$editTeam ="UPDATE tb_teams SET team_name = '$teamName', team_abreviation = '$teamTag' WHERE team_smashId = '$teamSmashID'";

if(mysqli_query($Conn, $editTeam)) {
   header("Location: http://localhost/teams.php");       
} else {
  echo "Error: <br>" . mysqli_error($Conn);
}

mysqli_close($Conn);

?>