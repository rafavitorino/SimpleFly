<?php

$host="db4free.net";
$username="simplefly";
$password="12345678";
$db_name="simpleflybanco";
$tabela="cadastrar_usuario";

$conect = @mysqli_connect($host,$username, $password, $db_name)
or die ("problemas com a conexão do Banco de Dados");

?>