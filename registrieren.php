
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="login.css">
</head>

<div class="login-box">
  <h2>Registrieren</h2>
  <?php
    require("connectDB.php");
    require("loginSystem.php");
    $erg = register($_POST["benutzername"], $_POST["email"], $_POST["passwort"]);
    echo ('<p>' . $erg . '</p>');
?>
    <form action="index.php" method="POST">
      <a>
        <div class="user-box2">
            <input name="registrieren" type="submit" value="Zur Startseite" id="submit2" >
        </div>
      </a>
    </form> 
        
</div>