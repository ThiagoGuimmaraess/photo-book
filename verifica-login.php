<?php

/**
Arquivo responsável por verificar o login
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Photo Book
 */




/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index");
	
     } 	
	 
  /* verifica se veio de um formulário */

  if($_SERVER["REQUEST_METHOD"]=="POST"){
	  
    include_once("modulos/usuarioDados.php");



    $email=$_POST["email"];

    $senha=$_POST["senha"];



    $entrar= new UsuarioDados();
    $entrar->entra($email, $senha);

  }
 /* se não veio, redireciona para a página inicial */

  else
   { 
	   
	header("location:index");
	
	
   } 

?>