<?php
class nome{
	function lista(){
		include('db_contaus.php');
		include('tabelaEstudo.php');
		$lista = new db_contaus;
		$linha = $lista->listaEstudo();
		printf($lista);
	}
} 

?>