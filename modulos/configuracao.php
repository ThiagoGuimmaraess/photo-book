<?php
/**
Envia email para confirmar cadastro.
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */

/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index");
	
     } 	

mb_internal_encoding('UTF-8');


mb_http_output('UTF-8');




/* conexão em MySQLi orientado a objetos: mais rápido, menos código e segurança parecida com a maneira PDO */


$mysqli = new mysqli('localhost', 'root', 'usbw', 'photobook');

/* checa conexao */
if (mysqli_connect_errno()) {
    printf("Erro ao conectar: %s\n", mysqli_connect_error());
    exit();
}

if (!$mysqli->query("SET NAMES UTF8")) {
    printf("Mensagem de erro: %s\n", $mysqli->error);
}


	
	
	
	
	




?>