
<?php
include "sqlZugangsdaten.php"
// Überprüfen ob über GET gesendet wurde.
if (isset($_GET["suchbegriff"])) {

 // Den Zeichensatz über header() senden,
 // sonst werden Umlaute ggf. nicht richtig angezeigt.
 header('Content-Type: text/plain; charset=utf-8');

 // Eine Verbindung zur Datenbank aufbauen
 $verbindung = new PDO("mysql:host=$host;dbname=$dbname, $user, $passwort);

 // Anweisung definieren
 $kommando = $verbindung->prepare("SELECT *
                                   FROM `test`
                                   WHERE (`spalte1` LIKE :suchbegriff OR
                                          `spalte2` LIKE :suchbegriff)");

  // Den Platzhalter in der Anweisung mit dem Suchbegriff ersetzen
 $kommando->bindValue(':suchbegriff', '%' . $_GET["suchbegriff"] . '%');

 // Die vorbereitete Anweisung ausführen
 $kommando->execute();

 // Datensätze holen
 $datensaetze = $kommando->fetchAll(PDO::FETCH_OBJ);

 // Überprüfen ob Datensätze gefunden wurden
 if (count($datensaetze) > 0) {

  // Alle gefundenen Datensätze ausgeben
  foreach ($datensaetze as $datensatz) {
   echo '<p>' . $datensatz->spalte1 . ' - ' . $datensatz->spalte2 . '</p>';
  }
 }
 else {
  echo 'Keine Datensätze gefunden!';
 }
}
?>