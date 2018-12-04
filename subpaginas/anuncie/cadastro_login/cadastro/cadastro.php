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
        <div id="mensagd">
         <p>Olá senhor @.... e com imenso que recebemos vc aqui</p>   
        </div>
        <form action="../../../banco/inserir_tabela.php" method="post">
        <h1>Usuario</h1>
        <div id="area2">
            <br><label>Nome</label><input type="text" name="nome" class="input1"  required>
            <br><label>Sobrenome</label><input type="text" name="sobren" class="input2" required>
            <br><label>E-mail</label><input type="email" name="email" class="input3" required>
            <br><label>Senha</label><input type="password" name="senha" class="input4" required>
            <br><label>Contato</label><input type="tel" name="contato" class="input5" required>

        </div>
        <div id="area3">
            <h1>Empresa</h1>
            <br><label>Nome</label><input type="text" name="nomeemp" class="input01" required>
            <br><label>Sigla</label><input type="text" name="sigla" class="input02" required>
            <br><label>Bairro</label><input type="text" name="bairro" class="input03" required>
            <br><label>Rua</label><input type="text" name="rua" class="input04" required>
            <br><label>Numero</label><input type="enum" name="numero" class="input05" required>
            <br><label>Referência</label><input type="text" name="refe" class="input06" required>
        </div>

        <div id="area">
            <h1>Descrição sistema</h1>
            <textarea name="desc1" rows="15" cols="70" id="textarea"  required>
                
            </textarea>
        </div>
        <input type="hidden" value="cadastro" name="cads">
        <input type="submit" value="Confirmar Cadastro" name="">
    </form>
    </main>
    <style >
        #mensagd{border:1px solid black; width: 70%;height: 170px; margin-top: 50px}
        #area{border:1px solid black;height: auto; margin-top: 50px;}
        #textarea{padding: 7%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; width: 100%;}
        #area2{border:1px solid black;width: 100%;height: auto; margin-top: 10px; margin-right: 20%}
        #area3{border:1px solid black;width: 100%;height: auto; margin-top: 10px; margin-right: 20%}
        .input1{margin: 10px;margin-left: 9%;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input2{margin: 10px;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input3{margin: 10px;margin-left: 7.5%;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input4{margin: 10px;margin-left: 9%;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input5{margin: 10px;margin-left: 6.3%;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input01{margin: 10px;margin-left: 9%;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input02{margin: 10px;margin-left: 10%;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input03{margin: 10px;margin-left: 8%;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input04{margin: 10px;margin-left: 11.3%;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input05{margin: 10px; margin-left: 5%;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}
        .input06{margin: 10px;height: 30px; box-shadow: 7px 7px 7px 1px rgba(0, 0, 0, 0.2);}


    </style>
</body>
</html>