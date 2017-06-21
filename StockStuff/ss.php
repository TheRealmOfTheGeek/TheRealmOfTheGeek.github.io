
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stocks";

$sym = $_POST['symbol'];
$pro = $_POST['pro'];
$lw = $_POST['lw'];
$id = 1;
// Create connecho $_POST['orderid'];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$sql = "INSERT INTO utables (symbol, profit, lw, user_id)
	VALUES ('$sym', '$pro', '$lw', '$id')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>

hi
