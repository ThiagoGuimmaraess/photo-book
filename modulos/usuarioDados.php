<?php

/**
Classe dos dados do usuário e verificação de login do usuário
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */


/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index");
	
     } 	

class UsuarioDados{
	
	
	   /* dados básico de cadastro e login */	

    public $senha;
	public $nome;
	public $email;
	
	
	
	   /* verifica se o email inserido pelo usuário já está cadastrado no banco */	
	  
	
	 public  function verificaEmail($email){
		 
     include("../funcoes/seguranca.php");

     verificaSessao();
 
	
	 
       include("configuracao.php");
	   $query = 'SELECT * FROM utilizador WHERE email = "'.$email.'" ';
	   $resultado= $mysqli->query($query);
       echo $mysqli->error;
      
       $conta=mysqli_num_rows($resultado);
	   echo $mysqli->error;

	   if($conta>0){		   
	      header("location: ./cadastrar?erro=1");
		    /* usar a função close para garantir o encerramento do comando e conexao sql */	
		    $mysqli->close();
      /* exit (1)  para garantir a finalização da execução e evitar inserção quando já houver cadastrado o email inserido */
	  
		    exit(1);
			
 
	    }    
	  

    
	
 }
 
	 /* cadastra usuário inserindo os dados do formulário no banco */	

     public  function cadastra($nome, $email, $senha){
     
	      include("../funcoes/seguranca.php");

          verificaSessao();
		  
		  
	        $this->verificaEmail($email);	  
	 
	        $senhaencripitada=base64_encode(md5($senha)); 
	 
	 
             include("configuracao.php");
	         $query = 'INSERT INTO utilizador (nome, email, senha)  VALUES ("'.$nome.'", "'.$email.'", "'.$senhaencripitada.'" ) ';
	 
	         $insere= $mysqli->query($query);
     
	         if($insere)
	 
	          {
		        $_SESSION["usuario"]=$email;
		        header("location: usuario/aguardando?fonte=1");
		 
	        }
			
	         $mysqli->error; 
          /* usar a função close para garantir e facilitar o encerramento do comando e conexao sql */			   
	         $mysqli->close();
   }
	
	
	
	/* faz login do usuário em seu painel de controle */	

   public  function entra($email, $senha) {
	   
	   

            
            include("configuracao.php");
		
	        $senhaencripitada=base64_encode(md5($senha)); 
     
            $query = 'SELECT * FROM utilizador WHERE email = "'.$email.'" and senha= "'.$senhaencripitada.'" ';
            $resultado=  $mysqli->query($query);
	  
	  
               $conta=mysqli_num_rows($resultado);
	   
	        if($conta>0)
			
			  {	 
					   session_start();
                       $_SESSION["usuario"]=$email;				   
	                   header("location:usuario/index");
					   
                }  
					
			 else
		    {
						
					   header("location:./entrar?erro=1");
						
		     }
					
     /* usar a função close para garantir e facilitar o encerramento do comando e conexao sql */	
	     
   		 $mysqli->close();
       	


	   

  }
  
  
  
  
  
  
  
    public  function dados($email) {
		
		 include("../funcoes/seguranca.php");

         verificaSessao();

	   
         include("configuracao.php");
         $query ='SELECT * FROM utilizador WHERE email = "'.$email.'" ';
         $resultado= $mysqli->query($query);
	  
	        /* exibir dados do usuário */ 
            while($res=mysqli_fetch_object($resultado)){ 	   
	   
	         $res->nome;
		     $res->email;
	   
	      }
		 
		 
         /* usar a função close para garantir e facilitar o encerramento do comando e conexao sql */	
	      $mysqli->close();
       	 


	   

    }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  /* verifica se a conta do usuário está ativa */	

  
     public  function verificaAtivado($email){
		 
		  include("../funcoes/seguranca.php");

          verificaSessao();
     
	
	 
       include("configuracao.php");
	   $query = 'SELECT * FROM utilizador WHERE email = "'.$email.'" ';
	   $resultado= $mysqli->query($query);
       echo $mysqli->error;
	   $res=mysqli_fetch_array($resultado);
	   
	   
	   $ativado=$res["ativado"];
	   
	   
	   /* verifica se o arquivo não é o mesmo que vai ser direcionado para evitar problemas de redirecionamento infinito */	   
	   $arquivo =  basename($_SERVER['PHP_SELF']);
	
	   if($ativado=="" &&  $arquivo!=="aguardando.php" )
	   {
		  
		   
		   header("location: ../usuario/aguardando?fonte=1");
		
		    /* usar a função close para garantir e facilitar o encerramento do comando e conexao sql */	   
		    		   
 
		   
	   }
	   
	   
	   
	   
	   elseif( $ativado=="sim"  &&  $arquivo!=="index.php")
	   {
		  header("location: ../usuario/index");
		  	
		  return true; 
		   
	   } 
	   else
	   
	   {
		   
		  return true; 
		      
	   }
	   
	   
	   
	     $mysqli->close();   

   }		
		
		
		  /* verifica se a conta existe (semelhante a função verificaEmail() mas com outra finalidade) */	

  
     function verificaUsuario($email){
		 
		 include("../funcoes/seguranca.php");

          
     
	
	 
       include("configuracao.php");
	   $query = 'SELECT * FROM utilizador WHERE email = "'.$email.'" ';
	   $resultado= $mysqli->query($query);
       echo $mysqli->error;
	   $conta=mysqli_num_rows($resultado);

	  
	   if($conta<1)
	   {
		   
		   
		    header("location: ../usuario/index");
		    /* usar a função close para garantir e facilitar o encerramento do comando e conexao sql */	   
		    $mysqli->close();    		   
 
		   
	   }
	         
	       
	  

    
	
 }
 
 
 
 
   /* Ativa a conta do Usuário */	

  
     function ativaUsuario($email){
		 
		 include("../funcoes/seguranca.php");

          verificaSessao();
     
	
	 
       include("configuracao.php");
	   $query = 'UPDATE utilizador set ativado="sim" WHERE email="'.$email.'" ';
	   $resultado= $mysqli->query($query);
       
	   echo $mysqli->error;
	  
	 
		    header("location: ../usuario/index");
		    /* usar a função close para garantir e facilitar o encerramento do comando e conexao sql */	   
		    $mysqli->close();    		   
 
		   
	   
	         
	       
	  

    
	
   }
 
   
   
	
	
	
}


?>