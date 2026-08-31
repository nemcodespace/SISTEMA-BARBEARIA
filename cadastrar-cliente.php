<?php
ob_start();
include_once("includes/header.php");
include_once("config/conexao.php");
?>
<main class="main">
  <?php include_once("includes/nav-topo.php")?>
  <section class="main-padding">
      <?php if($paginaAtual == 'cadastrar-cliente.php'):?>
            <a href="dashboard.php" class="paginaIndica">Dashboard/</a><span class="span"><?= pathinfo($_SERVER["PHP_SELF"], PATHINFO_FILENAME) ?></span>
        <?php endif ?>
        <div class="voltar_pagina">
          <a href="clientes.php">
          <img src="assets/icons/voltar.svg" alt="Voltar">
          Voltar</a>
        </div>
        <!--MENSAGEM SUCESSO/ERRO-->
        <?php
          if(isset($_GET["sucesso"]) == 1):?>
            <div class="sucesso">
              <p>Dados salvo com sucesso</p>
            </div>
          <?php elseif(isset($_GET["erro"]) == 2): ?>
            <div class="erro">
              <p>Erro ao salvar os dados</p>
            </div>
          <?php endif  ?>
  </section>
    <div class="bloco">
      <form action="cadastrar.php" method="POST" class="form-container">
        <h3>Cadastrar cliente</h3>
        <section class="form">
        <label>
          Nome
          <input type="text" name="nome" id="nome" required>
        </label>
        <label>
          Sobrenome
          <input type="text" name="sobrenome" id="sobrenome" required>
        </label>
        <label>
          Telefone
          <input type="text" name="telefone" id="telefone" required>
        </label>
        </section>
        <div class="btn-busca">
          <button type="submit">Cadastrar</button>
        </div>
      </form>
  </div>
  <?php include_once("includes/footer.php") ?>
</main>