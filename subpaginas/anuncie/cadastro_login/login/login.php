<?php
		session_start();
		$home = 'http://localhost:8080/testes/sessao/';
		if (@$_SESSION['online'] == "ON") {
		header("Location: ".$home);
		}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stilo.css">
    <title></title>
</head>
<body>
     <div id="logo"></div>
    <nav id="menu">
        <ul id="menu2"> 
            <li><a href="../../index.php">Voltar</a></li>
        </ul>
    </nav>
    <main id="corpo">
    
	<form>
		<label id="textlbl1" for="email2">E-mail</label><input type="email" name="email2" id="email2" required>
		<br><label  id="textlbl2" for="senha2">Senha</label><input type="password" name="senha2" id="senha2" required><br>
		<input type="submit" value="Login" name="login" id="login1">
	</form>
	<style>
		#email2{margin: 20px;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
		#textlbl1{margin-right: 10px;}
		#senha2{margin: 20px;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
		#textlbl2{margin-right: 18px}

		 #login1{width: 150px;height: 60px;transition: all ease 1s ; background-color: #222222; border-radius: 100px; font-size: 20px; color: #fff; margin-top: 50px; margin-bottom: 100px}
         #login1:hover{width: 160px;height: 65px; transition: all ease 1s}
	</style>

	<?php
			require_once '../../../banco/banco.php';

			$n1 = isset($_GET['email2'])?$_GET['email2']:'erro Email';
			$n2 = isset($_GET['senha2'])?$_GET['senha2']:'erro Senha';	
			$home = 'http://localhost:8080/oedap/subpaginas/pgempresas/pgempresas/pgempresa.php';
				$obj = new banco();
				$qry="SELECT * FROM usuario";
				$result = $obj->exeQuery($qry);

				foreach ($result as $value) {
					
				if ($n1 == $value['email'] and $n2 == $value['senha']) {
							$_SESSION['online'] = "ON";
							$_SESSION['nome'] = $value['nome'];
							header("Location: ".$home);
					}
				}
	?>
    </main>
    <style>
        
    </style>
</body>
</html>