<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>Rental World</title>
	</head>


    <body>
		<div>
			<?php include 'menu.html';?>
		</div>
			
		<form id="consulta_locaçao" name="consulta_locaçao" class="consulta_locaçao" method="post" action="conexao.php">
			<div class="local">
				<legend>Retirada</legend>
				<input class="consulta" type="text" placeholder="onde você quer alugar" id="locaçao" nome="locaçao" required autofocus>
			</div>

			<div class="categoria">
				<legend>Categoria</legend>
				<input class="consulta" type="text" placeholder="Escolha a categoria" id="categoria" nome="categoria" required autofocus>
			</div>
		
			<div class="data_retirada">
				<legend>Data da retirada:</legend>
				<input class="consulta_datahora" type="date" id="data_retirada" nome="data_retirada" required autofocus>
			</div>

			<div class="hora_retirada">
				<legend>Hora:</legend>
				<input class="consulta_datahora" type="time" id="hora_retirada" nome="hora_retirada" required autofocus>
			</div>

			<div class="data_devoluçao">
				<legend>Data da devoluçao</legend>
				<input class="consulta_datahora" type="date" placeholder="Escolha a data da devoluçao" id="data_devoluçao" nome="data_devoluçao" required autofocus>
			</div>

			<div class="hora_devolouçao">
				<legend>Hora:</legend>
				<input class="consulta_datahora" type="time" id="hora_devoluçao" nome="hora_devoluçao" required autofocus>
			</div>

			<div class="modelo">
				<legend>Escolha qual modelo</legend>
				<input class="consulta" type="text" placeholder="Escolha o medelo" id="modelo" nome="modelo" required autofocus>
			</div>
		
			<div><input class="botao" type="submit" id="btn_buscar" name="btn_buscar" value="Buscar"></div>
		</form>

		<main class="main">
			<div class="conteudo">
				<p> Venha conhecer a Rental World </p>
				<img src="img/frota.png" class="img_central">
			</div>

			<section>
				<h2 class="conteudo_h2"> Razões para alugar na Rental World</h2>
				<ul class="conteudo_ul">
					<li class="conteudo_li">
						<img src="img/carros5.png" class="img_conteudo">
						<h3 calss="conteudo_h3">Carros mais novos e modernos</h3>
						<p> Todos nossos veículos são novos com menos de 20mil Km rodados</p>
					</li>
					<li class="conteudo_li">
						<img src="img/Certificado.png" class="img_conteudo">
						<h3 class="conteudo_h3">Temos Certificado B</h3>
						<p>Somos a primeira empresa do seguimento a consquistar a certificação B.<br>Que conjuga propósito com rentabilidade.</p>
					</li>
					<li class="conteudo_li">
						<img src="img/lojas.png" class="img_conteudo">
						<h3 class="conteudo_h3">Nossas Lojas</h3>
						<p>Estamos presentes nas principais cidade do Brasil.<br>Onde você estiver, nós também estaremos lá.</p>
					</li>
				</ul>
			</section>
		
			<div class="depoimento">
				<img src="img/depoimento.jpg" class="img_depoimento">
			</div>
		</main>

		<footer>
			<div>
				<?php include 'rodape.html';?>
			</div>
		</footer>
	</body>
</html>