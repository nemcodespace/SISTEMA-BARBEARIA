<?php
include_once("includes/header.php");
include_once("config/conexao.php");
?>
<main class="main">
  <section class="main-padding">
      <!--INCLUIR MENU TOPO-->
      <?php include_once("includes/nav-topo.php")?>
      <!--INICIO MARCADOR DE PAGINA-->
      <?php
          if($paginaAtual == 'clientes.php'):?>
            <a href="dashboard.php" class="paginaIndica">dashboard/</a><span class="span">Clientes</span>
        <?php endif ?>
        <!--FIM MARCADOR DE PAGINA-->
  </section>
  <section>
    <!-- PAGINA EM CONSTRUCAO -->
    <h2>PÁGINA EM CONSTRUÇÃO...</h2>
  </section>
  <?php include_once("includes/footer.php") ?>
</main>
