<?php
/**
Arquivo responsável por proteger páginas (apenas exemplo não funcional devido as altas implementações que se faz necessário
 para funcionar em diversos diretórios e maneiras de acesso)
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Photo Book
 */



/* função de proteção contra acesso a arquivos importantes como configuração do banco de dados e arquivos de funções e classes 
 (nível de proteção médio que combate as tentativas de invasão mais comuns). Essa função, sem maiores implementações, tende a falhar devido 
 aos diferentes tipos de acesso de cada arquivo. 
 
 !>> Essa função é apenas exemplo. iremos adicionar o códiugo abaixo diretamente no script a ser protegido <<.
 
 
 
 */

function bloqueiaArquivo(){
	
	
	
	
 
 
	
	if(basename($_SERVER["PHP_SELF"])==basename($_SERVER['PHP_SELF']) ){
		
		   header("location: ../index");
		
		
	}

     if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename($_SERVER['PHP_SELF'])) === 0 ){
     	 echo  $_SERVER['SCRIPT_NAME'];
	      header("location:../index");
	
     } 	






}





?>