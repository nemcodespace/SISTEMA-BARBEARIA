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
}
//RECEBENDO ID DO CLIENTE
$id = (int) ($_POST["id"] ?? "");

//INICIANDO O DELETE DO CLIENTE
$sql = $conn->prepare("DELETE FROM clientes WHERE id = (?)");
$sql->bind_param("i", $id);
if($sql->execute()){
  header("Location: dashboard.php?sucesso=3");
  exit;
}else {
  header("Location: dashboard.php?erro=1");
  exit;
}
//FECHANDO CONEXAO

?>
