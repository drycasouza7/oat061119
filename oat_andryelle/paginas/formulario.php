<?php

$nome = $_POST["nome"];

$dados = array(
	"page" => 2;
	"total_pages" => 2,

	"dados" => array(
		array("id" => 1, "nome" => "Alexandre"),
		array("id" => 2, "nome" => "João"),
	)
);


?>

<!DOCTYPE html>
<html>
<head>

	<title> WebSite </title> <!-- Projeto WebService 2019 -->
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../style/estilo-grid.css"> 

<!-- 	<link rel="stylesheet" type="text/css" href="style/estilo-grid-768.css" media="screen and (max-width:768px)">

	<link rel="stylesheet" type="text/css" href="style/estilo-grid-480.css" media="screen and (max-width:480px)"> -->

</head>
<body>

	<div id="container">   <!-- Caixa -->

		<div id="header"> <!-- Cabeçalho -->
			<h1> Masha e o Urso </h1> <!-- Título do Site -->
		</div>

		<div id="menu">
			<ul>
				<li><a href="">Home</a></li>
				<li>Personagens</li>
				<li>Episódios</li>
				<li>About</li>
			</ul>
		</div>

		<!-- <div id="menu-top"></div>

		<div id="menu-left"></div> -->

		<div id="main"> <!-- Principal -->
			

			<div id="content">

				<h1> Formulário </h1>

				<form method="POST">

					<div>
						<label>Nome:</label>
						<input type="text" name="nome">
					</div>

					<div>
						<input type="submit" name="enviar" value="Enviar">
					</div>
					
				</form>
				
				

			<div id="menu-lateral">
				<ul>
				<li>Home</li>
				<li>Personagens</li>
				<li>Episódios</li>
				<li>About</li>
				</ul>
			</div>

		</div> 
		
		<div id="footer"> <!-- Rodapé -->
			<p>Todos os direitos reservados</p> 			
		</div> 

	</div>

</body>
</html>