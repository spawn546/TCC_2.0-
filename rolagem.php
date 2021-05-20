<?php
	
	session_start();

	print_r($_POST);

	$result = 0;

	switch ($_POST['dado']) {
		case 'D20':
			$result = rand(1,20);
			break;

		case 'D10':
			$result = rand(1,10);
			break;

		case 'D12':
			$result = rand(1,12);
			break;
		
		case 'D100':
			$result = rand(1,100);
			break;

		case 'D6':
			$result = rand(1,6);
			break;
	}

	$_SESSION['dado'] = $result;

	header("location: main_page.php");

?>