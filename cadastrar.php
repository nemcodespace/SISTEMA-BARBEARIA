<?php
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location: index.php");
  exit;
}
include_once("config/conexao.php");
if($_SERVER["REQUEST_METHOD"] !== "POST"){
  header("Location: dashboard.php");
  exit;
}else {
//RECEBENDO DADOS DO CLIENTE
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$telefone = $_POST["telefone"];

//INICIANDO O DELETE DO CLIENTE
$sql = $conn->prepare("INSERT INTO clientes (nome, sobrenome, telefone) VALUES (?,?,?)");
$sql->bind_param("sss", $nome, $sobrenome, $telefone);
if($sql->execute()){
  header("Location: dashboard.php?sucesso=4");
  exit;
}else {
  header("Location: dashboard.php?erro=5");
  exit;
}
}
//FECHANDO CONEXAO

?>
