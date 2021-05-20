<?php 
	session_start();

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	$arquivo = fopen('item.hd','a');

	$nome_item = str_replace('#', '-', $_POST['nome_item']);
	$tipo_item = str_replace('#', '-', $_POST['tipo_item']);
	$dano_item = str_replace('#', '-', $_POST['dano_item']);

	$texto = $_SESSION['id'] . '#' . $_POST['nome_item'] . '#' . $_POST['tipo_item'] . '#' . $_POST['dano_item'] . PHP_EOL;
	echo $texto;

	fwrite($arquivo, $texto);
	fclose($arquivo);

	header("Location: inventario.php");
?>