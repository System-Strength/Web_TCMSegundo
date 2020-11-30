<?php
    //recebendo campo do formulário para efetuar filtro
    $nome=$_POST['usuario1'];
    $senha=$_POST['senha1'];
    $email=$_POST['email1'];
    
    if($nome && $senha && $email !='') {
        //estabelecendo a conexão com banco de dados
        $conexao=mysql_pconnect('localhost','root','39421530') or die("Problema ao efetuar a conexão com banco de dados");	
        //abrindo o banco de dados que foi criado na área phpMyAdmin
        $conecta_banco=mysql_select_db('db_system',$conexao) or die("Problema ao abrir o banco de dados");
        //executando o comando sql para listar os registros da tabela
        $comando=mysql_query("select * from tbl_usuario where email_usu='$email'");
        
        if(mysql_num_rows($comando) > 0) {	// se resultou algum registro(linha)
            echo "<script language=javascript> window.alert('E-mail já cadastrado. Tente novamente.');history.back();document.getElementById('email').focus();</script>";
        }
        else {
            $comando=mysql_query("insert into tbl_usuario(email_usu,nm_usu,senha_usu)VALUES('$email','$nome','$senha')");
            echo "<script language=javascript> window.alert(`Cadastro realizado, $nome.`);</script>";
            //fechando o banco de dados
            $fecha_banco=mysql_close($conexao);
            //carrega a página
            include 'contador_Caracter.html';
          
        }
    }
    else {
        echo"<script language='JavaScript'>window.alert('Preencha todos os campos.');history.back();</script>";
    }
?>