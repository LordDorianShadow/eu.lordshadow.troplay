<?PHP
include 'sqlZugangsdaten.php';
// Überprüfen ob über GET gesendet wurde.
//if (isset($_GET['letsplay'])) {

 // Den Zeichensatz über header() senden,
 // sonst werden Umlaute ggf. nicht richtig angezeigt.
 header('Content-Type: text/plain; charset=utf-8');
$letsplay="test"; //$_GET['letsplay'];

	echo("<html><header></header><body>Ä".$letsplay."</body></html>");
 // Anweisung definieren

$query="SELECT * FROM `test` WHERE letsplay = ".$letsplay; 

//$sql_statment = $db->prepare($query);

$results= $db->query($query);


	
//}
?>