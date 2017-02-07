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
	 
  include_once("../funcoes/seguranca.php");
  verificaSessao();	 
	 
	 
	 

include_once("seguranca.php");

verificaUsuario($_SESSION["usuario"]);

 function enviaEmail($email){
   


     $para=$email;
     $mensagem="Olá. Você solicitou uma abertura de conta no Photo Book. Clique no link para ativá-la. <a href='ativaconta?email=md5($email)'>ativaconta?email=md5($email)</a> </br></br> Caso não tenha criado esta conta, desconsidere este email.";
   " Mensagem: .$mensagem";  $assunto="Photo Book";
	 
   
     $headers =  "Content-Type:text/html; charset=UTF-8\n";
     $headers .= "From:  http://www.photobook.net\n"; 
     $headers .= "X-Sender:  $email\n"; 
     $headers .= "X-Mailer: PHP  v".phpversion()."\n";
     $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
     $headers .= "Return-Path:  \n";
     $headers .= "MIME-Version: 1.0\n";

      if(mail($para, $assunto, $mensagem, $headers)){
	
     	header("location:../index?fonte=2");
	
      }  
		
		else
			
        {
	         die("houve um erro ao enviar seu email. Tente novamente");
	   
        }
	  
	  

 }







?>