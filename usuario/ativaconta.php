<?php


/* *********
Por Thiago Guimarães

email: thiagoguimaraess_16@hotmail.com
*********** */

include_once("../funcoes/protegearquivos.php");
bloqueiaArquivo();


include_once("../modulos/usuarioDados.php");
$email=$_GET["usuario"];


$ativa= new UsuarioDados();



$ativa->ativaUsuario($email);	
	 
	 
	 
 ?>