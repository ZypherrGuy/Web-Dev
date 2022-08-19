<?php
include 'db-connection.php';

$teamSmashID = $_POST['teamSmashIDNew'];
$teamName = $_POST['teamNameNew'];
$teamTag = $_POST['teamTagNew'];

if (getimagesize($_FILES['teamLogoNew']['tmp_name']) == false) {
        debug_to_console("No image selected!");
    } 
else {
     
    //declare variables
    $image = $_FILES['teamLogoNew']['tmp_name'];
    $image = base64_encode(file_get_contents(addslashes($image)));

    $createaTeam="INSERT INTO `tb_teams` (`team_id`, `team_smashId`, `team_name`, `team_abreviation`, `team_logo`) VALUES (NULL, '$teamSmashID', '$teamName', '$teamTag', '$image');";

    if(mysqli_query($Conn, $createaTeam)) {
        debug_to_console("Success!");
        header("Location: http://localhost/teams.php");       
      } else {
        echo "Error: <br>" . mysqli_error($Conn);
    }

    mysqli_close($Conn);
}

?>