<?php
    // Verbindung mit Datenbank
    $db_link = mysqli_connect ("localhost", "root", "", "login");

    if (!$db_link)
    {
        die ("<p> Verbindung nicht hergestellt!</p>");
    }
    // Ausführen eines Befehls auf Datenbank
    function runSQL($sql)
    {
        global $db_link;
        $db_res = mysqli_query($db_link, $sql) or die("SQL-Abfrage:" . $sql . ", Fehler: " . mysqli_error($db_link));
        return $db_res;
    }
    ?>