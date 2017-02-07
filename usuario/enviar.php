<?php

/**
Arquivo responsável por verificar o login
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Photo Book
 */




include_once("../funcoes/seguranca.php");
include_once("../modulos/usuarioDados.php");
include_once("../funcoes/verificaativado.php"); 

$usuario=$_SESSION["usuario"];
$email=$usuario;

verificaSessao();

		
	 


 ?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
<head>
     <meta charset="UTF-8"/>

	  <!-- melhor visualização em dispositivos móveis -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	 
     <title>Photo Book: envie imagens</title>
	 <link rel="stylesheet" href="../css/estilo.css" />
	  <link rel="stylesheet" href="css/painel.css" />
	  
	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	  <script src="http://malsup.github.com/jquery.form.js"></script> 
	    
	 
	 
 </head>
 <body style="background:white;">

 
 <?php 
echo '<div id="usuario" style="margin-bottom:10px">Bem vindo '.$usuario.'</div>';	
echo '<a style="margin-left:25px; " href="index">início</a>';
echo '<a style="margin-left:25px; " href="sair">sair da conta</a>';
		
// $dados= new UsuarioDados();
 
 //$dados->dados($email);
	  
	  
?>	


<script type="text/javascript">
$(document).ready(function(){
     
     $('#foto').change('change',function(){
         $('#verfoto').html('Enviando...');
           $('#form').ajaxForm({
            target:'#verfoto' 
         }).submit();
     });
 })
</script>

    <section style="margin-top:30px">
	
	
	<div align="center" id="caixa">
     
	 
	 <form action="envia-imagem.php" id="form" method="post" enctype="multipart/form-data">
   		      
	    <div id="acao">
	    
		
		  <a href="enviar.php" class="tooltip"> 
	     
	       <span class="tooltiptext">Enviar imagem</span> 
		   
                <label for="foto">
                   <img src="imagens/enviarimagem.png" class="enviar" width="300px" />
                </label>
      
               <input  class="subir-imagem"  id="foto" name="foto" type="file" />
			   <input  name="email" value="<?=$email?>" type="hidden" />
			 
         </form>
	 
            </a> 
			
	 
			
        </div>
	


   </section>

  
  
  <div align="center" style="margin-top:10px;"  id="verfoto" ></div>




<footer>
  <ul> 
    <li>
    <a href="index">Inicio</a> | <a href="enviar">Enviar foto</a> | <a href="ver">Ver fotos</a>
    <li>
  </ul>
</footer>

 
</body>
</html>