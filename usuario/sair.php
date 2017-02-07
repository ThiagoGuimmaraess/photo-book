	<?php
/* Chama a função de invalidar função  -   destruirSessao() 
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Photo Book
 */


	/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index");
	
     } 	
	
	include_once("../funcoes/destruirsessao.php");
	
	 destruirSessao();
	
	
	?>