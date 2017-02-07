<?php  
include_once("modulos/configuracao.php");  
include_once("funcoes/exibeFotos.php");
 ?>
 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
<head>
     <meta charset="UTF-8"/>

	  <!-- melhor visualização em dispositíveis móveis -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	 
     <title>Photo Book: Livro de fotos online, compartilhe seus momentos!</title>
	 <link rel="stylesheet" href="css/estilo.css" />
 </head>
 <body>
 <header>
 <img  src="imagens/photobook.png" alt="Photo Book logo" title="Photo Book" id="logo">
 
  <menu id="menu">
 
    <ul>
 
         <li><a href="index" title="inicio">Início</a></li>
         <li><a href="sobre" title="sobre">Sobre</a></li>
         <li><a href="contato" title="contato">Contato</a></li>
      </ul>
 
  </menu>
  
  </header>
  
  <hr />
  
  <h1>Veja as fotos compartilhadas!</h1>
 



    <section id="galeria" style="margin-top:30px">
                <?php   

             
                exibeFotos();
//echo $codigo = substr(microtime(),1,rand(8,12));

				 ?>
				 
  </section>
  <div style="clear:both" />
  
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