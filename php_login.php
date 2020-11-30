<?php
    //recebendo campo do formulário para efetuar filtro
	$email=$_POST['email'];
	$senha=$_POST['senha'];

	if($email && $senha !='') {
		//estabelecendo a conexão com banco de dados
		$conexao=mysql_pconnect('localhost','root','39421530') or die("Problema ao efetuar a conexão com banco de dados");	
		//abrindo o banco de dados que foi criado na área phpMyAdmin
		$conecta_banco=mysql_select_db('db_system',$conexao) or die("Problema ao abrir o banco de dados");
		//executando o comando sql para listar os registros da tabela
		$comando=mysql_query("select * from tbl_usuario where email_usu='$email' and senha_usu = '$senha'");
		
		if(mysql_num_rows($comando) > 0) {	// se resultou algum registro(linha)
			echo "<script language=javascript> window.alert('Login realizado com sucesso, bem vindo.');</script>";		
		}
		else {
			echo "<script language=javascript> window.alert('Desculpe, não encontramos uma conta com esse E-mail. Tente novamente ou crie um nova conta.');history.back();document.getElementById('email').focus();</script>";
		}
		//fechando o banco de dados
		$fecha_banco=mysql_close($conexao);
		//carregando página
		include 'contador_Caracter.html';
	}
	else {
		echo"<script language='JavaScript'>window.alert('Preencha todos os campos.');history.back();</script>";
	}
?>