<!doctype html>
<html lang="pt-br">
<head>
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  <!-- font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;0,800;1,900&display=swap" rel="stylesheet">
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- JavaScript -->
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/estilo.css">
  <title>Education</title>
</head>
<body>
  <style>

  </style>
  <!-- navegação superior do site -->
  <nav id="navegacao">
    <ul class="nav-rigth">
     <li title="home">
      <a class="topHeader" href="inicio.php">
        home
  <!--      <span class="material-icons-outlined">
         home
       </span> -->
     </a>
   </li>
   <li title="Tabela">
    <a class="topHeader" href="tabela.php">
      tabela
     <!--  <span class="material-icons-outlined">
        dashboard_customize
      </span> -->
    </a>
  </li>
  <li class="ensinoMedio" title="Ensino Básico">
    <a class="topHeader" href="#">
     ensino
   </a>
  <!--  <span class="material-icons-outlined">
     library_books
   </span> -->
<!--    <span class="material-icons-outlined seta-estudos">
     arrow_drop_down
   </span> -->
   <ul class="ensinoMedio">
    <li class="materiaSelect"><a class="item" href="#">Matematica</a></li>
    <li class="materiaSelect"><a class="item" href="#">Português</a></li>
    <li class="materiaSelect"><a class="item" href="#">Historia</a></li>
    <li class="materiaSelect"><a class="item" href="#">Geografia</a></li>
    <li class="materiaSelect"><a class="item" href="#">Filosofia</a></li>
    <li class="materiaSelect"><a class="item" href="#">Química</a></li>
    <li class="materiaSelect"><a class="item" href="#">Física</a></li>
    <li class="materiaSelect"><a class="item" href="#">Sociologia</a></li>
    <li class="materiaSelect"><a class="item" href="#">Artes</a></li>
    <li class="materiaSelect"><a class="item" href="#">Inglês</a></li>
    <li class="materiaSelect"><a class="item" href="#">Ed.Física</a></li>
  </ul>
</li>
<li class="cursos" title="cursos">
  <a class="topHeader" href="#">
    cursos
  </a>
 <!--  <span class="material-icons-outlined">
    library_books
  </span> -->
 <!--  <span class="material-icons-outlined seta-cursos">
    arrow_drop_down
  </span> -->
  <ul id="cursoTable" class="cursos">
  </ul>
</li>
<li title="Configuração">
  <a class="setting topHeader" href="#">
    configuração
<!--     <span class="material-icons-outlined">
     settings
   </span> -->
 </a>
 <ul class="config">
   <li class="materiaSelect"><a id="tema" href="#">Tema Escuro: <span id="toggle" class="material-icons-outlined">
    toggle_off
  </span></a></li>
</ul>
</li>
</ul>
<!-- icone de menu antes da logo que aparece na funcao de responsivo -->
<span id="menu" class="material-icons-outlined menu">
 menu
</span>
<a class="logoTipo" href="#"><span class="logoE">E</span> <span class="nomePrinci">Educa+</span></a>

<input id="search" type="text" placeholder="Matematica...">
<span id="lupa" class="material-icons-outlined">
  search
</span>
</nav>
<div class="submenu">
  <?php

//   include('db_contaus.php');
//   $x = new db_contaus;
//   $lista = $x->listaAno("matematica");
//   echo "<ul class='listaPrincipal'>";
//   for ($i=0; $i < count($lista); $i++) { 
//    echo "<li><a class='itemPrinci' href='#'>".$lista[$i]."<i class='fa fa-chevron-down'></i></a>";
//    $listaC = $x->listaConteudo($lista[$i],"matematica");
//    echo "<ul class='itemSecun'>";
//    for ($c=0; $c < count($listaC); $c++) { 
//     echo "<li><a href='#' onclick='buscaContMateria()' class='sub-item'>".$listaC[$c]."</a></li>";
//   }
//   echo "</li></ul>";
// }
// echo "</ul>";

  ?>
</div>
<section style="float: right;display: inline">
  <h1>Bem vindo ao educame</h1>
  <hr>  
  <h2>O melhor site de estudos</h2>
  <p> 
    O melhor site para pesquisas rapidas e bem estruturadas. A educame desenvolveo um site com
    a finalidade de deixar mais simples seus estudos, suas buscas e seu aprendizado na web. Você pode acessar nossos conteudos de forma bem simples, apenas com alguns clickes e você descobre uma maneira facil e rapido
    para resolver seus problemas, para encontrar pesquisas. 
  </p>
</section>
<!-- ---------------------------Trabalahndo no rodape do site------------------------------------ -->
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
<!-- ---------------------Script no fim do site para inclusao do bootstrap---------------------- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<!-- -------------------------------------------------------------------------------------------- -->
<script>
  buscaContMateria()
</script>
</body>
</html>