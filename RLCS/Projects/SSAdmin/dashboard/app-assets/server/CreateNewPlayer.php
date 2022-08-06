<?php
include 'db-connection.php';

    $smashID = $_POST['smashID'];
	$fullName = $_POST['fullName'];
    $ign = $_POST['ign'];

    if(!empty($_POST['teams-dropdown'])){
        $selectTeam = $_POST['teams-dropdown'];
    }else{
        $selectTeam = 0;
    }

    $discord = $_POST['discord'];
	$country = $_POST['country'];
   
    if($selectTeam != 0){
        $getTeamId = "SELECT team_id from tb_teams WHERE team_name = '$selectTeam'";
        $result = mysqli_query($Conn, $getTeamId);
        $teamIdValue = mysqli_fetch_array($result);
        $teamId = $teamIdValue['team_id'];
    }else{
        $teamId = 0;
    }

    $createPlayer="INSERT INTO `tb_players` (`player_id`, `player_smashId`, `player_name`, `player_ign`, `player_teamId`, `player_discord`, `player_country`) VALUES (NULL, '$smashID', '$fullName', '$ign', '$teamId', '$discord', '$country');";

    if(mysqli_query($Conn, $createPlayer)) {
        header("Location: http://localhost/players.php");       
      } else {
        echo "Error: <br>" . mysqli_error($Conn);
    }

    mysqli_close($Conn);
?>