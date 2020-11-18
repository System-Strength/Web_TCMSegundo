<?php
    //recebendo campo do formulário para efetuar filtro
	$nome=$_POST['usuario'];
	$senha=$_POST['senha'];

	if($nome && $senha !='') {
		//estabelecendo a conexão com banco de dados
		$conexao=mysql_pconnect('localhost','root','39421530') or die("Problema ao efetuar a conexão com banco de dados");	
		//abrindo o banco de dados que foi criado na área phpMyAdmin
		$conecta_banco=mysql_select_db('db_system',$conexao) or die("Problema ao abrir o banco de dados");
		//executando o comando sql para listar os registros da tabela
		$comando=mysql_query("select * from tbl_usuario where usuario_usu='$nome' and senha_usu = '$senha'");
		
		if(mysql_num_rows($comando) > 0) {	// se resultou algum registro(linha)
			echo "<script language=javascript> window.alert(`Bem-vindo, $nome`);</script>";		
		}
		else {
			echo "<script language=javascript> window.alert('Desculpe, não encontramos uma conta com esse Usuário. Tente novamente ou crie um nova conta.');history.back();</script>";
		}
		//fechando o banco de dados
		$fecha_banco=mysql_close($conexao);
	}
	else {
		echo"<script language='JavaScript'>window.alert('Preencha todos os campos.');history.back();document.getElementById('usu').focus();</script>";
	}
?>