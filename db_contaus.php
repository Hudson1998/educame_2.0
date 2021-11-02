	<?php 
	include('tabelaEstudo.php');
	include('tabelaQuestao.php');
	class db_contaus{
		function updateResult($id,$chave,$valor){
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
			$sql = "UPDATE estudos SET ".$chave."='".$valor."' WHERE idestudos=".$id."";

			if ($conn->query($sql) === TRUE) {
				return "atualização bem sucessida...";
			} else {
				return "Ocorreu um erro na atualização...: ";
			}

		}
		function facaLogin($user,$pass){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "272461";
			$email = "";
			$senha = "";

// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT email, senha FROM login";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
  // output data of each row
				while($row = $result->fetch_assoc()) {
					$email = $row["email"];
					$senha = $row["senha"];
				}
			} else {
				echo "0 results";
			}
			if($user == $email and $senha == $pass){
				return true;
			}else{
				return false;
			}

		}
		function listaEstudo(){
			$listaEstudos = array();
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
			$num = 0;
			$id = "";
			$materia = "";
			$ano = "";
			$conteudo = "";
			$titulo = "";
			$descricao = "";
			$texto = "";
			$sql = "SELECT idestudos,materia,ano,conteudo,titulo,descricao,texto FROM estudos";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$id = $row["idestudos"];
					$materia = $row["materia"];
					$ano = $row["ano"];
					$conteudo = $row["conteudo"];
					$titulo = $row["titulo"];
					$descricao = $row["descricao"];
					$texto = $row["texto"];
					$minhaLista[$num] = new tabelaEstudo($id,$materia,$ano,$conteudo,$titulo,$descricao,$texto);
					array_push($listaEstudos, $minhaLista[$num]);
					$num++;
				}
			} else {
				echo "0 results";
			}
			if($id != 0){
				return $listaEstudos;
			}else{
				return false;
			}
		}	
		function listaQuestao(){
			$listaQuestao = array();
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
			$num = 0;
			$id = "";
			$materia = "";
			$ano = "";
			$conteudo = "";
			$titulo = "";
			$questao = "";
			$opcao = "";
			$resposta = "";
			$sql = "SELECT id,materia,ano,conteudo,titulo,questao,opcao,resposta FROM question";
			try {
				$result = $conn->query($sql);
			} catch (Exception $e) {
			}
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$id = $row["id"];
					$materia = $row["materia"];
					$ano = $row["ano"];
					$conteudo = $row["conteudo"];
					$titulo = $row["titulo"];
					$questao = $row["questao"];
					$opcao = $row["opcao"];
					$resposta = $row["resposta"];
					$minhaLista[$num] = new tabelaQuestao($id,$materia,$ano,$conteudo,$titulo,$questao,$opcao,$resposta);
					array_push($listaQuestao, $minhaLista[$num]);
					$num++;
				}
			} else {
				echo "0 results";
			}
			if($id != 0){
				return $listaQuestao;
			}else{
				return false;
			}
		}
		function listaConteudo($anoSelect,$materiaSelect){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "272461";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$conteudo = "";
			$listaCont[] = "";
			$sql = "SELECT conteudo FROM estudos
			where ano = '".$anoSelect."' and materia ='".$materiaSelect."'";
			$result = $conn->query($sql);
			$num = 0;
		//Pegando todos os anos de determinada materia
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$conteudo = $row["conteudo"];
					$listaCont[$num] = $conteudo;
					$num ++;
				}
			} else {
				echo "0 results";
			}

			if($conteudo != ""){
				return $listaCont;
			}else{
				return false;
			} 
		}
		function listaAno($materia){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "272461";
// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection; m
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$id = "";
			$materiaEstd = "";
			$ano = "";
			$conteudo = "";
			$titulo = "";
			$descricao = "";
			$texto = "";
			$pegaAnoSql[] = "";
			$num = 0;
			$sql = "SELECT DISTINCT ano FROM estudos
			where materia = '".$materia."'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$ano = $row["ano"];
					$pegaAnoSql[$num] = $ano;
					$num ++;
				}
			} else {
				echo 0;
			}
			$listAno = array_unique($pegaAnoSql);
			if ($ano != "") {
				return $listAno;
			}else{
				return 0;
			}
		}
		function buscaCont($conteudo){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "272461";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT conteudo,titulo,descricao,texto FROM estudos
			where conteudo = '".$conteudo."'";
			$result = $conn->query($sql);
			$num = 0;
			$contentHome[] = "";
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {				
					$texto = $row["texto"];				
					array_push($contentHome,
						"<p>".$texto."</p>");
				}
			} else {
				echo "0 results";
			}

			if($conteudo != ""){
				return $contentHome;
			}else{
				return false;
			} 
		}
		function descricaoTexto($id){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "272461";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT descricao,texto FROM estudos
			where idestudos = '".$id."'";
			$result = $conn->query($sql);
			$num = 0;
			$cont = "";
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$descricao = $row["descricao"];
					$texto = $row["texto"];	
					$cont = [
						"descricao"=>$descricao,
						"texto"=>$texto
					];
				}
			} else {
				echo "0 results";
			}

			if($cont != ""){
				return $cont;
			}else{
				return false;
			} 
		}
	}
?>