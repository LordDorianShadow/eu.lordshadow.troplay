<?PHP
include 'sqlZugangsdaten.php';
// Überprüfen ob über GET gesendet wurde.
if (isset($_GET['letsplay'])) {

 // Den Zeichensatz über header() senden,
 // sonst werden Umlaute ggf. nicht richtig angezeigt.
 header('Content-Type: text/plain; charset=utf-8');
$letsplay=$_GET['letsplay'];

	echo($letsplay)
 // Anweisung definieren

$SQL_statment="SELECT * FROM test WHERE letsplay = ".$letsplay; 

$resultset=mysql_query($SQL_statment);
$data=mysql_fetch_array($resultset);
	
	echo ("Counter" + $data[counterAktuell]);
	echo ("Counter" + $data[counterGesammt]);
	
}
?>