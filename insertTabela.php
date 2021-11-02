<?php
$id = $_POST['id'];
$materia = $_POST['materia'];
$ano = $_POST['ano'];
$conteudo = $_POST['conteudo'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$texto = $_POST['texto'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "272461";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO estudos (idestudos,materia,ano,conteudo,titulo,descricao,texto)
VALUES ('".$id."','".$materia."','".$ano."','".$conteudo."','".$titulo."','".$descricao."','".$texto."')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
