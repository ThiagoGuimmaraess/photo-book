<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
<head>
     <meta charset="UTF-8"/>
	 
	 <!-- melhor visualização em dispositíveis móveis -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
     <title>Photo Book: Entre em contato</title>
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
  
  <h1>Entre em contato</h1>
  
  
  <div id="formulario-caixa">
   
   <form id="formulario" method="post" action="enviar-mensagem.php">
         <fieldset>
            <legend align="center">Preencha os dados e envie</legend>
              <ul>
			  
			  <li>
			   <label>Nome</label>
			       </li>
                  <input required name="nome" type="text" />
              
				  
		     <li>
              <label>Email</label>
			      </li>
                  <input required name="email" type="email" />
         
			 
			 
			 <li>
              <label>Assunto</label>
			     </li>
                  <input required name="assunto" type="text" />
           
				   
				 
             <li>				
              <label>Mensagem</label>
			  </li>
                <textarea required name="mensagem"></textarea>
		
				
				
		      </ul>
     
	  <fieldset>
	  
	  <button type="submit" >ENVIAR</button>
	  
    </form>
	<section style="margin-top:30px; margin-bottom:30px">
    
	<p>
     photobook@photobook.net
    </p>
   
   <p>
    +55 085 9 0000-0000 
   </p>
      <p style="margin-top:10px">
   Fortaleza - CE
   </p>
 </section>
  </div>
 












<footer>
  <ul> 
    <li>
    <a href="entrar">Entrar</a> | <a href="cadastrar">Cadastre-se</a> | <a href="termos">Termos de Uso</a>
    <li>
  </ul>
</footer>

 
</body>
</html>