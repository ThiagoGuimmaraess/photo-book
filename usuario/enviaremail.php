<?php
/* *********
Por Thiago Guimarães

email: thiagoguimaraess_16@hotmail.com
*********** */
include_once("../funcoes/protegearquivos.php");
bloqueiaArquivo();

/* manda email verificando se realmente existe no banco de dados por algum motivo ou caso seja alterado pelo usuário */
include_once("../funcoes/seguranca.php");
include_once("../funcoes/enviaemail.php");
	$verifica= new UsuarioDados();
	$email=$_GET["email"];
	$verifica->verificaUsuario($email);

 if(isset($email))


  {
	  
	enviaEmail($email);
	  
	 
	
	
  }
  
  else
	  
  {
	  header("location:index");
	  
	  
	  
  }











?>