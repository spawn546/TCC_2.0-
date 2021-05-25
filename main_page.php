<?php
	require_once("validador_acesso.php");

	$chamados = array();
	$item = array();

	$arquivo = fopen('item.hd','r');
	// enquanto houver registros ( linhas ) a serem recuperados
	while(!feof($arquivo)) { // teste pelo fim de um arquivo
	  //linhas
	 $registro = fgets($arquivo);
	 $item[] = $registro;
	}
	//fechar o arquivo aberto
	fclose($arquivo);
	//...



	$arquivo = fopen('mensagens.hd','r');
	// enquanto houver registros ( linhas ) a serem recuperados
	while(!feof($arquivo)) { // teste pelo fim de um arquivo
	  //linhas
	 $registro = fgets($arquivo);
	 $chamados[] = $registro;
	}
	//fechar o arquivo aberto
	fclose($arquivo);
	//...

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_main.css">

</head>
<body>
	<video id="videoBG" autoplay muted loop>
		<source src="img/bg-mp4.mp4" type="video/mp4">
	</video>


	<header id="usuario_info">
			<img src="img/usuario_img.jpg">
			<h3><?= $_SESSION['nome'] ?></h3>
			<a href="inventario.php">Inserir Item</a>
			<a href="logoff.php">Sair</a>
	</header>


	<div id="container">
			

	<div id="Anotacao_inventario_div">

			<div id="anotacao">
			<h3 class="titulo_anot">Anotações</h3>
			<div id="text_div">
			<?php foreach($chamados as $chamados) { ?>
        	<div>   
			<h3><?= $chamados;?></h3>
			</div>
			<?php }; ?>
			</div>
			<form method="post" action="valida_mensagem.php">
				<input type="textarea" class="anotacao_text"  name="mensagem" placeholder="Digite o Texto..">
				<button class="button_text" type="submit">Enviar</button>

			</form>

		</div>
			<h3 class="titulo_anot">Inventário</h3>
			<hr/ class="hr_titulo" >
					<table id="table_inventario">
					<tr>
			        	<th>Nome</th>
			            <th>Tipo</th>
			        	<th>Dano</th>
			        </tr>
		    		</table>
		<div id="inventario">
			
	    	

		<?php foreach ($item as $item) { ?>                
                  <?php
                     $item_dados = explode('#', $item);
                    if($_SESSION['perfil_id'] == 0){
                        if($item_dados[0] != $_SESSION['id']){
                          continue;
                        }
                    }
                    if(count($item_dados)<3){
                      continue;
                    }
                  ?>
                          
                          <table id="table_inventario">
                              <tr>
                                  <td><?= $item_dados[1] ?></td>
                                  <td><?= $item_dados[2] ?></td>
                                  <td><?= $item_dados[3] ?></td>
                              </tr>
                          </table>
                  <?php } ?>
              </div>
	</div>	

		<aside id="calculos">
			
			<div id="Dados">
				<h3>Rolagem de dados</h3>
				<form class="Dados" method="post" action="rolagem.php">
					<input name="dado" list="dados" class="list_dados">
					  <datalist id="dados">
					    <option value="D6">
					    <option value="D10">
					    <option value="D12">
					    <option value="D20">
					    <option value="D100">
					  </datalist>
					<button class="button_dados">Calcular</button>
					<input type="text" class="resultado_dados" readonly value="<?= $_SESSION['dado'] ?>">
				</form>
			</div>
		</aside>
	</div>

</body>
</html>