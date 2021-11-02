<?php
$conteudo = $_POST['conteudo'];
include('db_contaus.php');
$banco = new db_contaus;
$listaConteudo = $banco->buscaCont($conteudo);
echo implode($listaConteudo);
//echo $conteudo;
 ?>