<!doctype html>

<html lang="pt-br">

	<head>
		<meta charset="utf-8"> 
		<!--A responsividade é o autodimensionamento da página em relação ao dispositivo que está sendo usado utilizado para a visualização do site -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>  </title> 
		<link href="css/estilo.css" rel="stylesheet"><!--link para a página do CSS-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet"><!--link para a fonte que vou usar no título-->
		
	</head>


	</head>
	
	<!--body é o corpo da página-->
	<body><!--corpo do site -->
		<div id="topo"><!--parte do topo da página -->
			<div id="logo"><!--parte do logo da página -->
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/logo.png" height="100px" width="90px">
				<h1>DESTINO RS</h1><!--H1 a H6 definem o tamanho da fonte-->
			</div>
			<br><nav>
					<h3><ul class="menu">
						<?php
						include "php/menu.inc";
						?>
				</h3>
					</ul>
				</nav>
			
				
				
			<br>
			
	<!--divisões de três colunas do corpo do site -->
	<div id="geral">
    <div id="cabecalho"></div>
    <div id="principal">
        <div id="conteudo-1"></div>
        <div id="conteudo-2">
			<div id="conteudo-2-1"></div>
			<div id="conteudo-2-2"></div>
        	
				 </div>
		</body>
	
	<footer>
		<div class="rodape">
			<br><h6>&copy Copyright 2021. Todos os direitos reservados.
			<br>
			Desenvolvido por Simone Gomes de Souza</h6>
		</div>
	</footer>
</html>