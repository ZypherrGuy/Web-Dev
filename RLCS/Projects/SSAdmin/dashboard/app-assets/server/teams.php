<?php
include 'db-connection.php';


		$query_allTeamData = "SELECT * FROM `tb_teams`";
		$getAllTeamData = mysqli_query($Conn, $query_allTeamData);
?>