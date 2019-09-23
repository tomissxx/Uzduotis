<?php
include 'config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);}
	$name = $_POST['kliento_vardas'];
	$sql = "INSERT INTO client_list (kliento_vardas) VALUES ('$name')";

	if ($conn->query($sql) === TRUE) {
		echo "Užregistruota sėkmingai","<br>","Jūsų kliento ID:".$conn->insert_id;
	} else {
		echo "Įvyko klaida, kreipkitės telefonu!: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?>