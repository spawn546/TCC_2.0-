<?php
	$servidor = "localhost";
	$dbname = "shield_master";
	$dbusuario = "root";
	$dbsenha = "";
	$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
	if(!$conn)
	{
		dia("Conexão falhou". mysqli_connect_error());
	}
	/*else
	{

		echo "funcionou bunitim";
	}*/
?>