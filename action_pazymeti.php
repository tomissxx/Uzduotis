 <?php
 include 'config.php';
 include 'menu.php';
 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
 	die("Prisijungimas nepavko: " . $conn->connect_error);
 }

 $kliento_id = $_GET["kliento_id"];
 $sql = "UPDATE `client_list`  SET `aptarnautas` = '1' WHERE `id` = $kliento_id";

 if ($conn->query($sql) === TRUE) {
 	echo "Klientas aptarnautas";
 } else {
 	echo "Klaida!: " . $conn->error;
 }

 $conn->close();
 ?>