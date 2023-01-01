<?php
include 'db-connection.php';

    $playerName = $_POST['fullnameDelete'];
    $deletePlayer="DELETE FROM tb_players WHERE player_name = '$playerName'";

    if(mysqli_query($Conn, $deletePlayer)) {
        header("Location: http://localhost/players.php");       
      } else {
        echo "Error: <br>" . mysqli_error($Conn);
    }

    mysqli_close($Conn);
?>