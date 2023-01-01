<?php
include 'db-connection.php';

	$query_allPlayerData = "SELECT tb_players.player_id, tb_players.player_smashId, tb_players.player_name, tb_players.player_ign, tb_players.player_teamId, tb_teams.team_name, tb_teams.team_logo, tb_players.player_discord, tb_players.player_country 
                FROM `tb_players` 
                INNER JOIN tb_teams ON tb_players.player_teamId = tb_teams.team_id";
	$getAllPlayerData = mysqli_query($Conn, $query_allPlayerData);


    $query_teamName = "SELECT tb_teams.team_name FROM tb_teams";
    $getTeamNameNewPlayer = mysqli_query($Conn, $query_teamName);
    $getTeamNameEditPlayer = mysqli_query($Conn, $query_teamName);
?>