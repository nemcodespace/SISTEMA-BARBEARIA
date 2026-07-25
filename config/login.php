<?php
session_start();
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

//iniciando a verificacao de email existe e senha e igual
$stmt = $conn->prepare("SELECT id, usuario, senha, nome FROM admin WHERE usuario = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

//verificar se veio algum usuario
if($resultado->num_rows === 1){
  $admin = $resultado->fetch_assoc();
  
  //verificar se admim e igual a password_hash
  if(password_verify($senha, $admin["senha"])){
    $_SESSION["admin_id"] = $admin["id"];
    $_SESSION["admin_nome"] = $admin["nome"];
    $_SESSION["admin_usuario"] = $admin["usuario"];
    header("Location: ../dashboard.php");
    exit;
  }
}
header("Location: ../index.php?erro=1");
exit;


?>