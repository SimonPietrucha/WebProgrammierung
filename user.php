    <!DOCTYPE html>
    <html>
    <head>
      <link rel="stylesheet" href="login.css">
    </head>
    
    <div class="login-box">
      <h1> User </h1>
          <p> Hier sind die Personen </p>
    <?php
        	require("connectDB.php");
            $db_res = mysqli_query($db_link, "SELECT Benutzername, Mail FROM user")
                or die("Fehler: " . mysqli_error($db_link));

            
            while($row = mysqli_fetch_array($db_res))
            {
                echo("<p>" . $row["Benutzername"] . "</p>");
                echo("<p>" . $row["Mail"] . "</p>");
            }

    ?>
    </div>
