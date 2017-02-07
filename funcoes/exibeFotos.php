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
	 
	 
	 
	 
	 function exibeFotos()  {
		 		 
		 
     include("./modulos/configuracao.php");
	 
		  
		  
		  
	$query='SELECT * FROM fotos';
	$resultado= $mysqli->query($query);
	

       while($res=mysqli_fetch_array($resultado)) {
		 
		  ?>
		 
  	   <div>		 
		 
		       <?php		 
		 
		 
		         echo '<img  src="./usuario/fotos/'.$res["foto"].'" />';
		 
		 		 
		 
		        ?>		 
		 
	    </div>		 
		 
		    <?php
		 
       }
		  
		  
		  
		  
		  
}


?>