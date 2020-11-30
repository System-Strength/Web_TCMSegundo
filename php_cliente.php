<?php
    $nome1=$_POST['nome'];
    $email1=$_POST['email'];
    $celular1=$_POST['celular'];
    $msg1=$_POST['msg'];

    if($nome1 && $email1 && $msg1 !='') {
        $conexao=mysql_pconnect('localhost','root','39421530') or die("Problema ao efetuar a conexão com banco de dados");
		//abrindo o banco de dados que foi criado na área phpMyAdmin
		$conecta_banco=mysql_select_db('db_system',$conexao) or die("Problema ao abrir o banco de dados");
		//executando o comando sql para listar os registros da tabela
		$comando=mysql_query("select * from tbl_usu where email_usu='$email1'");
		if(mysql_num_rows($comando) > 0) {	// se resultou algum registro(linha)		
			echo "<script language=javascript> window.alert('Você já entrou em contato conosco por esse E-mail. Por favor aguarde o retorno :D.');</script>";
		}
		else {
			$comando=mysql_query("insert into tbl_usu(nm_usu,email_usu,tl_usu,msg_usu)VALUES('$nome1','$email1','$celular1','$msg1')");
			echo "<script language=javascript> window.alert('Tudo certo.');</script>";
		}
		//fechando o banco de dados
		$fecha_banco=mysql_close($conexao);
		//carrega a página index.html novamente, do zero
		include 'index1.html';
    }
    else {
        echo"<script language='JavaScript'>window.alert('Preencha os campos necessários.');history.back();</script>";
    }
?>