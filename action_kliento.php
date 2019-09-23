<?php 
include 'config.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Nepavyko prisijungti: ".$conn->connect_error);
}
$client_id = $_GET['client_id'];
$sql = "SELECT * FROM client_list WHERE aptarnautas = 0";
$result = $conn->query($sql);
$i = 1;
foreach($result as $row) {
	if ($row["id"] == $client_id) {

		$curtime = date ('H:i');
		$newtime = strtotime($curtime) + (15 * 60 * $i);	
		echo "Klientas: ".$row["kliento_vardas"];
		echo date(' H:i', $newtime)."<br>";
		
	}
	$i++;
}
?>
<head>
	<meta http-equiv="refresh" content="5">
</head> 