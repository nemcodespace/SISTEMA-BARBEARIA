<?php
//conexao banco de dados
$host = "127.0.0.1";
$user = "root";
$senha = "Milton10@";
$db = "barbearia";

$conn = new mysqli($host, $user, $senha, $db);

if($conn->connect_errno){
  echo "Erro na conexão" . $conn->connect_error;
}

?>