<!doctype html>

<html lang="pt-br">

	<!--head é o cabeçalho-->
	<head>
		<!--comando para reconhecimento de caracteres, maiúscula ou minúscula-->
		<meta charset="utf-8"> 
		
		<!--A responsividade é o autodimensionamento da página em relação ao dispositivo que está sendo usado utilizado para a visualização do site -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<title>Destino RS - Bento Gonçalves</title> <!--título que vai no browser-->
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
			
		<div id="geral"><br>
		</div>
			<div id="principal">
			<div id="conteudo-1">
			<center>
				<img src="img/mariafumaca.jpg" height="150px" width="360px"></center><br>
				<h3>PASSEIO DE MARIA FUMAÇA<br><br>
				Diversão em meio a degustação de vinho e espumantes sobre trilhos. Não pode existir combinação melhor. <br><br>
				O passeio de Maria Fumaça acontece entre as cidades de Bento Gonçalves e Carlos Barbosa, mas o bacana desse passeio não são as paisagens do trajeto, mas sim o que acontece dentro do trem e nas paradas.<br><br>
				O trem parte ao som de boa música, e durante o trajeto a cantoria continua com música italiana, dança e também músicas típicas gauchescas. <br><br>
				A parada na cidade de Garibaldi, é para degustação de espumante e suco de uva e uma boa oportunidade de fotografar em frente a locomotiva, ao som de La Bella Polenta.<h3><br><br><br><br>
			</div>
        
		<div id="conteudo-2">
			<div id="conteudo-2-1">
				<img src="img/porticobento.jpg" height="150px" width="390px"></center><br><BR>
				<h3>COMO CHEGAR<br><br>
				O aeroporto mais próximo de Bento Gonçalves é o de Caxias do Sul, no entanto, o problema é que os voos para lá são escassos e caros. Por esta razão, o mais comum é utilizar o Aeroporto Salgado Filho, em Porto Alegre, como porta de entrada para a Serra Gaúcha. Do aeroporto de POA para Bento Gonçalves são 120 quilômetros.<br><br>
				Uma vez no aeroporto, o melhor jeito para chegar até Bento Gonçalves é com um carro alugado, isso porque, além de agilizar o seu deslocamento na chegada, ele será muito útil para visitar os principais atrativos da região.<br><br>
				Há também a opção de ônibus que saem da rodoviária de Porto Alegre, com vários horários disponíveis, a passagem custa em média R$ 50,00.
				<H3><br><br><br><br><br>
				
			</div>
				<div id="conteudo-2-2">
					<img src="img/hospedagembento.jpg" height="150px" width="360px"></center><br><br>
					<h3>HOSPEDAGEM<br><br>
					Se a preferência for por uma acomodação mais convencional, a <a href="https://www.pousadadonmarini.com.br/"target="_blank"">Pousada Don Marini</a> é uma das mais econômicas e bem avaliadas.<br><br>
					Para se hospedar no Caminho de Pedras, a opção é a <a href="https://www.pousadacantelli.com.br/"target="_blank"">Pousada Cantelli</a>, com uma pegada romântica, é muito bem avaliada e as diárias não são exorbitantes como outros hotéis da região.<br><br>

					No Vale dos Vinhedos, o <a href="https://villamichelon.com.br/"target="_blank"">Hotel Villa Michelon</a> é o responsável por democratizar a hospedagem por estas bandas. Oferece ótima estrutura, serviços de primeira e com bons preços.<br><br>
					Já para quem quer uma experiência cinco estrelas, o lugar certo é o <a href="https://www.marriott.com.br/hotels/travel/bgvak-hotel-and-spa-do-vinho-autograph-collection/"target="_blank"">Hotel & Spa do Vinho|Autograph Collection.</a>
					
				</div>
						
	</body>
	
	<footer>
		<div class="footer">
        <br><h6>&copy Copyright 2021. Todos os direitos reservados.
		<br>
			Desenvolvido por Simone Gomes de Souza</h6>
		</div>

</html>