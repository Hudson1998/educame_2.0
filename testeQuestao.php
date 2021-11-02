<?php 
include('db_contaus.php');
$sql = new db_contaus;
$dados = $sql->listaQuestao();
// $lista = $dados;
// echo json_encode($lista);
echo $dados[0]->montaLista();
 ?>