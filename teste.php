<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = '272461';
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM estudos";
	$result = $conn->query($sql);


	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row["idestudos"];
		}
	} else {
		echo "0 results";
	}
	?>

</body>
</html>