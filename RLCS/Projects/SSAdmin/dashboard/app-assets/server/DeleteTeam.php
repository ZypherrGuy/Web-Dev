<?php
include 'db-connection.php';

  $teamName = $_POST['teamNameDelete'];
  $deleteTeam="DELETE FROM tb_teams WHERE team_name = '$teamName'";

  if(mysqli_query($Conn, $deleteTeam)) {
      header("Location: http://localhost/teams.php");       
    } else {
      echo "Error: <br>" . mysqli_error($Conn);
  }

  mysqli_close($Conn);

?>