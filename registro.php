<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<video id="videoBG" autoplay muted loop>
		<source src="img/bg-mp4.mp4" type="video/mp4">
	</video>
	<header>
		<nav>
			<a href="#" id="navlink">
			<span id="logo">
				<img src="img/icon.png">
			</span>
			</a>

			<span id="logo">
				ESCUDO DO MESTRE 
			</span>

			<a href="index.php" id="navlink">
			<span id="navitem">
				Home 
			</span>
			</a>
			
			<a href="login.php" id="navlink">
			<span id="navitem">
				Login
			</span>
			</a>

		</nav>
	</header>

<!-- INICIO CONTAINER -->

	<div id="login_container">
		<h3 class="registro_title">Criar Conta</h3>
		<div id="form_group_login">
		<form class="form_group_login" method="post" action="recebe.php">
			<input name="email" class="text_area" type="text" name="usuario_registro" placeholder="Digite o seu e-mail">
			<input name="usoario" class="text_area" type="text" name="usuario_registro" placeholder="Digite o seu nome de usoario">
			<input name="senha" class="text_area" type="password" name="senha_registro" placeholder="Digite a senha">
			<button class="button_login" type="submit">Registrar</button>
			
		</form>
		</div>


	</div>


<!-- CONTEUDO PRINCIPAL // DIV CONTENT // SOBRE //  -->
	


	


</body>
</html>