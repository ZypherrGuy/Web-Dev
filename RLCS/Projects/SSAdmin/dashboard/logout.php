<?php
session_start();
session_destroy();
header("Location: login-page.php"); //to redirect back to "index.php" after logging out
exit();
?>