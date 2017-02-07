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
	 
	 
	 
	 
	 function mudaSenha($senha, $email)  {
		 		$email= base64_decode($email);
		        $senhaencripitada=base64_encode(md5($senha)); 
     include("./modulos/configuracao.php");
	 
		  
		  
		  
	$query='UPDATE utilizador set senha="'.$senhaencripitada.'" WHERE email="'.$email.'"';
	$resultado= $mysqli->query($query);
	
	/* segurança mínima para evitar que o link seja usado duas vezes */
	
    $conteudo="usado";
    setcookie("usado", $conteudo, time()+3600*24*30*12*5);

    $mensagem=$_POST["mensagem"];

		header("location: ./entrar");       
		  
		  
		  
		  
		  
}


?>