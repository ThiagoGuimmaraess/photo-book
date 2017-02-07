<?php
/**
Arquivo responsável por verificar o login
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Photo Book
 */

  include_once("../funcoes/seguranca.php");
  verificaSessao();	 
  
  include("funcoes/excluirImagem.php");
  $foto=$_GET["foto"];
  $email=$_SESSION["usuario"];
 
  excluirImagem($foto, $email);







?>