<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="login.css">
</head>
<!-- Login Funktion -->
<div class="login-box">
  <h2><?php 
    require("connectDB.php");
    require("loginSystem.php");
    $erg = login ($_POST["benutzername"], $_POST["passwort"]);
    echo ("<p>" . $erg . "</p>");
?></h2>

</div>