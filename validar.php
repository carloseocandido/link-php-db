<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		border: 0;
	}
	html{
		font-family: arial;
		font-size: 62.5%;
	}
	header{
		background-color: rgba(0,139,139);
		color: rgba(255, 255, 255, 1.0);
		padding: 5px;
		text-align: center;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.0);
	}
	footer{
		background-color: rgba(0,139,139);
		color: rgba(255, 255, 255, 1.0);
		padding: 5px;
		text-align: center;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.0);
	}
	body{
		text-align: center;
		font-size: 1.6rem;
	}
	label{
		font-weight: bold;
		font-size: 1.8rem;
	}
	input{
		font-size: 1.7rem;
		text-align: center;
		border: solid;
		border-radius: 5px;
		padding: 5px;
		width: 47%;
	}
	.botao{
		width: 20%;
		background-color: rgba(200, 255, 150, 1.0);
		color: rgba(0, 0, 0, 1.0);
		text-shadow: 2px 2px 5px rgba(255, 255, 255, 1.0);
		font-weight: bold;
		font-size: 1.8rem;

	}


</style>	

<body>
	<?php
	?>
	<header>
		<h1>Agradecemos por seu Cadastro</h1>
		<h3>Em breve você recebera nossos cupons de desconto</h3>
	</header>
	
	<br>
  
  
  
  <?php

        require_once('conexao.php');

        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $bancoDados = new db();

        $link = $bancoDados-> conecta_mysql();

        $sql = "insert into usuarios (usuario, email, senha) values('$usuario', '$email', '$senha')";

        mysqli_query($link, $sql);
    ?>

<section>
    <h2>Muito Obrigado por seu cadastro.</h2><br>
    <a href="index.php">Voltar</a>
</section>

<br>
	<footer>
		<h3>PROJETINHO LTDA</h3>
		<h3>CONTATO: XXXXXXXXXXXXXXXX@XXXXXXX.com</h3>
		<h3>CNPJ: XX.XXX.XXX/0001-XX</h3>		
	</footer>

</body>
</html>