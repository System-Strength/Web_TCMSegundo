<?php
	//estabelecendo a conexão com banco de dados
	$conexao=mysql_pconnect('localhost','root','39421530') or die("Problema ao efetuar a conexão com banco de dados");
		
	//abrindo o banco de dados que foi criado na área phpMyAdmin
	$abre_banco=mysql_select_db('db_system',$conexao) or die("Problema ao abrir o banco de dados");
	
	//recebendo campo do formulário para efetuar filtro
	$dado=$_POST['dado'];
	
	//executando o comando sql para listar os registros da tabela
    $comando=mysql_query("select * from tbl_usu where email_usu='$dado'") or die(mysql_error());
    $comando2=mysql_query("select * from tbl_funcionario where rg_fun='$dado'") or die(mysql_error());
   			
	if(mysql_num_rows($comando) > 0)	// se resultou algum registro(linha)
	{
		echo "<body style='background: #111111;
		font-family: sans-serif;
		color: black
		background-repeat: no-repeat;'>";
		echo "<table style='width: 60%;
		height: 25%;
		margin: 8% 14%;
		font-size: 15pt;
		background: #f5f5f5;'>";
			echo "<tr><th colspan=5; style='border: royalblue;
			border-style: solid; font-size: 18pt;'>DADOS DO REGISTRO PESQUISADO</th></tr>";
			echo "<tr'><th style='border: royalblue;
			border-style: solid;'>ID</th><th style='border: royalblue;
			border-style: solid;'>NOME</th><th style='border: royalblue;
			border-style: solid;'>E-MAIL</th><th style='border: royalblue;
			border-style: solid;'>TELEFONE</th><th style='border: royalblue;
			border-style: solid;'>MENSAGEM</th></tr>";
				
		while ($linha=mysql_fetch_array($comando))
			{
                $id=$linha['id_usu'];
                $nome=$linha['nm_usu'];
                $email=$linha['email_usu'];
                $tel=$linha['tl_usu'];
                $msg=$linha['msg_usu'];
				//imprimindo o vetor
				echo "<tr style=''><td style='border: royalblue;
				border-style: solid; text-align: center;'>$id</td><td style='border: royalblue;
				border-style: solid; text-align: center;'><p style='width: 8em;'>$nome</p></td><td style='border: royalblue;
				border-style: solid; text-align: center;'><p style='width: 12em;'>$email</p></td><td style='border: royalblue;
				border-style: solid; text-align: center;'><p style='width: 7em;'>$tel</td><td style='border: royalblue;
				border-style: solid; text-align: center;'><p style='width: 22em;'>$msg</p></td></tr>";
			}
		echo "</table>";
		echo "<br/>";
		echo "<br/>";
		echo "<form>";
		echo "<input type='button' value='Voltar' onClick='history.back();' style='border:0;
		background: none;
		margin: -5% 43%; 
		text-align: center;
		padding: 24px 30px;
		width: 180px;
		outline: none;
		font-size: 15pt;
		color: white;
		cursor: pointer;'/>";
		echo "</form>";
        echo "</body>";	
	}
	else if(mysql_num_rows($comando2) > 0)
	{
        echo "<body style='background: #111111;
		font-family: sans-serif;
		color: black;
		background-repeat: no-repeat;'>";
		echo "<table style='width: 60%;
		height: 25%;
		margin: 8% 10%;
		font-size: 15pt;
		background: #f5f5f5;'>";
			echo "<tr><th colspan=6; style='border: royalblue;
			border-style: solid; font-size: 18pt;'>DADOS DO REGISTRO PESQUISADO</th></tr>";
			echo "<tr><th style='border: royalblue;
			border-style: solid; font-size: 18pt;'>CÓDIGO</th><th style='border: royalblue;
			border-style: solid; font-size: 18pt;'>NOME</th><th style='border: royalblue;
			border-style: solid; font-size: 18pt;'>SENHA</th><th style='border: royalblue;
			border-style: solid; font-size: 18pt;'>NASCIMENTO</th><th style='border: royalblue;
			border-style: solid; font-size: 18pt;'>RG</th><th style='border: royalblue;
			border-style: solid; font-size: 18pt;'>ENDEREÇO</th></tr>";
				
		while ($linha2=mysql_fetch_array($comando2))
			{
                $cd=$linha2['cd_fun'];	
                $nm=$linha2['nm_fun'];
                $senha=$linha2['senha_fun'];
                $nasci=$linha2['nasci_fun'];
                $rg=$linha2['rg_fun'];
                $end=$linha2['end_fun'];
				//imprimindo o vetor
				echo "<tr><td style='border: royalblue;
				border-style: solid; text-align: center;'>$cd</td><td style='border: royalblue;
				border-style: solid; text-align: center;'><p style='width: 8em;'>$nm</p></td><td style='border: royalblue;
				border-style: solid; text-align: center;'>$senha</td><td style='border: royalblue;
				border-style: solid; text-align: center;'>$nasci</td><td style='border: royalblue;
				border-style: solid; text-align: center;'><p style='width: 7em;'>$rg</p></td><td style='border: royalblue;
				border-style: solid; text-align: center;'><p style='width: 22em;'>$end</p></td></tr>";
			}
		echo "</table>";
		echo "<br/>";
		echo "<br/>";
		echo "<form>";
		echo "<input type='button' value='Voltar' onClick='history.back();' style='border:0;
		background: none;
		margin: -5% 43%; 
		text-align: center;
		padding: 24px 30px;
		width: 180px;
		outline: none;
		font-size: 15pt;
		color: white;
		cursor: pointer;'/>";
		echo "</form>";
        echo "</body>";	
    }
    else {
        echo "<script language=javascript> window.alert('Dado incorreto. Tente novamente.');history.back();</script>";
    }
	//fechando o banco de dados
	$fecha_banco=mysql_close($conexao);
?>
  
