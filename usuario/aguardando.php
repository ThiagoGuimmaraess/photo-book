<?php 
/* *********
Por Thiago Guimarães

email: thiagoguimaraess_16@hotmail.com
*********** */


include_once("../modulos/UsuarioDados.php");
include_once("../funcoes/seguranca.php"); 
include_once("../funcoes/verificaativado.php"); 
$usuario=$_SESSION["usuario"];
$email=$usuario;
verificaUsuario($usuario);
verificaAtivado($email);
 ?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
<head>
     <meta charset="UTF-8"/>

	  <!-- melhor visualização em dispositivos móveis -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	 
     <title>Photo Book:Painel do Usuário</title>
	 <link rel="stylesheet" href="../css/estilo.css" />
	  <link rel="stylesheet" href="css/painel.css" />
	 
 </head>
 <body>

 
 <?php 
echo '<div id="usuario">Bem vindo '.$usuario.'</div>';
 
if(isset($_GET["fonte"]))
{
	
	$_GET["fonte"];
	
	
	
}

	
		 

	  
	  
?>		 



  <div align="center" id='boas-vindas'>Parabéns! Você se cadastrou no Photo Book. Para ativar seu cadastro clique no link que enviamos ao seu email!  
		 
    <p align="center" style="margin-top:10px"><a href="enviaremail?email=<?=$usuario?>">O email não chegou? Reenviar email.</a> </p>


  </div>





<footer>
  <ul> 
    <li>
    <a href="index">Inicio</a> | <a href="enviar">Enviar foto</a> | <a href="alterar">Alterar dados</a>
    <li>
  </ul>
</footer>

 
</body>
</html>