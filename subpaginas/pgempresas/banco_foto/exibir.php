<?php
session_start();
	$_SESSION["id"] = '18';
	$n1 = $_SESSION["id"];
 require_once 'conexao.php';

  $query = mysqli_query($conn, "SELECT * FROM img WHERE idimg = $n1");

 foreach ($query as $value) {
 		echo $img = $value['img'];
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<img src=" foto/<?=$img?>">

		<style>
			img{width: 700px}
		</style>

</body>
</html>


