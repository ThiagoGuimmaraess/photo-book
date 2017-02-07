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
	 





function excluirImagem($foto, $email)
{
	
	 include("../modulos/configuracao.php");
	 
	 
	 $query= 'DELETE FROM fotos WHERE codigo="'.$foto.'" and email="'.$email.'"';
	 $deleta=$mysqli->query($query);
	 if($deleta)
	 {
		 
		 header("location:ver");
		 
	 } else
		 
	 {
		 
		echo "houve um erro ao deletar sua foto. Tente novamente." ;
		
		
		
		 
	 }
	 
	
}

?>


?>