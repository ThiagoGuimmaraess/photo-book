<?php

if(!isset($_GET['recupera'])) 
{
	
	header("location:index");
	
}


  /* verifica se o link foi usado (segurança mínima contra uso duplicaod do link) */
  if(isset($_COOKIE["usado"]))
  {
	  header("location:index");
      die();
  }


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
<head>
     <meta charset="UTF-8"/>
	 
 <!-- melhor visualização em dispositíveis móveis -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	 
     <title>Photo Book: Sobre Photo Book</title>
	 <link rel="stylesheet" href="css/estilo.css" />
 </head>
 <body>
 
 <img  src="imagens/photobook.png" alt="Photo Book logo" title="Photo Book" id="logo">
 
  <menu id="menu">
 
    <ul>
 
         <li><a href="index" title="inicio">Início</a></li>
         <li><a href="sobre" title="sobre">Sobre</a></li>
         <li><a href="contato" title="contato">Contato</a></li>
      </ul>
 
  </menu>
  
  
  
  <hr />
  
  <h1>recupere sua senha</h1>
 
  <section>
  
  <div id="formulario-caixa">
    
   <form id="formulario" method="post" action="mudar-senha.php">
   
         <fieldset>
         
	  <ul>
	                <div style="clear:both" />
			
		
			  
			  
				  
		     <li>
			 
              <label>Senha</label>
			
			</li>
                  <input required name="senha" type="password" />     
			 	  <input  name="email" value="<?=$_GET["recupera"]?>" type="hidden" />     
			 	 		   	   
    
  	</ul>
     
	  <fieldset></br>
	  
	  <button type="submit" class="recuperar" >mudar senha</button>
	  
    </form> </br></br>	
  </div>
 
 

  <hr />








<footer>
  <ul> 
    <li>
    <a href="entrar">Entrar</a> | <a href="cadastrar">Cadastre-se</a> | <a href="termos">Termos de Uso</a>
    <li>
  </ul>
</footer>

 
</body>
</html>