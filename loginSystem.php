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
            return "Ungültige E-Mail oder ungültiges Passwort.";
        }
        $row = mysqli_fetch_array($db_res);
        $_SESSION["eingeloggt"] = 1;
        $_SESSION["benutzername"] = $row["benutzername"];
        return "Login erfolgreich";
    }
?>