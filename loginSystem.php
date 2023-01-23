<?php
    session_start();
    function register ($benutzername, $email, $passwort)
    {
        global $db_link;
        $email = mysqli_real_escape_string($db_link, $email);
        $benutzername = mysqli_real_escape_string($db_link, $benutzername);
        $passwort = md5($passwort); 
        //Benutzer schon vorhanden?
        $db_res = runSQL("SELECT COUNT(*) FROM user WHERE email = '" . $email . "'");
        $row = mysqli_fetch_array($db_res);

        if($row['COUNT(*)'] > 0)
        {
            return 'Es gibt schon einen Benutzer mit der angegebenen E-Mail Adresse';
        }
        runSQL("INSERT INTO user (email, benutzername, passwort) VALUES ('" . $email . "' , '" . $benutzername . "' , '" . $passwort . "')");
        return "Der Benutzer wurde erfolgreicht angelegt.";
    }
    function login($benutzername, $passwort)
    {
        global $db_link;
        $benutzername = mysqli_real_escape_string($db_link, $benutzername);
        $passwort = md5($passwort); 

        $db_res = runSQL("SELECT * FROM user WHERE benutzername = '" . $benutzername . "' AND passwort = '" . $passwort . "'");
        if (mysqli_num_rows($db_res) == 0)
        {
            return "Ungültiger Benutzername oder ungültiges Passwort.";
        }
        $row = mysqli_fetch_array($db_res);
        $_SESSION["eingeloggt"] = 1;
        $_SESSION["benutzername"] = $row["benutzername"];
        header("location: index.php");
        exit();
    }
    function ausleihen($benutzername, $ausgewählt)
    {
        global $db_link;
        $benutzername = mysqli_real_escape_string($db_link, $benutzername);
        $ausgewählt = mysqli_real_escape_string($db_link, $ausgewählt);
        // $res1 = mysqli_query($db_link, "SELECT ID FROM user WHERE benutzername = '" . $benutzername . "'");
        // $benutzerID = mysqli_fetch_array($res1);
        // $res2 = mysqli_query($db_link, "SELECT FID FROM fahrzeuge WHERE bezeichnung = '" . $ausgewählt . "'");
        // $fahrzeugID = mysqli_fetch_array($res2);
        $db_res = runSQL("SELECT * FROM fahrzeuge WHERE ausgeliehen IS NULL AND bezeichnung = '" . $ausgewählt . "'");
        if (mysqli_num_rows($db_res) == 0)
        {
            return "Dieses Fahrzeug ist bereits ausgeliehen.";
        }
        runSQL("INSERT INTO ausgeliehenvon (benutzername, bezeichnung) VALUES ('" . $benutzername . "' , '" . $ausgewählt . "')");     
        runSQL("UPDATE fahrzeuge SET ausgeliehen = '1' WHERE bezeichnung = '" . $ausgewählt . "'");     
        return "Roller erfolgreich ausgeliehen";
    }
    function zurückgeben($benutzername, $ausgewählt){
        global $db_link;
        $benutzername = mysqli_real_escape_string($db_link, $benutzername);
        $ausgewählt = mysqli_real_escape_string($db_link, $ausgewählt);
        $db_res = runSQL("SELECT * FROM ausgeliehenvon WHERE benutzername = '" . $benutzername . "'");
        if (mysqli_num_rows($db_res) == 0)
        {
            return "Sie haben kein Fahrzeug ausgeliehen";
        }
        runSQL("UPDATE fahrzeuge SET ausgeliehen = NULL WHERE bezeichnung = '" . $ausgewählt . "'"); 
        runSQL("DELETE FROM ausgeliehenvon WHERE benutzername = '" . $benutzername . "'");
        return "Fahrzeug erfolgreich zurückgegeben";
        
    }
    function istEingeloggt(){
        if(isset($_SESSION["eingeloggt"]) && $_SESSION["eingeloggt"] == 1){
            return true;
        }
        return false;
    }
?>