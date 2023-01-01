<?php
include 'db-connection.php';

		$query_allTeamData = "SELECT * FROM `tb_teams`";
		$getAllTeamData = mysqli_query($Conn, $query_allTeamData);

		function getNumberofPlayers($TeamName){
			$Conn = mysqli_connect('localhost', 'root', '', 'rlcstest_db');
			$query_countTeamPlayersData = "SELECT player_name FROM tb_players WHERE tb_players.player_teamId = (Select tb_teams.team_id FROM tb_teams WHERE tb_teams.team_name ='$TeamName')";
			$PlayerCount = mysqli_query($Conn, $query_countTeamPlayersData);
			$row = mysqli_num_rows($PlayerCount);
			echo $row;
		}
		

?>