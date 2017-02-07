	<?php	
/** Esta é uma função de invalidação de segurança média de sessões 
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Photo Book
 */


/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index");
	
     } 	
	
	 include_once("seguranca.php");
	 
	 /* destruir sessão oferecendo proteção média */
	 
	 
	 function destruirSessao()
	 
	 {
		 
		 /* remove o conteúdo da sessão */
		 unset($_SESSION["usuario"]);
		 /* o conteúdo da sessão é definido como nulo */
		 $_SESSION["usuario"]=null;
		 /* destroi dados de todas as sessões para garantir */
		 session_destroy();	 
		 
		 /*redireciona o usuário após a eliminação ddas sessões */

         header("location:../index");
				 

		 
		 
		 
	 }
	
	
	
	
	
	?>