<?php
include 'db-connection.php';

function getTotalPlayers(){
    $Conn = mysqli_connect('localhost', 'root', '', 'rlcstest_db');
    $query_countTotalPlayersData = "SELECT player_id FROM tb_players";
	$PlayerCount = mysqli_query($Conn, $query_countTotalPlayersData);
	$data = mysqli_num_rows($PlayerCount);
	echo $data;
}

function getTotalTeams(){
    $Conn = mysqli_connect('localhost', 'root', '', 'rlcstest_db');
    $query_countTotalTeamsData = "SELECT team_id FROM tb_teams";
	$TeamCount = mysqli_query($Conn, $query_countTotalTeamsData);
	$data = mysqli_num_rows($TeamCount);
	echo $data-1;
}

function getTotalTeamlessPlayers(){
    $Conn = mysqli_connect('localhost', 'root', '', 'rlcstest_db');
    $query_countTotalTeamlessPlayers = "SELECT player_id FROM tb_players WHERE player_teamId = 0";
	$TeamlessPlayersCount = mysqli_query($Conn, $query_countTotalTeamlessPlayers);
	$data = mysqli_num_rows($TeamlessPlayersCount);
	echo $data;
}

function getTotalAdmins(){
    $Conn = mysqli_connect('localhost', 'root', '', 'rlcstest_db');
    $query_countTotalAdmins = "SELECT user_id FROM tb_users";
	$AdminsCount = mysqli_query($Conn, $query_countTotalAdmins);
	$data = mysqli_num_rows($AdminsCount);
	echo $data;
}

function getTotalIncompleteTeams(){
    $Conn = mysqli_connect('localhost', 'root', '', 'rlcstest_db');
    $query_countTotalIncompleteTeams = "SELECT COUNT(tb_teams.team_id), tb_teams.team_id, tb_players.player_teamId
                                        FROM tb_teams 
                                        INNER JOIN tb_players ON tb_teams.team_id = tb_players.player_teamId
                                        GROUP BY tb_teams.team_id
                                        HAVING COUNT(tb_teams.team_id) < 3";
	$IncompleteTeamsCount = mysqli_query($Conn, $query_countTotalIncompleteTeams);
	$data = mysqli_num_rows($IncompleteTeamsCount);
	echo $data;
}

function GetPlayerNumbersByCountry($country){
    $Conn = mysqli_connect('localhost', 'root', '', 'rlcstest_db');
    $query_countPlayerNumbersByCountry = "SELECT player_id FROM `tb_players` WHERE player_country = '$country'";
	$PlayerNumbersByCountryCount = mysqli_query($Conn, $query_countPlayerNumbersByCountry);
	$data = mysqli_num_rows($PlayerNumbersByCountryCount);
	echo $data;
}

?>