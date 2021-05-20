<?php include_once("conexao.php"); ?>

<?php

	session_start();

	$usoario_autenticado = false;
	$usoario_id = null;
	$usoario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 0 => 'Usuario');


	/*$usoarios_app = array (
		array('id'=> 1 ,'email' => 'admin@teste.com' , 'senha' => '1234', 'perfil_id' => 1 , 'nome' => 'Glauber'),
		array('id'=> 2 , 'email' => 'user@teste.com' , 'senha' => '1234', 'perfil_id' => 1 , 'nome' => 'Cleber'),
		array('id'=> 3 , 'email' => 'jose@teste.com' , 'senha' => '1234', 'perfil_id' => 0 , 'nome' => 'Brisael'),
		array('id'=> 4 , 'email' => 'maria@teste.com' , 'senha' => '1234', 'perfil_id' => 0 , 'nome' => 'Morgam')
	);*/

	/*foreach ($usoarios_app as $user) {

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usoario_autenticado = true;
			$usoario_id = $user['id'];
			$usoario_perfil_id = $user['perfil_id'];
			$usoario_nome = $user['nome'];
		}
	}*/

	$sql = "SELECT * FROM tb_usoario WHERE nm_email LIKE '".$_POST['email']."' ORDER By nm_email ASC limit 10";
	$recebe = mysqli_query($conn, $sql);
	$rec_log = mysqli_fetch_assoc($recebe);
	$email_r = $rec_log['nm_email'];
	$senha_r = $rec_log['nm_senha'];
	$codigo_r = $rec_log['cd_usoario'];
	$nome_r = $rec_log['nm_usoario'];
	$tipo_r = $rec_log['tp_usoario'];

	//echo $teste3;


	/*if($email_r == $_POST['email'] && $senha_r == $_POST['senha']){
		$usoario_autenticado = true;
		$usoario_id = $user['id'];
		$usoario_perfil_id = $user['perfil_id'];
		$usoario_nome = $user['nome'];
	}*/

	if($email_r == $_POST['email'] && $senha_r == $_POST['senha']){
		$usoario_autenticado = true;
		$usoario_id = $codigo_r;
		$usoario_perfil_id = $tipo_r;
		$usoario_nome = $nome_r;
	}

	if($usoario_autenticado){
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usoario_id;
		$_SESSION['perfil_id'] = $usoario_perfil_id;
		$_SESSION['dado'] = 0;
		$_SESSION['nome'] = $usoario_nome;
		echo "foi carai";
		header('Location: main_page.php');
	}
	else{
		header('Location: login.php?login=erro');
		$_SESSION['autenticado'] = 'NAO';
	}


	/*$teste = "SELECT nm_email,nm_senha FROM tb_usoario WHERE nm_email LIKE 'teste%' ORDER By nm_email ASC limit 10";
	$otteste = mysqli_query($conn, $teste);
	$teste2 = mysqli_fetch_assoc($otteste);
	$teste3 = $teste2['nm_email'];
	echo $teste3;
	echo ('<pre>');
	print_r($teste2);
	echo ('</pre>');*/

 ?>