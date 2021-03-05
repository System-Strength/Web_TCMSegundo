<?php
    //recebendo campo do formulário para efetuar filtro
	$rg=$_POST['rg'];
	$senha=$_POST['senha'];

	if($rg && $senha !='') {
		//estabelecendo a conexão com banco de dados
		$conexao=mysql_pconnect('localhost','root','39421530') or die("Problema ao efetuar a conexão com banco de dados");	
		//abrindo o banco de dados que foi criado na área phpMyAdmin
		$conecta_banco=mysql_select_db('db_system',$conexao) or die("Problema ao abrir o banco de dados");
		//executando o comando sql para listar os registros da tabela
		$comando=mysql_query("select * from tbl_funcionario where rg_fun='$rg' and senha_fun = '$senha'");
		
		if(mysql_num_rows($comando) > 0) {	// se resultou algum registro(linha)
			echo "<script language=javascript> window.alert('Login realizado com sucesso, bem vindo.');window.location.href = 'index2.html'</script>";
		}
		else {
			echo "<script language=javascript> window.alert('Dados incorretos. Por favor, tente novamente.');history.back();document.getElementById('email').focus();</script>";
		}
		//fechando o banco de dados
		$fecha_banco=mysql_close($conexao);
	}
	else {
		echo"<script language='JavaScript'>window.alert('Preencha todos os campos.');history.back();</script>";
	}
?>