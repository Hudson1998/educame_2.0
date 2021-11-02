<html lang="pt-br">

<head>
	<meta http-equiv="cache-control" content="max-age=0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- material icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!-- font -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<!-- font icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;0,800;1,900&amp;display=swap" rel="stylesheet">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- JavaScript -->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/tabela.js"></script>
	<!--CSS-->
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/tabela.css">
	<!----------------------------------------------------------------------------------------------------->
	<title>Education</title>
</head>
<body style="background: rgb(32, 33, 36);">
	<div id="popupQuestion">
		<div class="textQuestion">
			<div class="menuEdit">
				<div class="menuLateral">
					<img onclick="" src="midia/video.png" alt="">
					<img onclick="" src="midia/image_icon.png" alt="">
					<img onclick="" src="midia/grafico.png" alt="">
					<img onclick="" src="midia/tabelas.png" alt="">
					<button type="button" class="btn btn-primary" onclick="">salvar</button>
					<button type="button" class="btn btn-danger" onclick="retornar()">Cancelar</button>
				</div>
				<div class="menuCentro">
					<button>
						<span class="material-icons-outlined">format_list_bulleted</span>
					</button>
					<button>
						<span class="material-icons-outlined">
							format_list_numbered
						</span>
					</button>
					<button>
						<span class="material-icons-outlined">
							format_list_numbered_rtl
						</span>
					</button>
					<button style="margin-left: 10px;">
						<span class="material-icons-outlined">
							format_align_left
						</span>
					</button>
					<button>
						<span class="material-icons-outlined">
							format_align_center
						</span>
					</button>
					<button>
						<span class="material-icons-outlined">
							format_align_right
						</span>
					</button>
					<button style="margin-right: 10px;">
						<span class="material-icons-outlined">
							format_align_justify
						</span>
					</button>
					<br>
					<button style="margin-top: 10px;">
						<span class="material-icons-outlined">
							format_indent_decrease
						</span>
					</button>
					<button>
						<span class="material-icons-outlined">
							format_indent_increase
						</span>
					</button>
					<button>
						<span class="material-icons-outlined">
							format_line_spacing
						</span>
					</button>
					<button>
						<span class="material-icons-outlined">
							format_color_fill
						</span>
					</button>
					<button>
						<span class="material-icons-outlined">
							border_inner
						</span>
					</button>
					<button style="
								font-size: 14px;
								width: 40px;
								height:26px;
								border: none;
								">
						<span class="material-icons-outlined" style="
								position: relative;
								font-family: 'Arial';
								font-weight: bolder;
								line-height: 34px;
								font-size: 22px;
								">
							T
						</span>
					</button>
					<button onclick="addTitulo()" style="
						font-size: 12px;
						width: 40px;
						height:26px;
						border: none;
						">
						<span class="material-icons-outlined" style="
						position: relative;
						line-height: 2px;
						font-size: 18px;
						">
							T
						</span>
					</button>
				</div>
				<div class="menuCanto">
					<select name="fontFamily" id="fontsTxt" style="
											width: 220px;
											height: 25px;
											padding: 0;
											padding-left: 10px;
											display: inline-block;
											">
						Escolha
						<option value="Arial">Arial</option>
						<option value="Century Gothic">Century Gothic</option>
						<option value="Arial">Arial</option>
						<option value="Arial">Arial</option>
						<option value="Arial">Arial</option>
						<option value="Arial">Arial</option>
						<option value="Arial">Arial</option>
					</select>
					<input type="number" value="15" style=" 
										width: 50px;
										height: 26px;
										border-radius: 2px;
										display: inline-block;
										border: none;
										margin-right: 15px;
										">
					<button style="
										font-size: 17px;
										font-weight: bold;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										">A</button>
					<button style="
										font-size: 14px;
										font-weight: bold;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										">A</button>
					<br>
					<button onclick="mudaNegrito()" style="
										font-size: 18px;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										">N</button>
					<button onclick="mudaItalic()" style="
										font-size: 18px;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										font-style: italic;
										">I</button>
					<button style="
										font-size: 18px;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										text-decoration: underline;
										">S</button>
					<button style="
										font-size: 12px;
										width: 30px;
										height:26px;
										line-height: 28px;
										border: none;
										margin-top: 10px;
										text-decoration: line-through;
										">abc</button>
					<button style="
										font-size: 18px;
										width: 40px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										">x <sup style="font-size: 10px;">2</sup></button>
					<button style="
										font-size: 18px;
										width: 40px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										">x <sub style="font-size: 10px;">2</sub></button>
					<button style="
										font-size: 12px;
										width: 40px;
										height:26px;
										border: none;
										position: relative;
										top: 5px;
										"><span style="
										font-size: 23px;
										top: 20px;
										" class="material-icons-outlined">
							border_color
						</span></button>
					<span style="
									width: 40px;
									height: 25px;
									color: white;
									text-align: center;
									font-size: 30px;
									position: relative;
									top: 7px;
									cursor: pointer;
									" class="material-icons-outlined">
						format_color_text
					</span>
					<input type="color" style="
								height: 29px;
								position: relative;
								top: 7px;
								border: none;
								">

					<button>Voltar</button>
				</div>
			</div>
			<iframe class="frameCreateQuestion" src="questionNote.html" frameborder="0"></iframe>
		</div>
		<form>
			<label id="labelIdQ" for="idQ">Id: <input id="idQ" class="form-control" type="number"></label>
			<label id="labelMateriaQ" for="materiaQ">Materia:
				<select name="materiaQ" id="materiaQ">
					<option value="" selected=""></option>
					<option value="matematica">matematica</option>
					<option value="português">português</option>
					<option value="historia">historia</option>
					<option value="geografia">geografia</option>
					<option value="ciencias">ciências</option>
					<option value="biologia">biologia</option>
					<option value="quimica">quimica</option>
					<option value="filosofia">filosofia</option>
					<option value="fisica">física</option>
					<option value="artes">artes</option>
					<option value="ingles">inglês</option>
					<option value="ed.fisica">ed.fisica</option>
					<option value="Programação">Programação</option>
				</select>
			</label>
			<br>

			<!-- Modulo Questão -->

			<label id="labelAnoQ" for="anoQ">Módulo:
				<select id="anoQ" name="ano">
					<option value="" selected=""></option>
					<option value="1° ano">1° ano</option>
					<option value="2° ano">2° ano</option>
					<option value="3° ano">3° ano</option>
					<option value="6° ano">6° ano</option>
					<option value="7° ano">7° ano</option>
					<option value="8° ano">8° ano</option>
					<option value="9° ano">9° ano</option>
					<option value="Java Script">Java Script</option>
				</select>
			</label>
			<br>

			<!-- Conteudo Questão -->

			<label id="labelConteudoQ" for="conteudoQ">Conteudo:
				<select name="selectConteuQ" id="conteudoQ">
					<option value="" selected=""></option>
					<option value="matematica">matematica</option>
					<option value="português">português</option>
					<option value="historia">historia</option>
					<option value="geografia">geografia</option>
					<option value="ciencias">ciências</option>
					<option value="biologia">biologia</option>
					<option value="quimica">quimica</option>
					<option value="filosofia">filosofia</option>
					<option value="fisica">física</option>
					<option value="artes">artes</option>
					<option value="ingles">inglês</option>
					<option value="ed.fisica">ed.fisica</option>
					<option value="Programação">Programação</option>
				</select>
			</label>
			<br>

			<!-- Titulo Questão -->

			<label id="labelTituloQ" for="tituloQ">Título:
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text questaoTitulo">Questão:</span>
					</div>
					<input id="tituloQ" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
				</div>
			</label>

			<!-- Botão avançar -->

			<button onclick="avancarQuestion()" type="button" class="btn btn-primary avancarQ">Avançar</button>

			<!-- Botão voltar -->

			<button onclick="voltarQuestao()" type="button" class="btn btn-primary voltarQ">Voltar</button>

			<!-- Botão Finalizar -->

			<button type="button" class="btn btn-success finalizarQ" disabled="disable">Finalizar</button>

		</form>
	</div>
	<div class="menu-popup">
		<div class="popTelaTexto">
			<div id="menuWord">
				<div id="editTextLeft">
					<div class="contentWord">
						<select name="fontFamily" id="fontsTxt" style="
											width: 220px;
											height: 25px;
											padding: 0;
											padding-left: 10px;
											display: inline-block;
											">
							Escolha
							<option value="Arial">Arial</option>
							<option value="Century Gothic">Century Gothic</option>
							<option value="Arial">Arial</option>
							<option value="Arial">Arial</option>
							<option value="Arial">Arial</option>
							<option value="Arial">Arial</option>
							<option value="Arial">Arial</option>
						</select>
						<input type="number" value="15" style=" 
										width: 50px;
										height: 26px;
										border-radius: 2px;
										display: inline-block;
										border: none;
										margin-right: 15px;
										">
						<button onclick="aumentarText()" style="
										font-size: 17px;
										font-weight: bold;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										">A</button>
						<button style="
										font-size: 14px;
										font-weight: bold;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										">A</button>
						<br>
						<button onclick="mudaNegrito()" style="
										font-size: 18px;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										">N</button>
						<button onclick="mudaItalic()" style="
										font-size: 18px;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										font-style: italic;
										">I</button>
						<button onclick="underlineTxt()" style="
										font-size: 18px;
										width: 30px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										text-decoration: underline;
										">S</button>
						<button onclick="tachadoTxt()" style="
										font-size: 12px;
										width: 30px;
										height:26px;
										line-height: 28px;
										border: none;
										margin-top: 10px;
										text-decoration: line-through;
										">abc</button>
						<button onclick="sobreEscritoTxt()" style="
										font-size: 18px;
										width: 40px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										">x <sup style="font-size: 10px;">2</sup></button>
						<button onclick="subEscritoTxt()" style="
										font-size: 18px;
										width: 40px;
										height:26px;
										line-height: 20px;
										border: none;
										margin-top: 10px;
										">x <sub style="font-size: 10px;">2</sub></button>
						<button onclick="marcaText()" style="
										font-size: 12px;
										width: 40px;
										height:26px;
										border: none;
										position: relative;
										top: 5px;
										"><span style="
										font-size: 23px;
										top: 20px;
										" class="material-icons-outlined">
								border_color
							</span></button>
						<span onclick="mudaCor()" id="colorMenu" style="
									width: 40px;
									height: 25px;
									color: white;
									text-align: center;
									font-size: 30px;
									position: relative;
									top: 7px;
									cursor: pointer;
									" class="material-icons-outlined">
							format_color_text
						</span>
						<input onmousemove="colorDefine()" oncontextmenu="colorDefine()" id="colorText" type="color" style="
								height: 29px;
								position: relative;
								top: 7px;
								border: none;
								">
					</div>
				</div>
				<div id="editTextRight">
					<div class="contentWord">
						<img onclick="pegaVideo()" src="midia/video.png" alt="">
						<img onclick="insertImg()" src="midia/image_icon.png" alt="">
						<img onclick="" src="midia/grafico.png" alt="">
						<img onclick="" src="midia/tabelas.png" alt="">
						<button type="button" class="btn btn-primary" onclick="cancelarTxt()">salvar</button>
						<button type="button" class="btn btn-danger" onclick="cancelarTxt()">Cancelar</button>
					</div>
				</div>
				<div id="editTextCenter">
					<div class="contentWord">
						<button  onclick="aplicaLista()">
							<span style="" class="material-icons-outlined">format_list_bulleted</span>
						</button>
						<button onclick="aplicaListaNumerada()">
							<span class="material-icons-outlined">
								format_list_numbered
							</span>
						</button>
						<button onclick="aplicaListaLetrada()">
							<span class="material-icons-outlined">
								format_list_numbered_rtl
							</span>
						</button>
						<button style="margin-left: 10px;">
							<span class="material-icons-outlined">
								format_align_left
							</span>
						</button>
						<button>
							<span class="material-icons-outlined">
								format_align_center
							</span>
						</button>
						<button>
							<span class="material-icons-outlined">
								format_align_right
							</span>
						</button>
						<button style="margin-right: 10px;">
							<span class="material-icons-outlined">
								format_align_justify
							</span>
						</button>
						<br>
						<button style="margin-top: 10px;">
							<span class="material-icons-outlined">
								format_indent_decrease
							</span>
						</button>
						<button>
							<span class="material-icons-outlined">
								format_indent_increase
							</span>
						</button>
						<button>
							<span class="material-icons-outlined">
								format_line_spacing
							</span>
						</button>
						<button>
							<span class="material-icons-outlined">
								format_color_fill
							</span>
						</button>
						<button onclick="addCode()">
							<span class="material-icons-outlined">
								code
							</span>
						</button>
						<button onclick="addTituloH2()" style="
								font-size: 14px;
								width: 40px;
								height:26px;
								border: none;
								">
							<span class="material-icons-outlined" style="
								position: relative;
								font-family: 'Arial';
								font-weight: bolder;
								line-height: 34px;
								font-size: 22px;
								">
								T
							</span>
						</button>
						<button onclick="addTitulo()" style="
						font-size: 12px;
						width: 40px;
						height:26px;
						border: none;
						">
							<span class="material-icons-outlined" style="
						position: relative;
						line-height: 30px;
						font-size: 18px;
						">
								T
							</span>
						</button>

					</div>
				</div>
			</div>
			<iframe onkeydown="getTecla(event)" src="caderno.html" id="textoFrame" frameborder="1"></iframe>=
		</div>
		<form class="popFormulario">
			<img src="midia/botao-x.png" style="
	               position: absolute;
	               width: 50px;
	               height: 50px;
	               display: flex;
	               right: -20px;
	               top: -20px;
	               " alt="">
			<label id="id" class="nomeText" for="id">Id
				<input id="tId" placeholder="1..." type="number"></label>
			<label id="materia" class="nomeText" for="materia">Materia</label>
			<select name="materia" id="sMateria">
				<option value="" selected=""></option>
				<option value="matematica">matematica</option>
				<option value="português">português</option>
				<option value="historia">historia</option>
				<option value="geografia">geografia</option>
				<option value="ciencias">ciências</option>
				<option value="biologia">biologia</option>
				<option value="quimica">quimica</option>
				<option value="filosofia">filosofia</option>
				<option value="fisica">física</option>
				<option value="artes">artes</option>
				<option value="ingles">inglês</option>
				<option value="ed.fisica">ed.fisica</option>
			</select>

			<label id="ano" class="nomeText" for="ano">Ano
				<select id="tAno" name="ano">
					<option value="" selected=""></option>
					<option value="1° ano">1° ano</option>
					<option value="2° ano">2° ano</option>
					<option value="3° ano">3° ano</option>
					<option value="6° ano">6° ano</option>
					<option value="7° ano">7° ano</option>
					<option value="8° ano">8° ano</option>
					<option value="9° ano">9° ano</option>
				</select>
			</label>
			<label id="conteudo" class="nomeText" for="conteudo">conteudo
				<input id="tConteudo" placeholder="Raiz quadrada..." type="texto"></label>
			<label id="titulo" class="nomeText" for="titulo">Titulo
				<input id="tTitulo" placeholder="A historia da raiz..." type="text"></label>
			<label id="descricao" class="areaTxt" for="decricao">Descrição</label>
			<textarea placeholder="Digite aqui a desrição..." name="descricao" id="tDescricao" cols="30" rows="10"></textarea>
			<label id="texto" class="areaTxt" for="txt">Texto</label>
			<p class="menssageTxt">Clique no botão escrever abaixo para adicionar um texto e desbloquear as outras opções Limpar e Adicionar.</p>
			<button id="telaTxt" type="button" class="btn btn-dark" onclick="escreverTxt()">Escrever</button>

			<button onclick="limparDadosForm()" id="btnCancel" type="button" class="btn btn-danger" disable="">Limpar</button>
			<button onclick="enviaDados()" type="button" id="botaoAdiciona" class="btn btn-primary" disable="">Adicionar</button>
		</form>
	</div>
	<nav id="navegacao">
		<ul class="nav-rigth nav-tabela">
			<li class="homeTable" title="home">
				<a class="topHeader tabela-home-icon" href="inicio.php">
					Home
				</a>
			</li>
			<li title="Configuração">
				<a class="setting topHeader" href="#">
					Sobre
				</a>
				<ul class="config">
					<li class="materiaSelect"><a id="tema" href="#">Tema Escuro: <span id="toggle" class="material-icons-outlined">toggle_on</span></a></li>
				</ul>
			</li>
		</ul>
		<!-- icone de menu antes da logo que aparece na funcao de responsivo -->
		<span id="menu" class="material-icons-outlined menu">
			menu
		</span>
		<a class="logoTipo" href="#">
			<span class="logoE">E</span>
			<span class="nomePrinci">Educa+</span>
		</a>
	</nav>
	<div class="submenu" style="background: rgb(46, 46, 46);">
	</div>
	<section style="float: right; display: inline; color: rgba(255, 255, 255, 0.6);">
		<!-- tabela de sumario -->
		<h4>Tabela de informações do sistema</h4>
		<button id="btnAdd" type="button" class="btn btn-primary">Adicionar</button>
		<table class="table table-hover table-dark tabelaSistema">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">Id</th>
					<th scope="col">Materia</th>
					<th scope="col">Ano</th>
					<th scope="col">Conteudo</th>
					<th scope="col">Titulo</th>
					<th scope="col">Descricao</th>
					<th scope="col">Texto</th>
					<th scope="col" width="100px"></th>
				</tr>
			</thead>
			<tbody id="tableMatEstudos">
				<?php
				include('db_contaus.php');
				$db = new db_contaus;
				$lista = $db->listaEstudo();
				for ($i = 0; $i < count($lista); $i++) {
					echo "<tr>";
					echo "<td></td>";
					echo $lista[$i]->montaLista();
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
		<h4>Tabela Sumário</h4>
		<button id="btnAddMat" type="button" class="btn btn-success btnTableMat">Adicionar</button>
		<input class="cxTabela t1" type="number" placeholder="id">
		<input class="cxTabela t2" type="text" placeholder="materia"><input class="cxTabela t3" type="text" placeholder="modulo">
		<table class="table table-hover table-dark">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">Id</th>
					<th scope="col">Matéria</th>
					<th scope="col">Módulo</th>
					<th scope="col" width="100px"></th>
				</tr>
			</thead>
			<tbody class="tabelaGuia">
				<tr>
					<td>
					</td>
					<td class="tabId">1</td>
					<td class="tabMateria">Programação</td>
					<td class="tabModulo">Java Script</td>
					<td><i class="material-icons btnTableMat">mode_edit</i>
						<i class="material-icons btnTableMat">delete</i>
					</td>
				</tr>
			</tbody>
		</table>
		<h4>Questões</h4>
		<button onclick="adicionarQuestion()" id="btnAdicionaQuestao" type="button" class="btn btn-primary">Adicionar</button>
		<table class="table table-hover table-dark">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">Id</th>
					<th scope="col">Matéria</th>
					<th scope="col">Ano</th>
					<th scope="col">Conteúdo</th>
					<th scope="col">Título</th>
					<th scope="col">Questão</th>
					<th scope="col">Opção</th>
					<th scope="col">Resposta</th>
					<th scope="col" width="100px"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$listaQuestion = $db->listaQuestao();
				for ($c = 0; $c < count($listaQuestion); $c++) {
					echo "<tr>";
					echo "<td></td>";
					echo $listaQuestion[$c]->montaLista();
					echo "</tr>";
				}
				?>
				</tr>
			</tbody>
		</table>
	</section>
	<script>
	</script>
	<footer class="footer">
		<div class="copyFooter">
			<span class="material-icons-outlined copyIcon">
				copyright
			</span>
			2021 by educamais.com.br
		</div>
		<div class="listasFooter">
			<ul class="listaPrinciF">
				<li class="tituloF"><span><span class="logoE" style="color: #8C47DA">E</span>Educa+</span>
					<hr>
					<ul>
						<li>Privacidade</li>
						<li>Termos de serviços</li>
						<li>Objetivo do site</li>
						<li>Dados enviados</li>
						<li>Criptografia</li>
					</ul>
				</li>
				<li class="tituloF"><span>Desenvolvimento</span>
					<hr>
					<ul>
						<li>Design</li>
						<li>Planejamento</li>
						<li>Front-End</li>
						<li>Tenologias Usadas</li>
						<li>Sugestões</li>
						<li>Segurança</li>
					</ul>
				</li>
				<li class="tituloF"><span>Ajuda</span>
					<hr>
					<ul>
						<li>Fraude</li>
						<li>Dados Roubados</li>
						<li>Propagandas abusivas</li>
						<li>Ofensas online</li>
						<li>Ameaças</li>
					</ul>
				</li>
				<li class="tituloF"><span>Contato</span>
					<hr>
					<ul>
						<li>Email: <a href="#">educa+@gmail.com</a></li>
						<li>Tel: <a href="#">(31)98316-0515</a></li>
						<li>Cep: <a href="#">32341-420</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script>
	</script>
</body>
</html>