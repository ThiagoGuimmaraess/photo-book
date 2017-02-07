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
	 
   include_once("seguranca.php");
   verificaSessao();	 
	 
   include_once("../modulos/usuarioDados.php");

function verificaAtivado($email)



{
	
    $verifica= new UsuarioDados();
	$email=$_SESSION["usuario"];
	$verifica->verificaAtivado($email);

	
	
	
	
	
	
}





?>