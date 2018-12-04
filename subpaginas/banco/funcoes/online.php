<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
<?php

	session_start();
	$sair = isset($_GET['off'])?$_GET['off']:'erro sair';

		if (@$_SESSION['online'] == "ON") {
				$cor = 'green';
				$offOn = 'Online';
				echo "
					<form><input type='submit' value='Sair' name='off'></form>

				";
				echo "<div id='online'>$offOn</div>";
				}
		if ($sair == "Sair") {				
				$_SESSION['online'] = "OFF";
				$cor = 'red';
				$offOn = 'Offline';
				echo "<div id='online'>$offOn</div>";
		}
	?>
	<style></style>
</body>
</html>
