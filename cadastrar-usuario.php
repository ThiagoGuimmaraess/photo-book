<?php
/**
Chama o método cadastra() da classe UsuarioDados() para inserir o novo usuário no banco
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Photo Book
 */

/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index");
	
     } 	
	 
	 include("funcoes/seguranca.php");
	 verificaSessao();

/* verifica se veio de um formulário */

if($_SERVER["REQUEST_METHOD"]=="POST"){

  include_once("modulos/UsuarioDados.php");

   $nome = $_POST["nome"];

   $email=$_POST["email"];

   $senha=$_POST["senha"];



   $cadastra= new UsuarioDados();
   $cadastra->cadastra($nome, $email, $senha);

}

/* se não veio, redireciona para a página inicial */

  else
   { 
	   
	header("location:index");
	
	
   } 

?>