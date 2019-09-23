<?php
include 'config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$name = $_POST['kliento_vardas'];
$sql = "INSERT INTO client_list (kliento_vardas) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    echo "Užregistruota sėkmingai";
} else {
    echo "Įvyko klaida, kreipkitės telefonu!: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>