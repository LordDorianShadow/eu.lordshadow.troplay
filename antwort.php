
<?php
include 'sqlZugangsdaten.php';
// Überprüfen ob über GET gesendet wurde.
if (isset($_GET['suchbegriff'])) {

 // Den Zeichensatz über header() senden,
 // sonst werden Umlaute ggf. nicht richtig angezeigt.
 header('Content-Type: text/plain; charset=utf-8');
$suchbegiff=$_GET['suchbegriff'];

 // Eine Verbindung zur Datenbank aufbauen
 $verbindung = new PDO("mysql:host='localhost:';dbname=$'letsplaystodeszaehler', 'troDeathcounter', 'troplayIsALooser!11!');

 // Anweisung definieren
 $kommando = $verbindung->query('SELECT `spalte1` FROM `test` WHERE (`spalte1` LIKE :suchbegriff OR`spalte2` LIKE :suchbegriff)');

  // Den Platzhalter in der Anweisung mit dem Suchbegriff ersetzen
 $kommando->bindValue(':suchbegriff', '%' . $suchbegriff . '%');

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