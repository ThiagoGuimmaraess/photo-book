<?php
/**
Envia email para confirmar cadastro.
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */

/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index");
	
     } 	
 include("funcoes/seguranca.php");
 verificaSessao();	 

/* verifica se veio de um formulário */

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nome=$_POST["nome"];
$email=$_POST["email"];
$assunto=$_POST["assunto"];
$mensagem=$_POST["mensagem"];



  $nome;
  $msg .= " Mensagem: .$mensagem";
  
 $para="photobook@photbook.net";

  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  http://www.photobook.net\n"; 
  $headers .= "X-Sender:  $email\n"; 
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  \n";
  $headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $msg, $headers);  
  
 
}


?>
















?>