<!doctype html>

<html lang="pt-br">

	<head>
		<meta charset="utf-8"> 
		<!--A responsividade é o autodimensionamento da página em relação ao dispositivo que está sendo usado utilizado para a visualização do site -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Destino RS - Contato</title> 
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
			
			<br><br>
					
			
		<div id="conteudo">
		
				<br><br>
				<center>
				<h2>Olá! Gostaria muito de saber se está gostando do site, então caso queira esclarecer alguma dúvida ou tenha alguma sugestão é só preencher o formulário abaixo e enviar, entrarei em contato o mais breve possível. Antecipadamente, obrigado por me contatar!</h2></center><br><br>
				
				<center>
				<form action="https://formspree.io/f/xbjqoopd" method="POST"
				
					<br><br>
					<br><label>Nome</label><br>
					<input type="text" name="nome" placeholder="Digite seu nome">
					<br><br>
					
					<label>E-mail</label><br>
					<input type="email" name="email" placeholder="Digite um e-mail válido">
					<br><br>
					
					<label> Telefone </Label><br>
					<input type="text" name="telefone" placeholder="DDD+telefone">
					<br><br>
					
					<label>Mensagem</label><br>
					<textarea name="mensagem" rows="10" cols="50" placeholder="Escreva aqui sua dúvida, elogio ou sugestão!"></textarea>	<br><br>
					
					<input type="button" value="Enviar"/><br><br><br>						
				</form>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
						
		</center>
	</div>	
</body>

	<footer>
		<div class="footer">
			<br><h6>&copy Copyright 2021. Todos os direitos reservados.
			<br>
			Desenvolvido por Simone Gomes de Souza</h6>
		</div>
	</footer>
</html>