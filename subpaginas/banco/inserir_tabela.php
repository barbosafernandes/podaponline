<?php
//-----------------usuario_dados-------------------------------------------
	$use1 = isset($_POST['nome'])?$_POST['nome']:'use_erro_01';
	$use2 = isset($_POST['sobren'])?$_POST['sobren']:'use_erro_02';
	$use3 = isset($_POST['email'])?$_POST['email']:'use_erro_03';
	$use4 = isset($_POST['senha'])?$_POST['senha']:'use_erro_04';
	$use5 = isset($_POST['contato'])?$_POST['contato']:'use_erro_05';
	echo $use1;
	
//-------------------------------------------------------------------------
//-----------------empresa_dados-------------------------------------------	
	$empre1 = isset($_POST['nomeemp'])?$_POST['nome']:'empre_erro_01';
	$empre2 = isset($_POST['sigla'])?$_POST['sigla']:'empre_erro_02';
	$empre3 = isset($_POST['bairro'])?$_POST['bairro']:'empre_erro_06';
	$empre4 = isset($_POST['rua'])?$_POST['rua']:'empre_erro_03';
	$empre5 = isset($_POST['numero'])?$_POST['numero']:'empre_erro_04';
	
	
//-------------------------------------------------------------------------
//------------------descrição_dados----------------------------------------
	$desc1 = isset($_POST['desc1'])?$_POST['desc1']:'desc_erro_01';
//------------------dados confirmação-------------------------------------------------------
	$cads = isset($_POST['cads'])?$_POST['cads']:'erro confirmacao';
	$home = 'http://localhost:8080/oedap/index.php';
//-------------------------------------------------------------------------
	require_once 'banco.php';
	class funcoes_banco{

	function empresa($empre1,$empre2,$empre3,$empre4,$empre5,$empre6){
		$obj = new banco;
		$qry = "
		INSERT INTO empresa (nome, sigla,bairro,rua_av, numero)
		VALUES ('$empre1','$empre2','$empre3','$empre4','$empre5');";
		$obj->exeQuery($qry);
	}

	function usuario($use1,$use2,$use3,$use4,$use5){
		$obj = new banco;
		$qry = "
		INSERT INTO usuario (nome, sobrenome, email, senha, contato)
		VALUES ('$use1','$use2','$use3','$use4','$use5');";
		$obj->exeQuery($qry);

	}

	function descricao($desc1){
		$obj = new banco;
		$qry = "
		INSERT INTO descricao (descri) VALUES ('$desc1');";
		$obj->exeQuery($qry);

	}
	
}


if ($cads == "cadastro") {
	$obj = new funcoes_banco;
	$obj->empresa($empre1,$empre2,$empre3,$empre4,$empre5);
	$obj->usuario($use1,$use2,$use3,$use4,$use5);
	$obj->descricao($desc1);
	header("Location: ".$home);
}else{
		echo "<font color='red'>CONFIRME O CADASTRO</font>";
	}

?>