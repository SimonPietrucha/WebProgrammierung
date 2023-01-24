<?php
    session_start();
    //Auf Website registrieren 
    function register ($benutzername, $email, $passwort)
    {
        global $db_link;
        //Variablen festlegen
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
        //Benutzer in Datenbank speichern
        runSQL("INSERT INTO user (email, benutzername, passwort) VALUES ('" . $email . "' , '" . $benutzername . "' , '" . $passwort . "')");
        return "Der Benutzer wurde erfolgreicht angelegt.";
    }
    //Einloggen
    function login($benutzername, $passwort)
    {
        global $db_link;
        //Variablen festlegen
        $benutzername = mysqli_real_escape_string($db_link, $benutzername);
        $passwort = md5($passwort); 
        //Benutzername oder Passwort falsch?
        $db_res = runSQL("SELECT * FROM user WHERE benutzername = '" . $benutzername . "' AND passwort = '" . $passwort . "'");
        if (mysqli_num_rows($db_res) == 0)
        {
            return "Ungültiger Benutzername oder ungültiges Passwort.";
        }
        //Benutzer einloggen
        $row = mysqli_fetch_array($db_res);
        $_SESSION["eingeloggt"] = 1;
        $_SESSION["benutzername"] = $row["benutzername"];
        header("location: index.php");
        exit();
    }
    //Fahrzeug ausleihen
    function ausleihen($benutzername, $ausgewählt)
    {
        global $db_link;
        //Variablen festlegen
        $benutzername = mysqli_real_escape_string($db_link, $benutzername);
        $ausgewählt = mysqli_real_escape_string($db_link, $ausgewählt);
        //Ist das ausgewählte Fahrzeug bereits ausgeliehen?
        $db_res = runSQL("SELECT * FROM fahrzeuge WHERE ausgeliehen IS NULL AND bezeichnung = '" . $ausgewählt . "'");
        if (mysqli_num_rows($db_res) == 0)
        {
            return "Dieses Fahrzeug ist bereits ausgeliehen.";
        }
        //Ausleihe in Datenbank festhalten
        runSQL("INSERT INTO ausgeliehenvon (benutzername, bezeichnung) VALUES ('" . $benutzername . "' , '" . $ausgewählt . "')");     
        runSQL("UPDATE fahrzeuge SET ausgeliehen = '1' WHERE bezeichnung = '" . $ausgewählt . "'");     
        return "Roller erfolgreich ausgeliehen";
    }
    // Fahrzeug zurückgeben
    function zurückgeben($benutzername, $ausgewählt){
        global $db_link;
        //Variablen festlegen
        $benutzername = mysqli_real_escape_string($db_link, $benutzername);
        $ausgewählt = mysqli_real_escape_string($db_link, $ausgewählt);
        //Hat der Benutzer ein Fahrzeug ausgeliehen?
        $db_res = runSQL("SELECT * FROM ausgeliehenvon WHERE benutzername = '" . $benutzername . "' AND bezeichnung = '" . $ausgewählt . "'");
        if (mysqli_num_rows($db_res) == 0)
        {
            return "Sie haben dieses Fahrzeug nicht ausgeliehen";
        }
        //Beenden der Ausleihe an Datenbank übergeben
        runSQL("UPDATE fahrzeuge SET ausgeliehen = NULL WHERE bezeichnung = '" . $ausgewählt . "'"); 
        runSQL("DELETE FROM ausgeliehenvon WHERE benutzername = '" . $benutzername . "'");
        return "Fahrzeug erfolgreich zurückgegeben";
        
    }
    //Überprüfen ob Benutzer eingeloggt ist
    function istEingeloggt(){
        if(isset($_SESSION["eingeloggt"]) && $_SESSION["eingeloggt"] == 1){
            return true;
        }
        return false;
    }
?>