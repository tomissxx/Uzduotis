 <?php
 include 'config.php';
 include 'menu.php';

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
 	die("Prisijungimas nepavko: " . $conn->connect_error);
 }
 $sql = "SELECT * FROM client_list Where aptarnautas = 0 LIMIT 5";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
 	$i = 1;
 	while($row = $result->fetch_assoc()) {
 		$curtime = date('H:i');
 		$newtime = strtotime($curtime) + (15 * 60 * $i);

 		echo  "Nr: ".$i."  Klientas: ".$row["kliento_vardas"];
 		echo date(' H:i', $newtime)."<br>";
 		$i++;
 	}
 } else {
 	echo "Klientų nėra";
 }
 $conn->close();
 ?>
 <head>
 	<meta http-equiv="refresh" content="60">
 </head> 