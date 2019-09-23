 <?php
include 'config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to update a record
$kliento_id = $_GET["kliento_id"];
$sql = "UPDATE `client_list`  SET `aptarnautas` = '1' WHERE `id` = $kliento_id";

if ($conn->query($sql) === TRUE) {
    echo "Klientas aptarnautas";
} else {
    echo "Klaida!: " . $conn->error;
}

$conn->close();
?>