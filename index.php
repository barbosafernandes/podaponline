<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
	<style type="text/css">
	#online{color:#fff; width: 16px; height:45px; text-align: center; padding: 10px; background-color:<?=$cor?>; border-radius: 0px 7px 7px 0px;  box-shadow: 3px 3px 3px 1px rgba(0, 0, 0, 0.2); font-size:0px;transition: all ease 1s}
	#online:hover{width: 70px;font-size:16px; transition: all ease 1s}
	</style>
</head>
<body>
	 <div id="logo"></div>
	 <div id="texto_menu">
	 	<nav><a href="" id="a1_menu"> Home </a>/<a href="" id="a2_menu"> Festas </a></nav>
	 </div>
	<nav id="menu">
		<ul id="menu2">	
			<li><a href="subpaginas/anuncie/opcoes.php" id="a1">Anuncie</a></li>
		</ul>
	</nav>
	<?php include "subpaginas/banco/funcoes/online.php";?>
	<main id="corpo">
	<div id="bloco01">
		
		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZO-jQjEdK9w" frameborder="9" allow="autoplay; encrypted-media" allowfullscreen>
			
		</iframe>

		</div>
		<div id="blocotxt01">
		<p>Lugar de lixo é no lugar correto!
			A Política Nacional de Resíduos Sólidos está em vigor desde agosto de 2010 e os planos municipais de gestão integrada desses materiais foram (ou deveriam ter sido) apresentados até agosto de 2012. Desde então, o poder público e a sociedade dividem a responsabilidade pelo destino dado ao lixo produzido.
		</p>
		</div>
		

		<div id="bloco02">
			<a href="subpaginas/pgempresas/pgempresa.php" id="linkbloco"><legend>
				<p>Festas</p>
			</legend>
			</a>
		</div>
		
		<style>
		</style>

		<div id="bloco03"></div>
		<div id="bloco04"></div>
		<div id="blocotxt02">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		<div id="bloco05"></div>
		<div id="blocotxt03">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

	</main>
</body>
</html>


