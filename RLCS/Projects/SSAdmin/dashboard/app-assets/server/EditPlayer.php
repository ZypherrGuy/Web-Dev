<?php
include 'db-connection.php';

    $smashID = $_POST['smashIDEdit'];
	  $fullName = $_POST['fullnameEdit'];
    $ign = $_POST['ignEdit'];

    if(!empty($_POST['teams-dropdownEdit'])){
        $selectTeam = $_POST['teams-dropdownEdit'];
    }else{
        $selectTeam = 0;
    }

    $discord = $_POST['discordEdit'];
	  $country = $_POST['countryEdit'];
   
    if($selectTeam != 0){
        $getTeamId = "SELECT team_id from tb_teams WHERE team_name = '$selectTeam'";
        $result = mysqli_query($Conn, $getTeamId);
        $teamIdValue = mysqli_fetch_array($result);
        $teamId = $teamIdValue['team_id'];
    }else{
        $teamId = 0;
    }

    $editPlayer="UPDATE tb_players SET player_smashId = '$smashID', player_name = '$fullName', player_ign = '$ign', player_teamId = '$teamId', player_discord = '$discord', player_country = '$country' WHERE player_name = '$fullName'";

    if(mysqli_query($Conn, $editPlayer)) {
        header("Location: http://localhost/players.php");       
      } else {
        echo "Error: <br>" . mysqli_error($Conn);
    }

    mysqli_close($Conn);
?>