<?PHP
$user = "troDeathcounter";        //Hier den usernamen f¸r ihre Mysql Datenbank eintragen
$passw = "troplayIsALooser!11!";           //Hier das Passwort zu ihrer Mysql Datenbank eintragen
$host = "localhost:3306";     //Hier muss der Host ihrer Mysql Datenbank eingetragen werden
$database = "letsplaystodeszaehler";    //Geben Sie hier die Datenbank an in welche Sie die Tabelle installieren/
/*//Connect 
    $db = @mysql_connect($host, $user, $passw)
    or die ("Verbindungsaufnahme NICHT Erfolgreich!<br>Bitte gehen Sie nochmal zurück.<br>Sollte es immer noch nicht gehen, dann schreiben Sie mir doch bitte eine Mail.");
    @mysql_select_db($database)
    or die ("Verbindungsaufnahme mit Datenbank NICHT Erfolgreich!<br>Bitte gehen Sie nochmal zurück.<br>Sollte es immer noch nicht gehen, dann schreiben Sie mir doch bitte eine Mail.");
//Connect!!ED!!*/
try {
$dsn ='mysql:host='.$host.';dbname='.$database.';charset=utf8';
$db = new PDO($dsn, $user, $passw);
} catch (Exception $e){ die("Verbindungsaufnahme NICHT Erfolgreich!<br>Bitte gehen Sie nochmal zurück.<br>Sollte es immer noch nicht gehen, dann schreiben Sie mir doch bitte eine Mail.");
}
?>
