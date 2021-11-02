<?php 
class tabelaEstudo{
	public $id;
	public $materia;
	public $ano;
	public $conteudo;
	public $titulo;
	public $descricao;
	public $texto;

//Constructor
	function __construct($id,$materia,$ano,$conteudo,$titulo,$descricao,$texto){
		$this->id = $id;
		$this->materia = $materia;
		$this->ano = $ano;
		$this->conteudo = $conteudo;
		$this->titulo = $titulo;
		$this->descricao = $descricao;
		$this->texto = $texto;
	}
	function mostraTexto(){
		echo $this->id."<br>".$this->materia."<br>".$this->ano."<br>".$this->conteudo."<br>".$this->titulo."<br>".$this->descricao."<br>".$this->texto."<br>";
	}
	function montaLista(){
		echo "<td class='tdId'>".$this->id."</td>";
		echo "<td class='tdMateria'>".$this->materia."</td>";
		echo "<td class='tdAno'>".$this->ano."</td>";
		echo "<td class='tdConteudo'>".$this->conteudo."</td>";
		echo "<td class='tdTitulo'>".$this->titulo."</td>";
		echo "<td class='tdDescricao'>click</td>";
		echo "<td class='tdTexto'>click</td>";
		echo "<td>
		<i class='material-icons edit'>mode_edit</i>
		<i class='material-icons delete'>delete</i>
		</td>";
	}
// Getter and Setters
	function get_id(){
		return $this->id;
	}
	function set_id($id){
		$this->id = $id;
	}
	function get_materia(){
		return $this->materia;
	}
	function set_materia($materia){
		$this->id = $materia;
	}
	function get_ano(){
		return $this->ano;
	}
	function set_ano($ano){
		$this->id = $ano;
	}
	function get_conteudo(){
		return $this->conteudo;
	}
	function set_conteudo($conteudo){
		$this->conteudo = $conteudo;
	}
	function get_titulo(){
		return $this->texto;
	}
	function set_titulo($titulo){
		$this->id = $titulo;
	}
	function get_descricao(){
		return $this->texto;
	}
	function set_descricao($descricao){
		$this->id = $descricao;
	}
	function get_texto(){
		return $this->texto;
	}
	function set_texto($texto){
		$this->id = $texto;
	}
}
?>