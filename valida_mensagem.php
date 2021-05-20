<?php	
//session_start();

	$arquivo = fopen('mensagens.hd','a');

	$text = $_POST['mensagem'];
	

	$texto =   $text. PHP_EOL;
	
	fwrite($arquivo, $texto);

	fclose($arquivo);


	//echo $texto;
	header('Location: main_page.php');

?>