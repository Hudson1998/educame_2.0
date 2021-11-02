function filterInt(string) {
	var numsStr = string.replace(/[^0-9]/g, '');
	return parseInt(numsStr);
}
$(document).ready(function () {
	$('form img').on('click', function () {
		$('.menu-popup').css({
			"position": "relative",
			"display": "none",
			"z-index": "-10"
		})
		cancelarForm()
		valueIdTable()
	})
	$(".itemPrinci").on('click', function () {
		if ($(this).next().css('visibility') == "hidden") {
			$(this).next().css({
				"height": "auto",
				"max-height": "1500px",
				"visibility": "visible",
				"position": "relative",
				"transition": "all .3s"
			})
			$(this).find('i').css('transform', 'translateY(-50%) rotate(-180deg)');
		} else {
			$(this).next().css({
				"max-height": "0",
				"position": "relative",
				"visibility": "hidden",
				"overflow": "hidden",
				"transition": "all .1s"

			});
			$(this).find('i').css('transform', 'translateY(-50%)');
			valueIdTable()
		}
	});
	$('#btnAdd').on('click', function () {
		$('.menu-popup').css({
			"position": "fixed",
			"display": "block",
			"z-index": "10"
		})
		valueIdTable()
	})
});


function encerraMenupop() {
	$('.menu-popup').css({
		"position": "relative",
		"display": "none",
		"z-index": "-10"
	})
	$('#tId').val("");
	$('#sMateria').val("")
	$('#tAno').val("")
	$('#tConteudo').val("")
	$('#tTitulo').val("")
	$('#tDescricao').val("")
	$('#tTexto').val("")
}
function updateDb(id, chave, valor) {
	$.ajax({
		url: "updateSql.php",
		method: "POST",
		data: {
			id: id,
			chave: chave,
			valor: valor
		},
		success: function (response) {
			console.log(response)
		}
	})
}
var objeto1 = ""
var objeto2 = ""
function comparandoDados() {
	$(document).ready(function () {
		var idEstudos = $('#tId').val();
		var id = $('#tId').val()
		var materia = $('#sMateria').val()
		var ano = $('#tAno').val()
		var conteudo = $('#tConteudo').val()
		var titulo = $('#tTitulo').val()
		var descricao = $('#tDescricao').val()
		var texto = document.getElementById('textoFrame').contentWindow.document.body.innerHTML
		objeto2 = {
			"id": id,
			"materia": materia,
			"ano": ano,
			"conteudo": conteudo,
			"titulo": titulo,
			"descricao": descricao,
			"texto": texto
		}
		var lista1 = Object.entries(objeto1);
		var lista2 = Object.entries(objeto2);
		function teste(list1, list2) {
			for (var i = 0; i < list1.length; i++) {
				var num1 = list1[i][1]
				var num2 = list2[i][1]
				if (num1 != num2) {
					var cabecalho = list2[i][0]
					var atual = num2
					console.log('Conteudo diferente...')
					console.log(cabecalho + ":" + atual)
					updateDb(idEstudos, cabecalho, atual)
				}
			}
		}
		teste(lista1, lista2)
		encerraMenupop()
	})
}
function editarDados() {

	$(document).ready(function () {
		$('.edit').click(function () {
			var id = $(this).parent().siblings('.tdId').text()
			var materia = $(this).parent().siblings('.tdMateria').text()
			var ano = $(this).parent().siblings('.tdAno').text()
			var conteudo = $(this).parent().siblings('.tdConteudo').text()
			var titulo = $(this).parent().siblings('.tdTitulo').text()
			var descricao = ""
			var texto = ""
			var lista = ""
			$.ajax({
				url: 'buscaDescText.php',
				type: 'POST',
				data: { id: id },
				success: function (response) {
					lista = JSON.parse(response)
					descricao = lista.descricao;
					texto = lista.texto;
					$('#tId').val(id);
					$('#sMateria').val(materia)
					$('#tAno').val(ano)
					$('#tConteudo').val(conteudo)
					$('#tTitulo').val(titulo)
					$('#tDescricao').val(descricao)
					document.getElementById('textoFrame').contentWindow.document.body.innerHTML = texto;
					objeto1 = {
						"id": id,
						"materia": materia,
						"ano": ano,
						"conteudo": conteudo,
						"titulo": titulo,
						"descricao": descricao,
						"texto": texto
					}
					//console.log(objeto1)
				}
			})

			$('.menu-popup').css({
				"position": "fixed",
				"display": "block",
				"z-index": "10"
			})
			$("#botaoAdiciona").attr({
				'onclick': 'comparandoDados()'
			})
			$("#btnCancel").attr({
				'onclick': 'cancelarForm()'
			})
			$("#telaTxt").attr({
				'onclick': 'editarTextoFrame()'
			})
			$('#botaoAdiciona').text('Salvar')
			$('#btnCancel').text('cancelar')

		})
	})
}

