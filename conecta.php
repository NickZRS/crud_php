<?php

$servidor="localhost";      // Endereço do servidor mySQL
$udb="root";                    // Usuário do banco de dados (fornecido pelo provedor)
$senha="usbw";                // Senha de acesso ao mySQL
$bdados="sistema_vendas";            // Nome do banco de dados que se deseja acessar

$conn = mysqli_connect($servidor, $udb, $senha, $bdados);
  
if (!$conn) {
  echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
}

mysqli_query($conn, "SET NAMES utf8");

?>