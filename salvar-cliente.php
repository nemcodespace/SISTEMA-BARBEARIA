<?php
  session_start();
  if(!isset($_SESSION["admin_id"])){
    header("Location: index.php");
    exit;
  }
  include_once("config/conexao.php");
  
  if($_SERVER["REQUEST_METHOD"] !== "POST"){
    header("Location: dashboard.php");
  }
  //PEGANDO OS NOVOS DADOS
  $id = (int) $_POST["id"] ?? "";
  $nome = trim($_POST["novo_nome"]) ?? "";
  $sobrenome = trim($_POST["novo_sobrenome"]) ?? "";
  $telefone = trim($_POST["novo_telefone"]) ?? "";
  
  //PREPARANDO TROCA DE DADOS
  $sql = $conn->prepare("UPDATE clientes SET nome = ?, sobrenome = ?, telefone = ? WHERE id = ?");
  $sql->bind_param("sssi", $nome, $sobrenome, $telefone, $id);
  
  //MOSTRAR MENSAGEM DE SUCESSO/ERRO
  if($sql->execute()){
    header("Location: editar-cliente.php?sucesso=1");
  }else {
    header("Location: editar-cliente.php?erro=2");
  }
  //FECHAR CONEXAO
  $conn->close();

?>