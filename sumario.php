<?php
$materia = $_POST['materia'];
$texto[] = "";
include('db_contaus.php');
$x = new db_contaus;
$lista = $x->listaAno($materia);
if ($lista == 0) {
	echo "deu erro";
}else{
	array_push($texto,"<ul class='listaPrincipal'>");
	for ($i=0; $i < count($lista); $i++) { 
		array_push($texto,"<li><a class='itemPrinci' href='#'>".$lista[$i]."<i class='fa fa-chevron-down'></i></a>");
		$listaC = $x->listaConteudo($lista[$i],$materia);
		array_push($texto, "<ul class='itemSecun'>");
		for ($c=0; $c < count($listaC); $c++) { 
			array_push($texto,"<li><a href='#' onclick='buscaContMateria()' class='sub-item'>".$listaC[$c]."</a></li>");
		}
		array_push($texto,"</li></ul>");
	}
	array_push($texto,"</ul>");

	echo implode($texto);
}
?>