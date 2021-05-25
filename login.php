<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<video id="videoBG" autoplay muted loop>
		<source src="img/bg_index.mp4" type="video/mp4">
	</video>
	
	<header>
		<nav>
			
			<span id="logo">
				ESCUDO DO MESTRE 
			</span>

			<a href="index.php" id="navlink">
			<span id="navitem">
				Home 
			</span>
			</a>
			
			<a href="#" id="navlink">
			<span id="navitem">
				Login
			</span>
			</a>

		</nav>
	</header>

<!-- INICIO CONTAINER -->

	<div id="login_container">
		<div id="form_group_login">
		<form class="form_group_login" method="post" action="valida_login.php" >
			<input name="email" class="text_area" type="email" name="usuario" placeholder="Digite o seu email">
			<input name="senha" class="text_area" type="password" name="senha" placeholder="Digite a senha">
			<button class="button_login" type="submit">Login</button>
			<a href="registro.php" class="criar_conta"><span>Criar uma Conta</span></a>
		</form>
		</div>
		<?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                    <div class="text-danger">
                      Usoario Invalido ou Senha invalido(s).
                    </div>

                 <?php } ?>

                 <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                    <div class="text-danger">
                      Por favor faça login antes de acessar as demais paginas.
                    </div>

                 <?php } ?>


	</div>


<!-- CONTEUDO PRINCIPAL // DIV CONTENT // SOBRE //  -->
	


	


</body>
</html>