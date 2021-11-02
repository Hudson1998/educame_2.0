<?php
include('insertTableMaterial.php');
$metodo = $_POST['metodo'];
$tSuma = new MaterialContent;

switch ($metodo) {
	case 'Adicionar':
	$id = $_POST['id'];
	$materia = $_POST['materia'];
	$modulo = $_POST['modulo'];
	echo "Acessado pagina php. Iniciando conexao com db...";
	echo $tSuma->addCont($id,$materia,$modulo);
	break;
	case 'delete':
	$id = $_POST['id'];
	echo "Acessando banco de dados.....";
	echo $tSuma->removeCount($id);
	break;
	case 'mode_edit':
	$id = $_POST['id'];
	$chave = $_POST['chave'];
	$valor = $_POST['valor'];
	echo $tSuma->alterTable($id,$chave,$valor);
	break;
	case 'pegaLista':
	echo $tSuma->mostraLista();
	break;
	default:
		# code...
	break;
}
?>