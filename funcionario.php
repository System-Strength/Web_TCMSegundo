<?php
	//recebendo campo do formulário para efetuar filtro
	$nome=$_POST['nm'];
	$senha=$_POST['senha'];
    $rg=$_POST['rg'];
    $end=$_POST['end'];
    $data=$_POST['data'];

	if($nome && $senha && $rg && $end && $data !='') {
		//estabelecendo a conexão com banco de dados
		$conexao=mysql_pconnect('localhost','root','39421530') or die("Problema ao efetuar a conexão com banco de dados");
			
		//abrindo o banco de dados que foi criado na área phpMyAdmin
		$conecta_banco=mysql_select_db('db_system',$conexao) or die("Problema ao abrir o banco de dados");
		
		//executando o comando sql para listar os registros da tabela
		$comando=mysql_query("select * from tbl_funcionario where rg_fun='$rg'");
		
		if(mysql_num_rows($comando) > 0)	// se resultou algum registro(linha)
		{		
			echo "<script language=javascript> window.alert('RG já cadastrado. Verifique os dados e tente novamente.');history.back();</script>";
		}
		else 
		{
			$comando=mysql_query("insert into tbl_funcionario(nm_fun,senha_fun,nasci_fun,rg_fun,end_fun)VALUES('$nome','$senha','$data','$rg','$end')");
			echo "<script language=javascript> window.alert('Cadastro concluído.');history.back();</script>";
		}
		//fechando o banco de dados
		$fecha_banco=mysql_close($conexao);
	}
	else {
		echo"<script language='JavaScript'>window.alert('Preencha todos os campos!');history.back();</script>";
	}
?>