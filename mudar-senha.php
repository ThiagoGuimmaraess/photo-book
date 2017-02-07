<?php
/**
Arquivo responsável por mudar a senha 

segurança mínima
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Photo Book
 */


  
  include("funcoes/mudaSenha.php");
  $email=$_POST["email"];
 
  $senha=$_POST["senha"];
  /* verifica se o link foi usado (segurança mínima contra uso duplicaod do link) */
  if(isset($_COOKIE["usado"]))
  {
	  header("location:index");
      die();
  }
  
  mudaSenha($senha, $email);

?>