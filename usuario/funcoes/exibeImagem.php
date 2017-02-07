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


function exibeImagem($email)
{
	
	include("../modulos/configuracao.php");
	
	
	
	 $query='SELECT * FROM fotos WHERE email="'.$email.'"';
	 $resultado= $mysqli->query($query);
	 $conta=mysqli_num_rows($resultado);
	
	if($conta<1){
		 
		echo "<div align='center'>Você não tem nenhuma foto. <a href='enviar'> Que tal adicionar uma agora?</a></div>"; 
	 }
	 
	 while($res=mysqli_fetch_array($resultado)) {
		 
		 ?>
		 
		 <div>
		 
		 
		 <?php
		 
		 echo '<img  src="fotos/'.$res["foto"].'" />'.'<a class="apaga" href="excluir-foto.php?foto='.$res["codigo"].'"> apagar foto </a>';
		 
		 
		 
		 
		 ?>
		 
		 
		 </div>
		 
		 
		 <?php
		 
	 }
	 
	 
	
}

?>