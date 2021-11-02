<?php 
$id = $_POST['id'];
$chave = $_POST['chave'];
$valor = $_POST['valor'];
include('db_contaus.php');
$meuBanco = new db_contaus;
$result = $meuBanco->updateResult($id,$chave,$valor);
echo "Resultado: ".$result;
?>