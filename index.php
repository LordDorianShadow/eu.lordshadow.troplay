<?php
// Datenbankverbindung aufbauen, siehe oben...
include ("antwort.php");
	
$spalten = [
  'letsplay' => 'letsplay',
  'counterAktuell' => 'Tode aktuell',
  'counterGesamt' => 'Tode gesamt:',
];

?>
<!doctype html>
<html lang="de">
  <head>
	  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
<?php
foreach ($spalten as $name) {
  echo '<th>', htmlspecialchars($name), '</th>';
}
?>
        </tr>
      </thead>
      <tbody>
<?php


foreach($results as $result) {
  echo '<tr>';

  foreach ($spalten as $schluessel => $name) {
    echo '<td>', htmlspecialchars($result[$schluessel]), '</td>';
  }
  
  echo '</tr>';
}
?>
      <tbody>
    <table>
  </body>
</html>