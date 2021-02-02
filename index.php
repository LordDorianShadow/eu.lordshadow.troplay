<?PHP


include ("sqlZugangsdaten.php");
// Überprüfen ob über GET gesendet wurde.

//if (isset($_GET['letsplay'])) {

 // Den Zeichensatz über header() senden,
 // sonst werden Umlaute ggf. nicht richtig angezeigt.
 header('Content-Type: text/plain; charset=utf-8');
//$letsplay=$_GET['letsplay'];

 // Anweisung definieren

function dbaseRequest(){
$SQL_statment="SELECT * FROM test WHERE letsplay = the_medium"; 

$resultset=mysql_query($SQL_statment,$db);
$data=mysql_fetch_array($resultset);
	
	echo ("Counter" + $data['counterAktuell']);
	//echo ("Counter" + $data[counterGesammt]);
	
}
?>


<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Suchanfrage an eine Datenbank über AJAX senden und empfangen</title>

	 
<body>	 
  <script type="text/javascript">

	  doccument.write(<?php dbaseRequest();?>)

  </script>

 </head>






</body>
</html>