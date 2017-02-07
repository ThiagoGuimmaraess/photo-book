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
  
  <h1>Cadastre-se!</h1>
 
  <section>
  
  <div id="formulario-caixa">
    
   <form id="formulario" method="post" action="cadastrar-usuario.php">
   
         <fieldset>
            <legend align="center">Preencha os dados e faça seu cadastro</legend>
	  <ul>
	                <div style="celar:both" />
			  <?php if(isset($_GET["erro"])){
	
	
	if($_GET["erro"]==1)
	
	{
		
		echo "<span align='center' style='color:red;  margin-bottom:10px; margin-top:10px'>Já existe um usuário com esse email</span>";
		
	}
		
		
	}
	
	?>
		
			  
			  <li>
			   <label>Nome</label>
			       </li>
                  <input required name="nome" type="text" />
              
				  
		     <li>
              <label>Email</label>
			      </li>
                  <input required name="email" type="email" />
         
			 
			 
			 <li>
              <label>Senha</label>
			     </li>
                  <input required name="senha" type="password" />
           
				   
			
				
				
		      </ul>
     
	  <fieldset>
	  
	  <button type="submit" class="cadastrar" >CADASTRAR</button>
	  
    </form>
	
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