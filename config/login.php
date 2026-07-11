<?php
include_once("conexao.php");

//verifica se foi dados diferentes de post
if($_SERVER["REQUEST_METHOD"] !== "POST"){
  //se for diferente de post volta para login
  header("Location: ../index.php");
  exit;
}

//inserindo usuario do sistema
/*
$usuario = "admin@gmail.com";
$senha = password_hash("1234", PASSWORD_DEFAULT);
$nome = "admin";

$stmt = $conn->prepare("INSERT INTO admin (usuario, senha, nome) VALUES (?,?,?)");
$stmt->bind_param("sss", $usuario, $senha, $nome);
$stmt->execute();
*/

//email e senha do login
$email = trim($_POST["email"]);
$senha = $_POST["senha"];



?>