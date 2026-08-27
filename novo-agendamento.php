<?php
ob_start();
include_once("includes/header.php");
include_once("config/conexao.php");
?>

<main class="main">
  <!--INCLUIR MENU TOPO-->
  <?php include_once("includes/nav-topo.php")?>
  <section class="main-padding">
      <!--INICIO MARCADOR DE PAGINA-->
      <?php
          if($paginaAtual == 'novo-agendamento.php'):?>
            <a href="dashboard.php" class="paginaIndica">Dashboard/</a><span class="span"><?php echo pathinfo($_SERVER["PHP_SELF"], PATHINFO_FILENAME) ?></span>
        <?php endif ?>
        <!--VOLTAR-->
        <div class="voltar_pagina">
          <a href="clientes.php">
          <img src="assets/icons/voltar.svg" alt="Voltar">
          Voltar</a>
        </div>
        <!--VOLTAR-->
        <!--FIM MARCADOR DE PAGINA-->
  </section>
  <div class="bloco">
  <!--INICIO DA BUSCA DE CLIENTES-->
  <form action="agendar.php" method="GET">
    <article class="buscar-cliente">
      <label for="buscar clientes">
        <input type="text" name="buscar_cliente" placeholder="Buscar cliente" value="<?php htmlspecialchars($_GET["buscar_cliente"] ?? "") ?>" required>
      </label>
      <div class="btn-busca">
        <button>
        <img src="assets/icons/search.svg" alt="buscar clientes">        
        Buscar</button>
        <a href="">
        <img src="assets/icons/add.svg" alt="cadastrar novo cliente">
        Novo cliente</a>
      </div>
    </article>
  </form>

  </div>
  <?php include_once("includes/footer.php") ?>
</main>
