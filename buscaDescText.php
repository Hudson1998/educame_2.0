<?php 
$id = $_POST['id'];

include('db_contaus.php');
$banco = new db_contaus;
$listaConteudo = $banco->descricaoTexto($id);
echo json_encode($listaConteudo);
 ?>