function excluiDados() {
	$(document).ready(function () {
		$('.delete').click(function () {
			var id = $(this).parent().siblings('.tdId').text()
			console.log(id)
			$.ajax({
				url: "deleteRow.php",
				type: "POST",
				data: {
					id: id
				}
			})
			$(this).parents('tr').remove();
		})
	})
}
excluiDados()
function enviaDados() {
	var id = document.getElementById("tId").value;
	var materia = document.getElementById("sMateria").value;
	var ano = document.getElementById("tAno").value;
	var conteudo = document.getElementById("tConteudo").value;
	var titulo = document.getElementById("tTitulo").value;
	var descricao = document.getElementById("tDescricao").value;
	var texto = document.getElementById("textoFrame").contentWindow.document.body.innerHTML;
	console.log(descricao)
	console.log(texto)
	$.ajax({
		url: "insertTabela.php",
		type: "POST",
		data: {
			id: id,
			materia: materia,
			ano: ano,
			conteudo: conteudo,
			titulo: titulo,
			descricao: descricao,
			texto: texto
		}
	})
	console.log("dados enviados..." + ano)
	var adicionaTexto = ""
	$('tbody').append("<tr><td></td><td class='tdId'>" + id + "</td><td class='tdMateria'>" + materia + "</td><td class='tdAno'>" + ano + "</td><td class='tdConteudo'>" + conteudo + "</td><td class='tdTitulo'>" + titulo + "</td><td class='tdDescricao'>click</td><td class='tdTexto'>click</td><td><i class='material-icons'>mode_edit</i> <i class='material-icons delete'>delete</i></td></tr>")
	excluiDados()
	editarDados()
}
editarDados()
function listaMateriaTable(){
	$.ajax({
		url: "optionMateria.php",
		type: "POST",
		data: {
			metodo: 'pegaLista',
			id: "",
			materia: "",
			modulo: ""
		},
		success: function (data) {
		//console.log(data)
		var teste = JSON.parse(data)
		$(document).ready(function () {
			$('.tabelaGuia').children().remove();
			for (var i = 0; i < teste.length; i++) {
				//console.log(teste)
				$('.tabelaGuia').append("<tr><td></td><td class='tabId'>" + teste[i].id + "</td><td class='tabMateria'>" + teste[i].materia + "</td><td class='tabModulo'>" + teste[i].modulo + "</td><td><i class='material-icons btnTableMat'>mode_edit</i><i class='material-icons btnTableMat'>delete</i></td></tr>");
				(function(){
					var x = $('#sMateria').children("option:contains('"+teste[i].materia+"')").val()
					if (x == undefined) {
						$('#sMateria').append("<option value='" + teste[i].materia + "'>" + teste[i].materia + "</option>")
					}else{
						console.log('Igual')
					}
				})()
				$('#tAno').append("<option value='" + teste[i].modulo + "'>" + teste[i].modulo + "</option>")
			}
			botaoTabelaSumario()
			valueId()
			valueIdTable()
		})

	}
   })
}
listaMateriaTable()
function botaoTabelaSumario() {
	$('.btnTableMat').click(function () {
		var id = $('.t1').val()
		var materia = $('.t2').val();
		var modulo = $('.t3').val();
		var metodo = $(this).text()
		switch (metodo) {
			case 'Adicionar':
			(() => {
				$.ajax({
					url: 'optionMateria.php',
					type: 'POST',
					data: {
						metodo: metodo,
						id: id,
						materia: materia,
						modulo: modulo
					},
					success: function (data) {
							//console.log(data)
						}
					})
				$('.tabelaGuia').append((() => {
					return "<tr><td></td><td class='tabId'>" + id + "</td><td class='tabMateria'>" + materia + "</td><td class='tabModulo'>" + modulo + "</td><td><i class='material-icons btnTableMat'>mode_edit</i><i class='material-icons btnTableMat'>delete</i></td></tr>"
				})())
			})();
			valueId()
			valueIdTable()
			listaMateriaTable()
			break;
			case 'delete':
			$(this).parents('tr').remove();
			var valor = $(this).parents('tr').find('td.tabId').text();
				//console.log(valor)  
				$.ajax({
					url: 'optionMateria.php',
					type: 'POST',
					data: {
						metodo: metodo,
						id: valor,
						materia: materia,
						modulo: modulo
					},
					success: function (data) {
						//console.log(data)
					}
				})
				valueId()
				valueIdTable()
				break;
				case 'mode_edit':
				//console.log('teste 3')
				var objMateria = $(this).parents('tr').find('td.tabMateria')
				var objModulo = $(this).parents('tr').find('td.tabModulo')
				var id = $(this).parents('tr').find('td.tabId').text()
				var materia = $(this).parents('tr').find('td.tabMateria').text()
				var modulo = $(this).parents('tr').find('td.tabModulo').text()
				$('input.t1').val(id)
				$('input.t2').val(materia)
				$('input.t3').val(modulo)
				var obj1 = {
					'id': $('input.t1').val(),
					'materia': $('input.t2').val(),
					'modulo': $('input.t3').val(),
				}
				$('button#btnAddMat').text('Editar')
				$('button#btnAddMat').attr('class', 'btn btn-success btnEditMat')
				$('.btnEditMat').click(function () {
					var obj2 = {
						'id': $('input.t1').val(),
						'materia': $('input.t2').val(),
						'modulo': $('input.t3').val(),
					}
					//console.log(obj1)
					//console.log(obj2)
					var listaSuma1 = Object.entries(obj1);
					var listaSuma2 = Object.entries(obj2);
					//console.log(listaSuma1)
					//console.log(listaSuma2)
					for (var i = 0; i < listaSuma1.length; i++) {
						var num1 = listaSuma1[i][1]
						var num2 = listaSuma2[i][1]
						if (num1 != num2) {
							var cabecalho = listaSuma2[i][0]
							var atual = num2
							//console.log('Conteudo diferente...')
							//console.log(cabecalho+":"+atual)
							$.ajax({
								url: 'optionMateria.php',
								type: 'POST',
								data: {
									metodo: metodo,
									id: id,
									chave: cabecalho,
									valor: atual
								},
								success: function (data) {
									console.log(data)
								}
							})
							console.log('Atualizar tabela')
							if (cabecalho == "materia") {
								objMateria.text(atual)
							} else if (cabecalho == "modulo") {
								objModulo.text(atual)
							}
						}
					}
					$('button#btnAddMat').text('Adicionar')
					$('button#btnAddMat').attr('class', 'btn btn-success btnTableMat')
					valueId()
					valueIdTable()
					listaMateriaTable()
				})
				break;
				default:
				console.log('deu errado')
				break;
			}
		})
}
botaoTabelaSumario()
function valueId() {
	var obj = $('.tabelaGuia').children();
	var num = obj.length + 1;
	$('.t1').val(num);
}
function valueIdTable() {
	var obj = $('#tableMatEstudos').children();
	var num = obj.length;
	$('#tId').val(num + 1);
}
valueId()
function editaSumario() {
	(() => {
		$('.tabelaGuia tr').click(function () {
			var id = $(this).children('tabId').val();
			var materia = $(this).children('tabMateria').val();
			var modulo = $(this).children('tabModulo').val();
			var tabela = [{
				"id": id,
				"materia": materia,
				"modulo": modulo
			}];
			console.log(tabela)
		})
	})()
	// var metodo = "";
	// switch (metodo) {
	// 	case label_1:
	// 		// statements_1
	// 		break;
	// 	default:
	// 		// statements_def
	// 		break;
	// }
}
editaSumario();
function escreverTxt() {
	var tela = document.getElementsByClassName('popTelaTexto')[0];
	tela.style.display = "inline-block";
	var tituloPrincipal = document.getElementById('tConteudo').value;
	var subTitulo = document.getElementById('tTitulo').value;
	var descricao = document.getElementById('tDescricao').value;
	let frameContent = document.getElementById('textoFrame').contentWindow.document.body
	frameContent.getElementsByTagName('h1')[0].innerHTML = tituloPrincipal;
	frameContent.getElementsByTagName('h2')[0].innerHTML = subTitulo;
	frameContent.getElementsByTagName('p')[0].innerHTML = descricao;
	$('.popFormulario').css({
		"position": "relative",
		"display": "none",
		"z-index": "-10"
	})

}
function salvarTxt() {

}
function cancelarTxt() {
	var tela = document.getElementsByClassName('popTelaTexto')[0];
	tela.style.display = "none";
	$('.popFormulario').css({
		"position": "relative",
		"display": "block",
		"z-index": "10"
	})
}
function cancelarForm() {
	$('#tId').val('');
	$('#tId').val('')
	$('#sMateria').val('')
	$('#tAno').val('')
	$('#tConteudo').val('')
	$('#tTitulo').val('')
	$('#tDescricao').val('')
	$('#tTexto').val('')
	$("#botaoAdiciona").attr({
		'onclick': 'enviaDados()'
	})
	$("#btnCancel").attr({
		'onclick': 'cancelarForm()'
	})
	$("#telaTxt").attr({
		'onclick': 'escreverTxt()'
	})
	$('#botaoAdiciona').text('Adicionar')
	$('#btnCancel').text('Limpar')
	var tituloPrincipal = document.getElementById('tConteudo').value;
	var subTitulo = document.getElementById('tTitulo').value;
	var descricao = document.getElementById('tDescricao').value;
	let frameContent = document.getElementById('textoFrame').contentWindow.document.body
	frameContent.getElementsByTagName('h1')[0].innerHTML = tituloPrincipal;
	frameContent.getElementsByTagName('h2')[0].innerHTML = subTitulo;
	frameContent.getElementsByTagName('p')[0].innerHTML = descricao;
}
function limparDadosForm() {
	//$('#tId').val('')
	$('#sMateria').val('')
	$('#tAno').val('')
	$('#tConteudo').val('')
	$('#tTitulo').val('')
	$('#tDescricao').val('')
	$('#tTexto').val('')
}
function editarTextoFrame() {
	var tela = document.getElementsByClassName('popTelaTexto')[0];
	tela.style.display = "inline-block";
	$('.popFormulario').css({
		"position": "relative",
		"display": "none",
		"z-index": "-10"
	})
}
//----------------------------------------------------------------------
//------------Menu Ferramentas Iframe----------------------------------
//----------------------------------------------------------------------
function mudaNegrito() {
	let element = document.createElement("spam")
	let frame = document.getElementById('textoFrame').contentWindow
	element.style.fontWeight = "bolder"
	frame.window.getSelection().getRangeAt(0).surroundContents(element)
}
function mudaItalic() {
	let element = document.createElement("spam")
	let frame = document.getElementById('textoFrame').contentWindow
	element.style.fontStyle = "italic"
	frame.window.getSelection().getRangeAt(0).surroundContents(element)
}
function mudaCor() {
	var cor = document.getElementById('colorText').value
	let element = document.createElement("spam")
	let frame = document.getElementById('textoFrame').contentWindow
	element.style.color = cor
	frame.window.getSelection().getRangeAt(0).surroundContents(element)
}
function colorDefine() {
	var cor = document.getElementById('colorText').value
	document.getElementById('colorMenu').style.color = cor
}
function addTitulo() {
	document.getElementById('textoFrame').contentWindow.document.body.innerHTML += "<h3>titulo</h3> <p>Texto</p>";
}
function addTituloH2() {
	document.getElementById('textoFrame').contentWindow.document.body.innerHTML += "<h2>titulo</h2> <p>Texto</p>"
}
function pegaVideo() {
	var adress = prompt('Digite a URL do video:', 'http//www.youtube.com/')
	alert(adress)
}
function insertImg() {
	let imagem = prompt('Digite o endereço de imagem abaixo:', 'http//www.exemple...')
	let largura = prompt('Digite a largura:', '200')
	let posicao = 'imgTexto'
	let estado = prompt('Qual estado da imagem? isolado ou aberto','aberto')
	let ladoImg = prompt('Digite o lado','esquerdo')
	window.alert('Imagem: ' + imagem + 'Largura: ' + largura + 'px Posição:' + posicao)
	//document.getElementById('textoFrame').contentWindow.document.body.innerHTML += "<img class='"+posicao+"' src='"+imagem+"' width='"+largura+"' alt=''>";
	let element = document.createElement("img")
	element.setAttribute('class', posicao+" "+estado)
	element.setAttribute('src', imagem)
	element.setAttribute('width', largura)
	var classeAtual = element.getAttribute('class')
	if (ladoImg == 'esquerdo') {
		ladoImg = 'parede-esquerda'
	}else if(ladoImg == "direito"){
		ladoImg = "parede-direita"
	}else{
		ladoImg = ''
	}
	element.setAttribute('class',classeAtual+" "+estado)
	element.setAttribute('class',classeAtual+" "+ladoImg)
	// element.setAttribute('display', displayImg)
	// element.setAttribute('float', floatImg)
	let frame = document.getElementById('textoFrame').contentWindow
	frame.window.getSelection().getRangeAt(0).surroundContents(element)
}
function getTecla(event) {
	var tecla = event.key
	console.log(tecla)
	switch (tecla) {
		case "ScrollLock":
		break;
		case "Pause":
		break;
		case "Insert":
		break;
		case "Home":
		break;
		case "PageUp":
		break;
		case "PageDown":
		break;
		case "End":
		break;
		case "Delete":
		break;
		case "ArrowRight":
		break;
		case "ArrowLeft":
		break;
		case "ArrowDown":
		break;
		case "ArrowUp":
		break;
		case "Control":
		break;
		case "Shift":
		break;
		case "Enter":
		
		break;
		case "Backspace":
		break;
		case "AltGraph":
		break;
		case "Backspace":
		break;
		case "Shift":
		break;
		case "CapsLock":
		break;
		case "Tab":
		break;
		case "Escape":
		break;
		default:
	}
}
function voltarQuestao() {
	let popup = document.getElementById('popupQuestion')
	popup.style.display = "none"
}
function adicionarQuestion() {
	let popup = document.getElementById('popupQuestion')
	popup.style.display = "block"
}
function avancarQuestion() {
	document.getElementsByClassName('textQuestion')[0].style.display = 'block';
	let id = document.querySelector('#idQ').value
	let materia = document.querySelector('#materiaQ').value
	let modulo = document.querySelector('#anoQ').value
	let conteudo = document.querySelector('#conteudoQ').value
	let titulo = (document.getElementsByClassName('questaoTitulo')[0].innerHTML) + " " + (document.querySelector('#tituloQ').value)
	var dataQuestion = [id, materia, modulo, conteudo, titulo];
	console.log(dataQuestion)
	var janelaTexto = document.getElementsByClassName('frameCreateQuestion')[0].contentWindow.document.body;
	let tituloJ = janelaTexto.getElementsByClassName('titulo')[0];
	tituloJ.innerHTML = titulo;
	console.log(tituloJ)
}
function retornar() {
	document.getElementsByClassName('textQuestion')[0].style.display = 'none';
}
function underlineTxt() {
	let element = document.createElement("spam")
	let frame = document.getElementById('textoFrame').contentWindow
	element.style.textDecoration = "underline";
	frame.window.getSelection().getRangeAt(0).surroundContents(element)
}
function tachadoTxt() {
	let element = document.createElement("spam")
	let frame = document.getElementById('textoFrame').contentWindow
	element.style.textDecoration = "line-through";
	frame.window.getSelection().getRangeAt(0).surroundContents(element)
}
function sobreEscritoTxt() {
	let element = document.createElement("sup")
	let frame = document.getElementById('textoFrame').contentWindow
	frame.window.getSelection().getRangeAt(0).surroundContents(element)
}
function subEscritoTxt() {
	let element = document.createElement("sub")
	let frame = document.getElementById('textoFrame').contentWindow
	frame.window.getSelection().getRangeAt(0).surroundContents(element)
}
function marcaText() {
	let element = document.createElement("spam")
	let frame = document.getElementById('textoFrame').contentWindow
	element.style.background = "#412170";
	// element.style.color = "#000";
	frame.window.getSelection().getRangeAt(0).surroundContents(element)
}
function aumentarSize(tagSpan) {

}
function comparar(text, list) {
	for (var i = 0; i < list.length; i++) {
		let val1 = text.innerHTML
		let val2 = list[i].innerHTML
		let spanDentro = '<span class="aumentTxt">' + val1 + '</span>'
		if (val1 == val2 || val2 == spanDentro) {
			// iguais
			console.log('Iguais')
			var children = $("#textoFrame").contents().find('.aumentTxt').contents();
			$("#textoFrame").contents().find('.aumentTxt').replaceWith(children)
			// let tamanho = filterInt(list[i].style.fontSize)
			// var sizeFont = tamanho + 5 + "px"
			// console.log(sizeFont	)
			// children.css('fontSize',sizeFont)
		} else if (i < list.length) {
			//diferent
			console.log('Diferente')
			let frame = document.getElementById('textoFrame').contentWindow
			let spamTexto = frame.document.querySelector('.aumentTxt')
			spamTexto.removeAttribute("class")
		}
	}
}
function aumentarText() {
	let frame = document.getElementById('textoFrame').contentWindow
	var selectionContents = frame.window.getSelection().getRangeAt(0).toString()
	console.log('--------------Inicio-----------------')
	console.log(selectionContents)
	var resp = (() => {
		console.log('Comparar')
		var listaSpam = (() => {
			if ($("#textoFrame").contents().find("span:contains('" + selectionContents + "')")[0] == undefined) {
				return undefined
			} else {
				return $("#textoFrame").contents().find("span:contains('" + selectionContents + "')")[0].innerText
			}

		})();
		// var textoTag = $("span:contains('"+selectionContents+"')")[0].innerHTML
		var texto = selectionContents
		console.log("ListaSapm: " + listaSpam)
		console.log("Texto Selecionado: " + texto)
		if (listaSpam != undefined) {
			var val1 = listaSpam
			if (val1 == texto) {
				return true
			} else if (texto != undefined && texto != "") {
				return false
			} else {
				return "nada"
			}
		}
		return undefined
	})();
	var tag = (() => {
		if ($("#textoFrame").contents().find("span:contains('" + selectionContents + "')") != undefined && selectionContents == '') {
			return 'DIV'
		} else {
			return 'SPAN'
		}
	})();
	console.log('-------------------')
	console.log(tag)
	console.log(resp)
	console.log(selectionContents)
	//existe um spam com esse valor selecionado?
	if (resp != true && selectionContents != "") {
		var div = document.createElement("span");
		div.style.fontSize = "30px";
		frame.window.getSelection().getRangeAt(0).surroundContents(div)

	} else if (tag == "SPAN" && selectionContents != "") {
		var tam = filterInt($("#textoFrame").contents().find("span:contains('" + selectionContents + "')").css('fontSize')) + 5
		$("#textoFrame").contents().find("span:contains('" + selectionContents + "')").css("fontSize", "" + tam + "px")
		console.log(tag)
	}
	console.log('-----------Fim-------------')
}
function aplicaLista(){
	let frame = document.getElementById('textoFrame').contentWindow
	var lista = document.createElement("ul");
	var item = document.createElement("li");
	var selectionContents = frame.window.getSelection().getRangeAt(0).toString()
	item.innerText = selectionContents
	var range = frame.window.getSelection().getRangeAt(0)
	range.deleteContents()
	lista.appendChild(item)
	range.insertNode(lista)
}
function aplicaListaNumerada(){
	let frame = document.getElementById('textoFrame').contentWindow
	var lista = document.createElement("ol");
	var item = document.createElement("li");
	var selectionContents = frame.window.getSelection().getRangeAt(0).toString()
	item.innerText = selectionContents
	var range = frame.window.getSelection().getRangeAt(0)
	range.deleteContents()
	lista.appendChild(item)
	range.insertNode(lista)
}
function aplicaListaLetrada(){
	let frame = document.getElementById('textoFrame').contentWindow
	var lista = document.createElement("ol");
	lista.setAttribute("type","a")
	var item = document.createElement("li");
	var selectionContents = frame.window.getSelection().getRangeAt(0).toString()
	item.innerText = selectionContents
	var range = frame.window.getSelection().getRangeAt(0)
	range.deleteContents()
	lista.appendChild(item)
	range.insertNode(lista)
}
function addCode(){
	document.getElementById('textoFrame').contentWindow.document.body.innerHTML += "<div class='editorCode'><code><pre>codigo</pre></code></div>"
}