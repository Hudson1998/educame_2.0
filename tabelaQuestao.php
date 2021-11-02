<?php 
class tabelaQuestao{
	public $id;
	public $materia;
	public $ano;
	public $conteudo;
	public $titulo;
	public $questao;
	public $opcao;
	public $resposta;

	function __construct($id,$materia,$ano,$conteudo,$titulo,$questao,$opcao,$resposta){
		$this->id = $id;
		$this->materia = $materia;
		$this->ano = $ano;
		$this->conteudo = $conteudo;
		$this->titulo = $titulo;
		$this->questao = $questao;
		$this->opcao = $opcao;
		$this->resposta = $resposta;
	}
	function mostraTexto(){
		echo $this->id." ";
		echo $this->materia." ";
		echo $this->ano." ";
		echo $this->conteudo." ";
		echo $this->titulo." ";
		echo $this->questao." ";
		echo $this->opcao." ";
		echo $this->resposta." ";
	}
	function montaLista(){
		echo "<td class=''>".$this->id."</td>";
		echo "<td class=''>".$this->materia."</td>";
		echo "<td class=''>".$this->ano."</td>";
		echo "<td class=''>".$this->conteudo."</td>";
		echo "<td class=''>".$this->titulo."</td>";
		echo "<td class=''>click</td>";
		echo "<td class=''>click</td>";
		echo "<td class=''>".$this->resposta."</td>";
		echo "<td>
		<i class='material-icons edit'>mode_edit</i>
		<i class='material-icons delete'>delete</i>
		</td>";
	}
}
?>
