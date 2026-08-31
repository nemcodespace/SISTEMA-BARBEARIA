<?php include_once("includes/header.php")?>
    <main class="main">
      <!--NAV-TOPO-->
        <?php include_once("includes/nav-topo.php")?>
      <section class="main-padding">
        <?php
          if($paginaAtual == 'dashboard.php'):?>
            <a href="dashboard.php" class="paginaIndica">Dashboard</a>
          <?php endif 
        ?>
        <?php 
          if(isset($_GET['sucesso']) && $_GET['sucesso'] == 3): ?>
            <div class="sucesso">Cliente removido com sucesso.</div>
        <?php endif; ?>

        <?php 
          if(isset($_GET['sucesso']) && $_GET['sucesso'] == 4): ?>
            <div class="sucesso">Cliente cadastrado com sucesso.</div>
        <?php endif; ?>

        <?php 
        if(isset($_GET['sucesso']) && $_GET['sucesso'] == 5): ?>
            <div class="sucesso">Erro ao cadastrar cliente.</div>
        <?php endif; ?>

        <?php 
          if(isset($_GET['erro']) && $_GET['erro'] == 1): ?>
            <div class="erro">Erro ao apagar cliente.</div>
        <?php endif; ?>
        <!--INICIO CARDS-->
        <article class="cards">
          <!--CLIENTES-->
          <div class="card-azul">
            <?php
              //TOTAL CLIENTES
              $sql = "SELECT * FROM clientes";
              $sql = $conn->query($sql);
              $total = $sql->num_rows;
              if($total > 0):?>
                <h3><?= htmlspecialchars($total) ?></h3>
              <?php else: ?>
                <h3>0</h3>
              <?php endif ?>
            <h4>Clientes</h4>
          </div>
          <!--USUARIOS-->
          <?php
            //contar USUARIOS
            $sql = "SELECT * FROM admin";
            $sql = $conn->query($sql);
            $usuario = $sql->num_rows;
            //verificar se nao vier dados
            if($usuario > 0):?>
              <div class="card-verde">
                <h3><?= htmlspecialchars($usuario) ?></h3>
                <h4>Usúarios</h4>
              </div>
            <?php else :?>
              <div class="card-verde">
                <h3>0</h3>
                <h4>Usúarios</h4>
              </div>
            <?php endif ?>
          
          <!--SERVIÇOS-->
          <div class="card-azul-claro">
            <h3>6</h3>
            <h4>Serviços</h4>
          </div>
          <!--AGENDAMENTOS DIA-->
          <div class="card-amarelo">
            <h3>8</h3>
            <h4>Agendamentos dia</h4>
          </div>
          <!--PROXIMOS AGENDAMENTOS-->
          <div class="card-vermelho">
            <h3>10</h3>
            <h4>Próximos agen...</h4>
          </div>
          <!--RECEITA DO MES-->
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
              <h3><img src="assets/icons/dia.svg" alt="dia">Próximos agendamentos</h3><a href="">Ver todos</a>
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