<?php include_once("includes/header.php")?>
    <main class="main">
      <section class="main-padding">
        <!--NAV-TOPO-->
        <?php include_once("includes/nav-topo.php")?>
        <?php
          if($paginaAtual == 'dashboard.php'):?>
            <a href="dashboard.php" class="paginaIndica">dashboard</a>
          <?php endif 
        ?>
        <!--INICIO CARDS-->
        <article class="cards">
          <div class="card-azul">
            <h3>4</h3>
            <h4>Clientes</h4>
          </div>
          <div class="card-verde">
            <h3>2</h3>
            <h4>Usúarios</h4>
          </div>
          <div class="card-azul-claro">
            <h3>6</h3>
            <h4>Serviços</h4>
          </div>
          <div class="card-amarelo">
            <h3>8</h3>
            <h4>Agendamentos dia</h4>
          </div>
          <div class="card-vermelho">
            <h3>10</h3>
            <h4>Próximos agen...</h4>
          </div>
          <div class="card-cinza">
            <h3>R$: 100,00</h3>
            <h4>Receita do mês</h4>
          </div>
        </article>
        <!--FIM CARDS-->
        <!--INICIO CARD2-->
        <article class="card2">
          <div class="card2-hero1">
            <div class="card2-hero1-titulo">
              <h3><img src="assets/icons/dia.svg" alt="dia">Agendamentos de hoje</h3><span>3</span>
            </div>
            <div class="card-agendamentos">
              agendamentos
            </div>
          </div>
          <div class="card2-hero2">
            <div class="card2-hero1-titulo">
              <h3><img src="assets/icons/dia.svg" alt="dia">Próximos agendamentos</h3><button>Ver todos</button>
            </div>
            <div class="card-agendamentos">
              agendamentos
            </div>
          </div>
        </article>
        <!--FIM CARD2-->
        
      </section>
    <!-- footer -->
    <?php include_once("includes/footer.php")?>
    </main>
  </div>
</body>
</html>