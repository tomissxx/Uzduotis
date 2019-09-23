 <?php
include 'config.php';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM client_list;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	?>
<form method="GET" action="action_pazymeti.php">
<?php	
    
    while($row = $result->fetch_assoc()) {
    	if ($row["aptarnautas"] == 1) {
        echo 'Klientas:' . $row["kliento_vardas"].'<input type="checkbox" name="kliento_id" value="'.$row["id"].'">','(Aptarnautas)','<br>';
    } 
    else {
        echo 'Klientas:' . $row["kliento_vardas"].'<input type="checkbox" name="kliento_id" value="'.$row["id"].'"><br>';
    }
    }
    
?>
    <input type="submit" value="Patvirtinti">
</form>
<?php
}

else {
    echo "Klientų nėra";
}
$conn->close();
