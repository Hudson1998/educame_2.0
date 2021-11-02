<?php 
class MaterialContent{
	// atributos
	private $materia;
	private $conteudo;

	// funcoes
	function addCont($id,$materia,$modulo){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "272461";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO sumario (id,materia,modulo)
		VALUES (".$id.",'".$materia."','".$modulo."')";
		if ($conn->query($sql) === TRUE) {
			return "Arquivos adicionados com sucesso!";
		} else {
			return "Erro ao adicionar dados!";
		}
		$conn->close();
	}
	function mostraLista(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "272461";
		$lista = array();
		$num = 0;
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT id,materia,modulo FROM sumario";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$id = $row["id"];
				$materia = $row["materia"];
				$modulo = $row["modulo"];
				$adiciona = [
					"id"=>$id,
					"materia"=>$materia,
					"modulo"=>$modulo
				];
				array_push($lista,$adiciona);
			}
		} else {
			echo "0 results";
		}
		
		if($id != 0){
			return json_encode($lista);
		}else{
			return "<h2>Deu errado</h2>";
		}
		$conn->close();
	}
	function removeCount($id){
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

		$sql = "DELETE FROM `272461`.`sumario` WHERE (`id` = '".$id."')";

		if ($conn->query($sql) === TRUE) {
			return "Deletado linha do id $id";
		} else {
			return "Eroo ao excluir linha";
		}
		$conn->close();
	}
	function alterTable($id,$chave,$valor){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "272461";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "UPDATE sumario SET ".$chave."='".$valor."' WHERE id=".$id."";
		if ($conn->query($sql) === TRUE) {
			return "Alterado linha do id: $id";
		} else {
			return "Erro ao alterar linha do id: $id";
		}
		$conn->close();
	}
	// getters e setters
	function get_materia(){
		return $this->materia;
	}
	function set_materia($materia){
		$this->materia = $materia;
	}
	function get_conteudo(){
		return $this->conteudo;
	}
	function set_conteudo($conteudo){
		$this->conteudo = $conteudo;
	}
}