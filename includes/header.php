<?php
/*session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location: index.php");
  exit;
}*/
include_once("config/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <title>Dashboard-barbearia-stylo</title>
</head>
<body>
  <div class="container">
    <!-- inicio header -->
    <header class="header">
      <div class="header-left">
        <div class="logo">
          <h1><img src="assets/icons/tesoura.svg" alt="logo">Barbearia Stylo</h1>
          <p>Sistema gestão</p>
        </div>
        <nav class="menu-left">
          <ul>
            <li>
              <a href="dashboard.php" id="mark"><img src="assets/icons/dash-speed.svg" alt="dashboard">
                Dashboard
              </a>
            </li>
            <li>
              <a href=""><img src="assets/icons/add.svg" alt="add">
                Novo agendamento
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- fim do header -->