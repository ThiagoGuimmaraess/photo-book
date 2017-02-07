<?php

 include("../funcoes/seguranca.php");
 include("funcoes/insereImagem.php");
 
 $foto=$_FILES["foto"];
 $email=$_POST["email"];
 
 inserirImagem($foto, $email);



?>