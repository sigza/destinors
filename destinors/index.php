<!doctype html>

<html lang="pt-br">

	<!--head é o cabeçalho-->
	<head>
		<!--comando para reconhecimento de caracteres, maiúscula ou minúscula-->
		<meta charset="utf-8"> 
		
		<!--A responsividade é o autodimensionamento da página em relação ao dispositivo que está sendo usado utilizado para a visualização do site -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<title>Destino RS</title> <!--título que vai no browser-->
		<link href="css/estilo.css" rel="stylesheet"><!--link para a página do CSS-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet"><!--link para a fonte que vou usar no título-->
		
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
							
			<br><br><br>
				
		<img src="img/cabecalho.jpg" alt="paisagem de uma queda d'água em meio a serra!" height="400px" width="100%"><!--colocação de imagem na página-->
		<br><br><br>
		
		<h3>
			<!--<P> indicação de parágrafo-->
			<p>O Rio Grande do Sul é um estado com muitas belezas naturais e variadas atrações turísticas que possibilitam experiências diferentes, além de belas paisagens, um bom churrasco e o chimarrão. 
			<br><br><!--cada br é uma linha nova-->
			A grande maioria dos turistas que vêm para o Rio Grande do Sul foca apenas em Gramado e Canela, na Serra. E realmente, essa é uma das regiões mais lindas do RS, mas o nosso estado tem muito mais a oferecer e vários outros lugares para conhecer.
			<br><br>
			Há destinos no Rio Grande do Sul para quem gosta de cidade, de natureza, de vinhos, de gastronomia e de história. Sendo assim, as opções são variadas para você montar um roteiro completo pelo estado, basta escolher o que se adapta melhor ao seu estilo.
			<br><br>
			Dentre os inúmeros lugares incríveis dentro do Rio Grande do Sul, destaquei sete experiências imperdíveis que todo mundo precisa vivenciar pelo menos uma vez. 
			<br><br>
			Fique atento às próximas páginas, certamente há belas experiências pra você!<br><br><br>
			<a href="torres.php" target="_self">Página seguinte</a>
			</p></h3>
			
			<br><br>
	
		</body>
		
		<br><br><br>
	<footer>
		<div class="footer">
			<br><h6>&copy Copyright 2021. Todos os direitos reservados.
			<br>
			Desenvolvido por Simone Gomes de Souza</h6>
		</div>
	</footer>
</html>